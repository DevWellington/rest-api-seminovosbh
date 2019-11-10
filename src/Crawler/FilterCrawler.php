<?php

namespace App\Crawler;

class FilterCrawler implements FilterCrawlerInterface
{
    /**
     * @todo Create class to filter data of Request API
     * 
     * FilterCrawler.php
     * FilterCrawlerInterface.php
     * 
     * time exceeded to create
     * 
     */

    public function __construct(Request $request)
    {
        dump($request);
    }
}
