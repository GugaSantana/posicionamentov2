<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PaymentConfirmed extends Notification
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
        if($notifiable->company_id == 5){
            $text = 'O seu pagamento foi confirmado e seu acesso será liberado na data que o SINCOR - PR definir para início da turma.';
        }
        else{
            $text = 'O seu pagamento foi confirmado e o seu acesso ao Programa Top Seller foi liberado!';
        }

        $text = 'Obrigado pela confiança depositada no <font style="color: #c2a94d">PROGRAMA TOPSELLER</font>.<br><br>
        <br>
        Para iniciar sua jornada, siga os seguintes passos:
        <br><br>
        1 – Entrar no site: <a href="https://posicionamento.com.br">www.posicionamento.com.br</a>
        <br><br>
        2 – Clicar em Programa Top Seller – login
        <br><br>
        3 – Fazer o login utilizando o email e senha que você criou ao fazer o seu cadastro.
        <br><br>
        4 – Caso tenha esquecido sua senha clique em “Esqueci minha senha”
        <br><br>
        Agora é só começar, conhecer técnicas surpreendentes para aumentar sua receita e colocar em prática, uma nova forma de vender.
        <br><br>
        Esperamos que sua experiência no <font style="color: #c2a94d">PROGRAMA TOPSELLER</font> seja proveitosa e positiva.
        <br>
        <b><center><font style="color: #c2a94d">MUDE PARA GANHAR &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SEJA UM TOPSELLER</font></center></b>
        <br><br>
        Em caso de dúvida entre contato: <a href="https://posicionamento.com.br/contato">https://posicionamento.com.br/contato</a>
        <br>
        
        Aguardamos por você
        <br>
        <br>
        <font style="color: #c2a94d">EQUIPE TOPSELLER</font>
        ';

        return (new MailMessage)
                ->subject('Pedido Aprovado - Bem vindo ao TopSeller! #'.$notifiable->id)
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
