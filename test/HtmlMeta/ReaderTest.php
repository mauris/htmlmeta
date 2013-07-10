<?php

namespace HtmlMeta;

class ReaderTest extends \PHPUnit_Framework_TestCase
{
    public function testParse()
    {
        $reader = new Reader();

        $content = <<<EOT
    <meta property="og:title" content="The Rock" />
    <meta property="og:type" content="video.movie" />
    <meta property="og:url" content="http://www.imdb.com/title/tt0117500/" />
    <meta property="og:image" content="http://ia.media-imdb.com/images/rock.jpg" />
EOT;
        
        $result = $reader->parse($content);
        $this->assertCount(4, $result);
        $this->assertEquals(array('property' => 'og:title', 'content' => 'The Rock'), $result[0]->attributes());
        $this->assertEquals(array('property' => 'og:type', 'content' => 'video.movie'), $result[1]->attributes());
    }
}
