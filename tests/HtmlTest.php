<?php

namespace Solid\Html;

class HtmlTest extends \PHPUnit\Framework\TestCase
{
    public function testCreateTagImgWithSrc()
    {
        $html = new Html();
        $img = $html->img('img/photo.png');

        $this->assertEquals('<img src="img/photo.png" />', $img);
    }

    public function testCreateTagImgWithAnchor()
    {
        $html = new Html();
        $img = $html->img('img/photo.png');
        $anchor = $html->anchor('https://foobar.com', $img);

        $this->assertEquals('<a href="https://foobar.com"><img src="img/photo.png" /></a>', $anchor);
    }
}
