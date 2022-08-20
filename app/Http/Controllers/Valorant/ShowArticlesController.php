<?php

namespace App\Http\Controllers\Valorant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ValorantArticle;

class ShowArticlesController extends Controller
{
    
    public function index() 
    {
        $articles =  ValorantArticle::orderBy('created_at', 'desc')
                                    ->get()
                                    ->take(10);

        return view('valorant.index', compact('articles'));
    }

    public function test()
    {
        \Scrape::hello();
    }

}
