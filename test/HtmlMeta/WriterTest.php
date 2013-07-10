<?php

namespace HtmlMeta;

class WriterTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $writer = new Writer();

        $property = new \ReflectionProperty($writer, 'collection');
        $property->setAccessible(true);

        $meta = new Meta(array('test' => true));
        $writer->add($meta);

        $collection = $property->getValue($writer);
        $this->assertEquals($meta, $collection[0]);
    }

    public function testAddArray()
    {
        $writer = new Writer();

        $property = new \ReflectionProperty($writer, 'collection');
        $property->setAccessible(true);

        $meta = new Meta(array('test' => true));
        $writer->add($meta);

        $meta2 = new Meta(array('test2' => true));
        $writer->addArray(array($meta2));

        $collection = $property->getValue($writer);
        $this->assertEquals($meta, $collection[0]);
        $this->assertEquals($meta2, $collection[1]);
    }

    public function testRender()
    {
        $writer = new Writer();

        $property = new \ReflectionProperty($writer, 'collection');
        $property->setAccessible(true);

        $meta = new Meta(array('test' => 'fun'));
        $writer->add($meta);
        $writer->add($meta);

        $this->assertEquals("<meta test=\"fun\" />\n<meta test=\"fun\" />\n", $writer->render());
    }
}