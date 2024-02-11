<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LoanApplicationEmail extends Mailable
{
    use Queueable, SerializesModels;

    private $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data['details'] = $this->details;
        return $this->from('info@ksolutions.com')
               ->subject('Loan Application '.$this->details['id'])
               ->view('emails.loan_application_notice', $data);
    }
}
