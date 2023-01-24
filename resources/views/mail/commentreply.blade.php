@component('mail::message')
# Dear - BD Company

@component('mail::panel')
Comment Reply
@endcomponent

@component('mail::button', ['url' => 'www.faceboook.com'])
Jiku
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
