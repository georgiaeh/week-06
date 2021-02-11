<?php

namespace App\Library;

class Book{
    private $title;
    private $pageCount;
    private $pagesRead = 1;

    public function __construct(string $title, int $pageCount)
    {
        $this->title = $title;
        $this->pageCount = $pageCount;
    }

    public function read(int $num) : void
    {
        $this->pagesRead += $num;
    }

    public function currentPage() : int
    {
        return $this->pagesRead;
    }
}