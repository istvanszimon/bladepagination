<?php

namespace Clay\BladePagination;

trait ButtonFactoryTrait {

    public function getDisabledButton($text)
    {
        return new Button(Button::DISABLED, '', $text);
    }

    protected function getButton($url, $page)
    {
        if ($page == $this->paginator->currentPage()) {
            return new Button(Button::ACTIVE, $url, $page);
        }

        return new Button(Button::LINK, $url, $page);
    }

} 