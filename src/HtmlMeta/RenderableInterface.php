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
 * An interface that says an object can be rendered
 * 
 * @author Sam Yong <sam@mauris.sg>
 * @package HtmlMeta
 * @since 1.0.0
 */
interface RenderableInterface
{
    public function render();
}
