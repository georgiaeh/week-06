<?php

namespace App\Library;

class Book{
    private $title;
    private $pageCount;
    private $pagesRead = 1;

    public function __construct($title, $pageCount)
    {
        $this->title = $title;
        $this->pageCount = $pageCount;
    }

    public function read($num){
        $this->pagesRead += $num;
    }

    public function currentPage()
    {
        return $this->pagesRead;
    }
}