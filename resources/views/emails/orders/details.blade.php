@component('mail::message')
# Congratulations {{ $data['name'] }}

Your registration was successfull.

@component('mail::button', ['url' => 'https://training.ifocuspictures.studio/'])
Click to see more
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
