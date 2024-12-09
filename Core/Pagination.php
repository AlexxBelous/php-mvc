<?php

namespace Core;


class Pagination
{
    public int $count_page = 1;
    public int $current_page = 1;
    public string $uri = '';
    public int $mid_size = 2;
    public int $all_pages = 7;

    public function __construct(
        public int $page = 1,
        public int $per_page = 1,
        public int $total = 1
    )
    {
        $this->count_page = $this->getCountPages();
        $this->current_page = $this->getCurrentPage();
    }

    private function getCountPages(): int
    {
        return ceil($this->total / $this->per_page) ?: 1;
    }

    private function getCurrentPage(): int
    {
        if ($this->page < 1) {
            $this->page = 1;
        }
        if ($this->page > $this->count_page) {
            $this->page = $this->count_page;
        }
        return $this->page;
    }

    public function getStart(): int
    {
        return ($this->current_page - 1) * $this->per_page;
    }
}