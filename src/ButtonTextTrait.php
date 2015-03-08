<?php

namespace Clay\BladePagination;

trait ButtonTextTrait {

    public function trans($key, $default)
    {
        $text = trans("pager.$key");

        if ($text == "pager.$key") {
            return $default;
        }

        return $text;
    }

} 