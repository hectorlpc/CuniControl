<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;

class MyResetPassword extends ResetPassword
{
    use Queueable;
    public function toMail($notifiable)
    {
      return (new MailMessage)
        ->subject('Recuperar contraseña')
        ->greeting('Hola')
        ->line('Estás recibiendo este correo porque hiciste una solicitud de recuperación de contraseña para tu cuenta.')
        ->action('Recuperar contraseña', route('password.reset', $this->token));
    }

}
