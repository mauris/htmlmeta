<?php

namespace HtmlMeta;

interface WriterInterface extends RenderableInterface
{
    public function add(MetaInterface $meta);

    public function addArray($array);
}
