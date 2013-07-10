<?php
/**
 * HtmlMeta meta tag reader/writer
 * (c) Sam Yong <sam@mauris.sg>
 * 
 * Released open source under New BSD 3-Clause License.
 *
 * For full copyright and license information, please view the licensing
 * document that was distributed with the source code.
 */

namespace HtmlMeta;

use Symfony\Component\DomCrawler\Crawler;

/**
 * The meta tag reader concrete implementation
 * 
 * @author Sam Yong <sam@mauris.sg>
 * @package HtmlMeta
 * @since 1.0.0
 */
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
