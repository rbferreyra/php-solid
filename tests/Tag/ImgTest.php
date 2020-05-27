<?php

namespace Solid\Html\Tag;

class ImgTest extends \PHPUnit\Framework\TestCase
{

    public function testCreateTagImgWithSrc()
    {
        $img = new Img('img/photo.png');

        $this->assertEquals('<img src="img/photo.png" />', $img);
    }
}
