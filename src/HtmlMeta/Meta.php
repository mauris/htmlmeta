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
 * The meta tag object
 * 
 * @author Sam Yong <sam@mauris.sg>
 * @package HtmlMeta
 * @since 1.0.0
 */
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
        foreach ($this->attributes as $key => $value) {
            $buffer .= $key . '="' . htmlspecialchars($value, ENT_QUOTES) . '" ';
        }
        $buffer .= '/>';
        return $buffer;
    }
}
