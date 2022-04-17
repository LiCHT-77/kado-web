<?php

namespace App\Http\Controllers;

use App\Services\NewsService;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(NewsService $newsService)
    {
        $news = $newsService->getNewsList(5);

        return view('site.index', ['news' => $news]);
    }
}
