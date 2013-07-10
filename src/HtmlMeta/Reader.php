<?php

namespace HtmlMeta;

use Symfony\Component\DomCrawler\Crawler;

class Reader implements ReaderInterface
{
    public function parse($html)
    {
        $result = array();

        $crawler = new Crawler($html);
        $crawler = $crawler->filterXPath('//meta');
        foreach ($crawler as $node) {
            $attributes = array();
            $nodeAttributes = $node->attributes;
            $length = $nodeAttributes->length;
            for ($i = 0; $i < $length; ++$i) {
                $attributes[$nodeAttributes->item($i)->name] = $nodeAttributes->item($i)->value;
            }
            $result[] = new Meta($attributes);
        }

        return $result;
    }
}
