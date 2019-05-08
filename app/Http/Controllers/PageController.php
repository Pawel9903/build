<?php declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Handler\GalleryHandler;
use App\Handler\PartnerHandler;
use Illuminate\Contracts\View\View;

/**
 * Class PageController
 * @package App\Http\Controllers
 * @author Paweł Ged <pawelged9903@gmail.com>
 */
class PageController extends Controller
{
    /**
     * @var GalleryHandler
     */
    private $galleryHandler;

    /**
     * @var PartnerHandler
     */
    private $partnerHandler;

    /**
     * PageController constructor.
     * @param GalleryHandler $galleryHandler
     * @param PartnerHandler $partnerHandler
     */
    public function __construct(GalleryHandler $galleryHandler, PartnerHandler $partnerHandler)
    {
        $this->galleryHandler = $galleryHandler;
        $this->partnerHandler = $partnerHandler;
    }

    /**
     * @return View
     */
    public function index(): View
    {
        return view('pages.index', [
            'gallery' => $this->galleryHandler->getByPage(true),
            'partners' => $this->partnerHandler->getAll(),
            'slider' => true
        ]);
    }

    /**
     * @return View
     */
    public function gallery(): View
    {
        $gallery = $this->galleryHandler->getAll();
        return view('pages.gallery', ['gallery' => $gallery, 'slider' => false]);
    }

    /**
     * @return View
     */
    public function services(): View
    {
        return view('pages.services', ['slider' => false]);
    }

    /**
     * @return View
     */
    public function work(): View
    {
        return view('pages.work', ['slider' => false]);
    }

    /**
     * @return View
     */
    public function contact(): View
    {
        return view('pages.contact', ['slider' => false]);
    }
}
