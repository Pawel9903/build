<?php declare(strict_types = 1);

namespace App\Handler;

use Illuminate\Http\Request;

/**
 * Class Handler
 * @package App\Handler
 * @author Paweł Ged <pawelged9903@gmail.com>
 */
abstract class Handler
{
    /**
     * @var Request
     */
    protected $request;
    /**
     * @var Handler|null
     */
    protected $successor = null;

    /**
     * Handler constructor.
     */
    public function __construct()
    {
        $this->successor = $this;
    }

    /**
     * This approach by using a template method pattern ensures you that
     * each subclass will not forget to call the successor
     *
     * @param Request $request
     *
     * @return string|null
     */
    public function handle(Request $request)
    {
        $processed = $this->processing($request);
        if ($processed === null) {
            // the request has not been processed by this handler => see the next
            if ($this->successor !== null) {
                $processed = $this->successor->handle($request);
            }
        }
        return $processed;
    }
    abstract protected function processing(Request $request);
}