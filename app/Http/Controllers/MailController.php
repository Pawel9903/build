<?php declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Handler\MailHandler;
use App\Validator\ContactMailValidate;
use App\Validator\WorkMailValidate;
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
     * @var WorkMailValidate
     */
    private $workMailValidator;

    /**
     * MailController constructor.
     * @param MailHandler $handler
     * @param ContactMailValidate $contactMailValidate
     * @param WorkMailValidate $workMailValidate
     */
    public function __construct(MailHandler $handler, ContactMailValidate $contactMailValidate, WorkMailValidate $workMailValidate)
    {
        $this->handler = $handler;
        $this->contactValidator = $contactMailValidate;
        $this->workMailValidator = $workMailValidate;
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function contact(Request $request)
    {
        $this->contactValidator->validate($request);
        $this->handler->handle($request)->sendContact();

        return response()->json('success',200);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function work(Request $request)
    {
        dd($request);
        $this->workMailValidator->validate($request);
        $this->handler->handle($request)->sendContact();

        return response()->json('success',200);
    }
}
