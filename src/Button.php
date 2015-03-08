<?php

namespace Clay\BladePagination;

class Button {

    const DISABLED = 'disabled';
    const ACTIVE = 'active';
    const LINK = 'link';

    protected $status = Button::LINK;
    protected $url;
    protected $text;

    public function __construct($status, $url = '', $text = '')
    {
        if ( ! in_array($status, [static::DISABLED, static::LINK, static::ACTIVE]))
        {
            throw new \Exception('Invalid button status: ' . $status);
        }

        $this->url = $url;
        $this->text = $text;
        $this->status = $status;
    }

    public function __toString()
    {
        return $this->text();
    }

    public function url()
    {
        return $this->url;
    }

    public function text()
    {
        return $this->text;
    }

    public function active()
    {
        return $this->status == static::ACTIVE;
    }

    public function link()
    {
        return $this->status == static::LINK;
    }

    public function disabled()
    {
        return $this->status == static::DISABLED;
    }

} 