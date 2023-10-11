@component('mail::message')
  # New contact was shared with you

  User <span class="text-info">{{ $fromUser }} shared contact
    {{ $sharedContact }} with you.</span>


  @component('mail::button', ['url' => route('contact-shares.index')])
    See here
  @endcomponent

  Thanks,<br>
  {{ config('app.name') }}

@endcomponent
