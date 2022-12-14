<?php

namespace App\Http\Controllers\Valorant;

use App\Http\Controllers\Controller;
use App\Models\ValorantUrl;
use App\Models\ValorantArticle;

class ScrapeController extends Controller
{
    protected $host = 'https://valorantnews.jp/';

    protected function makeCrawler($url) 
    {
        return \Goutte::request('GET', $url);
    }

    public function run() 
    {
        $this->refresh_table();
        $this->saveUrls();
        $urls = ValorantUrl::all();
        foreach ($urls as $item) {
            $this->saveArticles($item->url);
        }
    }

    public function saveUrls()
    {
        $crawler = $this->makeCrawler($this->host);
        $crawler->filter('#post_list_tab_1 .-type-list2 .p-postList__link')
                ->each(function ($node) {
                    ValorantUrl::create([
                        'url' => $node->attr('href')
                    ]);
                    sleep(1);
                });
    }

    public function saveArticles($url) 
    {
        $crawler = $this->makeCrawler($url);
        $title = $crawler->filter('h1.c-postTitle__ttl')
                         ->text();
        
        ValorantArticle::create([
            'title' => $title,
            'url' => $url
        ]);

    }

    public function refresh_table() 
    {
        ValorantUrl::truncate();
    }

}
