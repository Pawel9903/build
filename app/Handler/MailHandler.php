<?php declare(strict_types = 1);

namespace App\Handler;

use App\Mail\ContactMail;
use App\Mail\WorkMail;
use App\Transformer\ContactMailTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Handler\Handler as Handler;

/**
 * Class MailHandler
 * @package App\Handler
 * @author Paweł Ged <pawelged9903@gmail.com>
 */
class MailHandler extends Handler
{
    /**
     * @var ContactMail
     */
    private $contactMail;

    /**
     * @var ContactMailTransformer
     */
    private $contactMailTransformer;

    /**
     * @var WorkMail
     */
    private $workMail;

    /**
     * MailHandler constructor.
     * @param ContactMail $contactMail
     * @param WorkMail $workMail
     * @param ContactMailTransformer $contactMailTransformer
     */
    public function __construct(ContactMail $contactMail, WorkMail $workMail, ContactMailTransformer $contactMailTransformer)
    {
        parent::__construct();

        $this->contactMail = $contactMail;
        $this->workMail = $workMail;
        $this->contactMailTransformer = $contactMailTransformer;
    }

    /**
     * @param Request $request
     * @return $this
     */
    protected function processing(Request $request): self
    {
        $this->request = $request;
        return $this;
    }

    /**
     * @return bool
     */
    public function sendContact(): bool
    {

        Mail::to(env('MAIL_FROM_ADDRESS', 'pawelged9903@gmail.com'))->send($this->contactMailTransformer->transform($this->request->all()));
        return true;
    }
}