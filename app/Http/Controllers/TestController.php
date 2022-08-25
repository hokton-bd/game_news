<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    protected function makeCrawler($url) 
    {
        return \Goutte::request('GET', $url);
    }

    public function test() {
        $crawler = $this->makeCrawler('https://valorantnews.jp/archives/51662');
        $thumbnail_url = $crawler->filter('img.p-articleThumb__img')
                                 ->eq(1)
                                 ->attr('src');
        var_dump($thumbnail_url);
    }
}
