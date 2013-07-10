<?php

namespace HtmlMeta;

interface WriterInterface
{
    public function add(MetaInterface $meta);

    public function addArray($array);

    public function render();
}
