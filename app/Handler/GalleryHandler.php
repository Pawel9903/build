<?php declare(strict_types=1);

namespace App\Handler;

use App\Gallery;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

/**
 * Class GalleryHandler
 * @package App\Handler
 * @author Paweł Ged <pawelged9903@gmail.com>
 */
class GalleryHandler extends Handler
{
    /**
     * @var Gallery
     */
    private $gallery;

    /**
     * PageHandler constructor.
     * @param Gallery $gallery
     */
    public function __construct(Gallery $gallery)
    {
        parent::__construct();


        $this->gallery = $gallery;
    }

    /**
     * @return Collection
     */
    public function getAll(): Collection
    {
        return $this->gallery::all();
    }

    /**
     * @param bool $isIndex
     * @return Collection
     */
    public function getByPage(bool $isIndex = false): Collection
    {
        return $this->gallery::findByPage($isIndex)->get();
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