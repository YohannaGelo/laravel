@component('mail::message')
# Restablecimiento de contraseña

Has recibido este correo porque se solicitó un restablecimiento de contraseña para tu cuenta.

@component('mail::button', ['url' => $actionUrl])
Restablecer contraseña
@endcomponent

Si no solicitaste este restablecimiento, ignora este correo.

Gracias,<br>
{{ config('app.name') }}
@endcomponent