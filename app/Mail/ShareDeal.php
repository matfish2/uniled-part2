<?php

namespace App\Mail;

use App\Form;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ShareDeal extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * form model
     *
     * @var Form
     */
    public $form;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Form $form)
    {
        $this->form = $form;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Check out this awesome deal')
                    ->view('emails.share');
    }
}
