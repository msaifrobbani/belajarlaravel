@component('mail::message')
# <strong>Selamat Datang di {{ config('app.name') }}</strong>

Selamat datang di {{ config('app.name') }}. Silahkan aktivasi Akun Anda disini

@component('mail::button', ['url' => ''])
Aktivasi
@endcomponent

Terima kasih, <br>
<strong>Sincerly</strong>,<br>
{{ config('app.name') }}
@endcomponent
