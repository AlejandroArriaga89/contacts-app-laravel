<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactShareController extends Controller {
    public function index() {
        $contactsSharedWithUser = auth()->user()->sharedContacts()->with('user')->get();
        $contactsSharedByUser = auth()->user()->contacts()
            ->with(['sharedWithUsers' => fn ($query) => $query->withPivot('id')])->get()->filter(fn ($contact) => $contact->sharedWithUsers->isNotEmpty());
        return view('contact-shares.index', compact('contactsSharedWithUser', 'contactsSharedByUser'));
    }

    public function create() {
        return view('contact-shares.create');
    }
    public function store(Request $request) {
        $data = $request->validate([
            'contact_email' => Rule::exists('contacts', 'email')->where('user_id', auth()->id()),
            'user_email' => "exists:users,email|not_in:{$request->user()->email}",
        ], [
            'user_email.not_in' => "You can't share contacts with yourself",
            'contact_email.exists' => "This contact was not found in your contact list"
        ]);

        $user = User::where('email', $data['user_email'])->first(['id', 'email']);
        $contact = Contact::where('email', $data['contact_email'])->first(['id', 'email']);

        $shareExists = $contact->sharedWithUsers()->wherePivot('user_id', $user->id)->first();

        if ($shareExists) {
            return back()->withInput($request->all())->withErrors([
                'contact_email' => "This contact was already shared with user $user->email"
            ]);
        }
        $contact->sharedWithUsers()->attach($user->id);

        return redirect()->route('home')->with('alert', [
            'type' => "success",
            'message' => "Contact $contact->email shared with $user->email successfully",
        ]);
    }
    public function destroy(int $id) {
        // $contact = auth()->user()->contacts()->with(['sharedWithUsers' => fn ($query) => $query->where('contact_shares.id', $id)])->get()->firstWhere(fn ($contact) => $contact->sharedWithUsers->isNotEmpty());
        // abort_if($contact->user_id !== auth()->id(), 403);
        $contactShare = DB::selectOne('SELECT * FROM contact_shares WHERE id = ?', [$id]);
        $contact = Contact::findOrFail($contactShare->contact_id);
        abort_if($contact->user_id !== auth()->id(), 403);

        $contact->sharedWithUsers()->detach($contactShare->user_id);

        return redirect()->route('contact-shares.index')->with('alert', [
            'type' => 'success', 'message' => "Contact $contact->email has been unshared."
        ]);
    }
}
