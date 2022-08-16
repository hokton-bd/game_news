<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScrapeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        sleep(1);
        $url = 'https://valorantnews.jp/';
        $crawler = \Goutte::request('GET', $url);
        $crawler->filter('#post_list_tab_1 .-type-list2 h2.p-postList__title')->each(function ($node) {
            dump($node->text());
        });

    }
}
