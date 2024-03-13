<?php
require_once APP.'/app/services/Postservices.php';
class NewsController
{
    public function index()
    {
        //
        $m= new Postservices();
        $xs = $m->getALLCategory();
        $es = $m->getALLNews();
        //
        require_once APP.'/app/views/news/news.php';
    }
    public function dat()
    {

    }
}