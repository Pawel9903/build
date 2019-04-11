<?php declare(strict_types = 1);

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Class ContactMail
 * @package App\Mail
 * @author Paweł Ged <pawelged9903@gmail.com>
 */
class ContactMail extends Mailable
{
    use Queueable, SerializesModels, MailTrait;

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.mail', [
            'name' => $this->name,
            'email' => $this->email,
            'description' => $this->description,
            'phone' => $this->phone
        ]);
    }
}
