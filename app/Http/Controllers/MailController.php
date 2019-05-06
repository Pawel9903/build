<?php declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Handler\MailHandler;
use App\Validator\ContactMailValidate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

/**
 * Class MailController
 * @package App\Http\Controllers
 * @author Paweł Ged <pawelged9903@gmail.com>
 */
class MailController extends Controller
{
    /**
     * @var MailHandler
     */
    private $handler;

    /**
     * @var ContactMailValidate
     */
    private $contactValidator;

    /**
     * MailController constructor.
     * @param MailHandler $handler
     * @param ContactMailValidate $contactMailValidate
     */
    public function __construct(MailHandler $handler, ContactMailValidate $contactMailValidate)
    {
        $this->handler = $handler;
        $this->contactValidator = $contactMailValidate;
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function contact(Request $request)
    {
        $this->contactValidator->setRules()->validate($request);
        $this->handler->handle($request)->sendContact();

        return response()->json('success',200);
    }
}