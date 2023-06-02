@component('mail::message')
<h1 style="text-align: center">Ваша електронна бронь до концерту групи "Brains"</h1>

<h2 style="text-align: center; margin-bottom: 32px;">
    Покажіть при вході для оплати.
</h2>

@component('mail::panel')
Ваш код: {{$hash}}
@endcomponent

@endcomponent
