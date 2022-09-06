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
        $url = 'https://valorantnews.jp/archives/52418';
        // $url = 'https://valorantnews.jp/archives/52459';
        $crawler = $this->makeCrawler($url);
        $thumbnail_url = $crawler->filter('img.p-articleThumb__img');

        // echo($thumbnail_url->eq(1)->attr('src'));

        if(strpos($thumbnail_url->attr('src'), 'data:image') === false) //data:imageが含まれていない場合
        {
            echo($thumbnail_url->attr('src'));
            echo '<br />a';
        }
        else //含まれている場合 
        {
            echo($thumbnail_url->eq(1)->attr('src'));
            echo '<br />b';
            
        }
    }
}
