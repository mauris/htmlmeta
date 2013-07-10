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

    public function render()
    {
        $buffer = '<meta ';
        foreach ($attributes as $key => $value) {
            $buffer .= $key . '="' . htmlspecialchars($value, ) . '" ';
        }
        $buffer .= '/>';
        return $buffer;
    }
}
