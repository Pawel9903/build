<?php declare(strict_types = 1);

namespace App\Handler;

use App\Mail\ContactMail;
use App\Mail\WorkMail;
use App\Transformer\ContactMailTransformer;
use App\Transformer\WorkMailTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Handler\Handler as Handler;

/**
 * Class MailHandler
 * @package App\Handler
 * @author Paweł Ged <pawelged9903@gmail.com>
 * @method MailHandler handle(Request $request = null)
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
     * @var WorkMailTransformer
     */
    private $workMailTransformer;

    /**
     * @var WorkMail
     */
    private $workMail;

    /**
     * MailHandler constructor.
     * @param ContactMail $contactMail
     * @param WorkMail $workMail
     * @param ContactMailTransformer $contactMailTransformer
     * @param WorkMailTransformer $workMailTransformer
     */
    public function __construct(ContactMail $contactMail,
                                WorkMail $workMail,
                                ContactMailTransformer $contactMailTransformer,
                                WorkMailTransformer $workMailTransformer)
    {
        parent::__construct();

        $this->contactMail = $contactMail;
        $this->workMail = $workMail;
        $this->contactMailTransformer = $contactMailTransformer;
        $this->workMailTransformer = $workMailTransformer;
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
        Mail::to(env('MAIL_FROM_ADDRESS', 'pawelged9903@gmail.com'))
            ->send($this->contactMailTransformer->transform($this->request->all()));
        return true;
    }

    /**
     * @return bool
     */
    public function sendWork(): bool
    {
        Mail::to(env('MAIL_FROM_ADDRESS', 'pawelged9903@gmail.com'))
            ->send($this->workMailTransformer->transform([
                'request' => $this->request->all(),
                'file' => $this->request->hasFile('file')? $this->request->file('file') : null
            ]));
        return true;
    }
}
