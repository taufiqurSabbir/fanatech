@component('mail::message')
#IT Center
# Dear - Blog Commenter,

@component('mail::panel')
{{ $mail_sent_mail }}
@endcomponent

@component('mail::button', ['url' => 'jiku'])
Click your link
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
