<?php

namespace Solid\Html;

class TagsHtml extends \PHPUnit\Framework\TestCase
{

    public function testCreateTagImgWithSrc()
    {
        $html = new Tags();
        $img = $html->img('img/photo.png');

        $this->assertEquals('<img src="img/photo.png" />', $img);
    }

    public function testeCreateTagAWithAnchor()
    {
        $html = new Tags();

        $img = $html->img('img/photo.png');

        $a = $html->a('https://foobar.com', $img);

        $this->assertEquals('<a href="https://foobar.com"><img src="img/photo.png" /></a>', $a);
    }
}
