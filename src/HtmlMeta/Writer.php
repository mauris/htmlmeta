<?php

namespace HtmlMeta;

class Writer implements WriterInterface
{
    protected $collection = array();

    public function add(MetaInterface $meta)
    {
        $this->collection[] = $meta;
    }

    public function addArray($array)
    {
        $this->collection = array_merge($this->collection, $array);
    }

    public function render()
    {
        $buffer = '';
        foreach ($this->collection as $meta) {
            $buffer .= $meta->render() . "\n";
        }
        return $buffer;
    }
}
