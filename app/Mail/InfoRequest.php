<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InfoRequest extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
    require 'vendor/autoload.php';
    use Mailgun\Mailgun;

    # Instantiate the client.
    $mgClient = new Mailgun('key-83e6af119bc0e3c0288a49c926c82985');
    $domain = "mg.aaronwilsonphoto.com";

    # Make the call to the client.
    $result = $mgClient->sendMessage($domain, array(
        'from'    => 'Excited User <aaronwilson@aaronwilsonphoto.com>',
        'to'      => 'Baz <aaronwilsonphotography@gmail.com>',
        'subject' => 'Hello',
        'text'    => 'Testing some Mailgun awesomness!'
    ));

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name');
    }


}
