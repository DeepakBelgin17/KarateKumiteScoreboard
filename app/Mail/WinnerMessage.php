<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WinnerMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $winner;

    /**
     * Create a new message instance.
     *
     * @param array $winner
     * @return void
     */
    public function __construct($winner)
    {
        $this->winner = $winner;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('antonymettilda0902@gmail.com')
                    ->subject('Congratulations! You are a winner')
                    ->view('dashboard');
    }
}
