@extends('layouts.app')

@section('content')
  <div class="container">
    <h2 class="text-center">Contacts shared with me</h2>
    @forelse ($contactsSharedWithUser as $contact)
      <div class="d-flex justify-content-between bg-dark mb-3 rounded px-4 py-2 ">
        <div>
          <a href="{{ route('contacts.show', $contact->id) }}">
            <img class="profile-picture"
              src="{{ Storage::url($contact->profile_picture) }}"
              alt="Foto de perfil">
          </a>
        </div>
        <div class="d-flex align-items-center ">
          <p class="me-2 mb-o">{{ $contact->name }}</p>
          <p class="me-2 mb-o d-none d-md-block">
            <a href="mailto:{{ $contact->email }}">
              {{ $contact->email }}
            </a>
          </p>
          <p class="me-2 mb-o d-none d-md-block">
            <a href="tel:{{ $contact->phone_number }}">
              {{ $contact->phone_number }}
            </a>
          </p>
          <p>Shared by:
            <span class="text-info">{{ $contact->user->email }}</span>
          </p>
        </div>
      </div>
    @empty
      <div class="col-md-4 mx-auto">
        <div class="card card-body text-center">
          <p>No contacts were shared with you yet</p>
        </div>
      </div>
    @endforelse


    <h2 class="text-center">Contacts shared by me</h2>
    @forelse ($contactsSharedByUser as $contact)
      @foreach ($contact->sharedWithUsers as $user)
        <div
          class="d-flex justify-content-between bg-dark mb-3 rounded px-4 py-2 ">
          <div>
            <a href="{{ route('contacts.show', $contact->id) }}">
              <img class="profile-picture"
                src="{{ Storage::url($contact->profile_picture) }}"
                alt="Foto de perfil">
            </a>
          </div>
          <div class="d-flex align-items-center ">
            <p class="me-2 mb-o">{{ $contact->name }}</p>
            <p class="me-2 mb-o d-none d-md-block">
              <a href="mailto:{{ $contact->email }}">
                {{ $contact->email }}
              </a>
            </p>
            <p class="me-2 mb-o d-none d-md-block">
              <a href="tel:{{ $contact->phone_number }}">
                {{ $contact->phone_number }}
              </a>
            </p>
            <p>Shared with:
              <span class="text-info">{{ $user->email }}</span>
            </p>

            <form
              action="{{ route('contact-shares.destroy', $user->pivot->id) }}"
              method="POST">
              @csrf
              @method('DELETE')
              <button type="submit"
                class="btn btn-danger mb-0 mx-1 me-2 p-1 px-2">
                Unshare
              </button>
            </form>
          </div>
        </div>
      @endforeach
    @empty
      <div class="col-md-4 mx-auto">
        <div class="card card-body text-center">
          <p>You didn't share any contacts yet.</p>
          <p>
            Share contacts
            <a href="{{ route('contact-shares.create') }}">here</a>.
          </p>
        </div>
      </div>
    @endforelse
  </div>
@endsection
