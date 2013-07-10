#HtmlMeta

HtmlMeta provides abstraction for HTML meta tag reading and writing in PHP. You can directly use this library to generate out or parse meta tags in HTML content, or use OpenGraph or Twitter Cards implementation of HtmlMeta to enrich your Search Engine Optimisation and user experience.

##Installation

You can install HtmlMeta via [Composer](https://getcomposer.org/) as `mauris/htmlmeta`. See [https://packagist.org/packages/mauris/htmlmeta](https://packagist.org/packages/mauris/htmlmeta).

##Writing &lt;meta&gt;

````php
<?php

use HtmlMeta\Writer;

$writer = new Writer();

$writer->add(new Meta(array('charset' => 'utf8')));
$writer->add(new Meta(array('name' => 'description', 'content' => 'some description')));

echo $writer->render();
>
````

Outputs to:
````html
<meta charset="utf8" />
<meta name="description" content="some description" />
````

##Reading &lt;meta&gt;

````php
<?php

use HtmlMeta\Reader;

$reader = new Reader();
$data = $reader->parse(file_get_contents('http://www.nytimes.com/2013/07/09/world/middleeast/egypt.html'));
print_r($data);

````

Outputs to:
````html
Array
(
    [0] => HtmlMeta\Meta Object
        (
            [attributes:protected] => Array
                (
                    [http-equiv] => Content-Type
                    [content] => text/html; charset=utf-8
                )

        )

    [1] => HtmlMeta\Meta Object
        (
            [attributes:protected] => Array
                (
                    [itemprop] => inLanguage
                    [content] => en-US
                )

        )

    [2] => HtmlMeta\Meta Object
        (
            [attributes:protected] => Array
                (
                    [itemprop] => description
                    [name] => description
                    [content] => In a sharp escalation of tensions Monday, Egyptian soldiers opened fire on hundreds of supporters of Mohamed Morsi, the ousted president, witnesses said. The military said armed assailants fired first.
                )

        )
...
)
````