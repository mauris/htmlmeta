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

/**
 * The concrete implementation of a meta tag writer
 * 
 * @author Sam Yong <sam@mauris.sg>
 * @package HtmlMeta
 * @since 1.0.0
 */
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
