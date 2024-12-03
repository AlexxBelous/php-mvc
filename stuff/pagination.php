<?php

if ($this->current_page > 1) {
    $back .= "<li class='page-item'><a href='" . $this->getLink($this->current_page - 1) . "' class='page-link'>&lt;</a></li>";
}
if ($this->current_page < $this->count_pages) {
    $forward .= "<li class='page-item'><a href='" . $this->getLink($this->current_page + 1) . "' class='page-link'>&gt;</a></li>";
}
if ($this->current_page > $this->mid_size + 1) {
    $start_page .= "<li class='page-item'><a href='" . $this->getLink(1) . "' class='page-link'>&laquo;</a></li>";
}
if ($this->current_page < ($this->count_pages - $this->mid_size)) {
    $end_page .= "<li class='page-item'><a href='" . $this->getLink($this->getCountPages()) . "' class='page-link'>&raquo;</a></li>";
}
for ($i = $this->mid_size; $i > 0; $i--) {
    if ($this->current_page - $i > 0) {
        $page_left .= "<li class='page-item'><a href='" . $this->getLink($this->current_page - $i) . "' class='page-link'>" . ($this->current_page - $i) . "</a></li>";
    }
}
for ($i = 1; $i <= $this->mid_size; $i++) {
    if ($this->current_page + $i <= $this->count_pages) {
        $page_right .= "<li class='page-item'><a href='" . $this->getLink($this->current_page + $i) . "' class='page-link'>" . ($this->current_page + $i) . "</a></li>";
    }
}

return '<nav aria-label="Page navigation example"><ul class="pagination">'
    . $start_page . $back . $page_left
    . '<li class="page-item active"><a class="page-link">'
    . $this->current_page . '</a></li>'
    . $page_right . $forward . $end_page
    . '</ul></nav>';