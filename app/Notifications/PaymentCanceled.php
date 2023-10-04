<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PaymentCanceled extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $text = 'O status de sua compra do <font style="color: #c2a94d">PROGRAMA TOPSELLER</font> deu “não autorizado” pela sua operadora.
        <br><br>
        Por favor, entre em contato com a operadora do seu cartão para verificar o que houve. Ao solucionar o ocorrido entre no link abaixo e realize a compra novamente.
        <br>
        <a href="https://posicionamento.com.br/landingpage">https://posicionamento.com.br/landingpage</a>
        <br><br>
        Em caso de dúvida entre contato: <a href="https://posicionamento.com.br/contato">https://posicionamento.com.br/contato</a>
        <br><br>
        Aguardamos por você
        <br>
        <font style="color: #c2a94d">EQUIPE TOPSELLER</font>';

        return (new MailMessage)
                ->subject('Falha no pagamento - Pedido TopSeller #'.$notifiable->id)
                ->greeting('Olá '.explode(' ', $notifiable->name)[0].',')
                ->line($text)
                ->from('noreply@posicionamento.com.br', 'Posicionamento');
                //->action('Notification Action', url('/'))
                //->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
