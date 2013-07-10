<?php

namespace HtmlMeta;

class MetaTest extends \PHPUnit_Framework_TestCase
{
    public function testAttributes()
    {
        $meta = new Meta();
        $this->assertInstanceOf('HtmlMeta\\MetaInterface', $meta);
        $this->assertEquals(array(), $meta->attributes());
        $this->assertCount(0, $meta->attributes());
    }

    public function testAttributes2()
    {
        $attributes = array('name' => 'test', 'content' => 'woooo');
        $meta = new Meta($attributes);
        $this->assertInstanceOf('HtmlMeta\\MetaInterface', $meta);
        $this->assertEquals($attributes, $meta->attributes());
    }

    public function testRender()
    {
        $attributes = array('name' => 'test', 'content' => 'woooo');
        $meta = new Meta($attributes);
        $this->assertEquals('<meta name="test" content="woooo" />', $meta->render());
    }
}
