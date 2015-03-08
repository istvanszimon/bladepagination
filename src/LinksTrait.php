<?php

namespace Clay\BladePagination;

trait LinksTrait {

    public function getLinks()
    {
        $buttons = array();

        foreach ($this->window as $key => $list) {
            $buttons = array_merge(
                $buttons,
                $this->getSliderLinks($list, $key != 'first')
            );
        }

        return $buttons;
    }

    protected function getSliderLinks($slider, $separator = true)
    {
        if ( ! is_array ($slider)) {
            return array();
        }

        $buttons = array();

        if ($separator) {
            $buttons[] = $this->getDisabledButton($this->trans('sep', '...'));
        }

        foreach ($slider as $page => $url) {
            $buttons[] = $this->getButton($url, $page);
        }

        return $buttons;
    }

} 