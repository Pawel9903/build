<?php declare(strict_types = 1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

/**
 * Class PageController
 * @package App\Http\Controllers
 * @author Paweł Ged <pawelged9903@gmail.com>
 */
class PageController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('pages.index');
    }

    /**
     * @return View
     */
    public function gallery(): View
    {
        return view('pages.gallery');
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
