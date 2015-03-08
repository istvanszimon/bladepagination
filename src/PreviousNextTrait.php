<?php

namespace Clay\BladePagination;

trait PreviousNextTrait {

    protected function getPrevious()
    {
        $text = $this->trans('prev', '&laquo;');

        if ($this->paginator->currentPage() <= 1) {
            return $this->getDisabledButton($text);
        }

        $url = $this->paginator->url($this->paginator->currentPage() - 1);

        return $this->getButton($url, $text);
    }

    /**
     * Get the next page pagination element.
     *
     * @param  string  $text
     * @return string
     */
    protected function getNext()
    {
        $text = $this->trans('next', '&raquo;');

        // If the current page is greater than or equal to the last page, it means we
        // can't go any further into the pages, as we're already on this last page
        // that is available, so we will make it the "next" link style disabled.
        if ( ! $this->paginator->hasMorePages()) {
            return $this->getDisabledButton($text);
        }

        $url = $this->paginator->url($this->paginator->currentPage() + 1);

        return $this->getButton($url, $text);
    }

} 