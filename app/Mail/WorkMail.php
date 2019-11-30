<?php declare(strict_types = 1);

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Class WorkMail
 * @package App\Mail
 * @author Paweł Ged <pawelged9903@gmail.com>
 */
class WorkMail extends Mailable
{
    use Queueable, SerializesModels, MailTrait;

    /**
     * @var UploadedFile|null
     */
    private $file;

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail = $this->subject('www.bud-ged.com - formularz praca')->from('kontakt@bud-ged.com')->markdown('mail.mail', [
            'name' => $this->name,
            'email' => $this->email,
            'description' => $this->description,
            'phone' => $this->phone
        ]);
        if($this->file){
            $mail->attach($this->file->getRealPath(),
                [
                    'as' => $this->file->getClientOriginalName(),
                    'mime' => $this->file->getClientMimeType(),
                ]);
        }
        return $mail;
    }

    /**
     * @return UploadedFile|null
     */
    public function getFile(): ?UploadedFile
    {
        return $this->file;
    }

    /**
     * @param UploadedFile|null $file
     * @return $this
     */
    public function setFile(?UploadedFile $file): self
    {
        $this->file = $file;
        return $this;
    }
}
