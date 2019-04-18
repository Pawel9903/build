<?php declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Handler\GalleryHandler;
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
     * PageController constructor.
     * @param GalleryHandler $galleryHandler
     */
    public function __construct(GalleryHandler $galleryHandler)
    {
        $this->galleryHandler = $galleryHandler;
    }

    /**
     * @return View
     */
    public function index(): View
    {
        $gallery = $this->galleryHandler->getByPage(true);
        return view('pages.index', ['gallery' => $gallery]);
    }

    /**
     * @return View
     */
    public function gallery(): View
    {
        $gallery = $this->galleryHandler->getAll();
        return view('pages.gallery', ['gallery' => $gallery]);
    }

    /**
     * @return View
     */
    public function services(): View
    {
        return view('pages.services');
    }

    /**
     * @return View
     */
    public function work(): View
    {
        return view('pages.work');
    }

    /**
     * @return View
     */
    public function contact(): View
    {
        return view('pages.contact');
    }
}
