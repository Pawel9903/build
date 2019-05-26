<?php declare(strict_types=1);

namespace App\Handler;

use App\Partner;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

/**
 * Class PartnerHandler
 * @package App\Handler
 * @author Paweł Ged <pawelged9903@gmail.com>
 * @method PartnerHandler handle(Request $request = null)
 */
class PartnerHandler extends Handler
{
    /**
     * @var Partner
     */
    private $partner;

    /**
     * PageHandler constructor.
     * @param Partner $partner
     */
    public function __construct(Partner $partner)
    {
        parent::__construct();

        $this->partner = $partner;
    }

    /**
     * @return Collection
     */
    public function getAll(): Collection
    {
        return $this->partner::all();
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
}
