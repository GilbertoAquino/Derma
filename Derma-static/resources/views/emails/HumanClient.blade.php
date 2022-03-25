@component('mail::message')
<img src="{{url('img/HM2019.png')}}">

Gracias por contactar a Human México. 
En la brevedad un agente se contactará contigo.

@component('mail::button', ['url' => 'https://www.human-mexico.com/'])
Visita nuestra página
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
