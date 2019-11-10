<?php

namespace App\Crawler;

class MessageCrawler implements MessageCrawlerInterface
{
    /**
     * @todo Create class to Message data of Request API
     * 
     * MessageCrawler.php
     * MessageCrawlerInterface.php
     * 
     * time exceeded to create
     * 
     */

    public function __construct(Request $request)
    {
        dump($request);
    }
}
