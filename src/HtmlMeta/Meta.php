<?php

namespace HtmlMeta;

class Meta implements MetaInterface
{
    protected $attributes;

    public function __construct($attributes = array())
    {
        $this->attributes = $attributes;
    }

    public function attributes()
    {
        return $this->attributes;
    }
}
