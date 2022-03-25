@component('mail::message')
<img src="{{url('img/HM2019.png')}}"><br>
# Algien te ha escrito por tu aplicación web. <br>
Sus datos de contacto son: <br>
{{$Nombre}}<br>
{{$Apellidos}}<br>
{{$Email}}<br>
{{$Telefono}}<br>
{{$Mensaje}}<br>

Contáctalo a la brevedad.<br>
{{ config('app.name') }}
@endcomponent
