<?php

namespace Solid\Html\Tag;

use Solid\Html\Attributes;

class ImgTest extends \PHPUnit\Framework\TestCase
{

    public function testCreateTagImgWithSrc()
    {
        $img = new Img('img/photo.png');

        $this->assertEquals('<img src="img/photo.png" />', $img);
    }

    public function testCreateTagImgWithSrcAndAttributes()
    {
        $attributes = new Attributes([
            'class' => 'image-responsive',
        ]);

        $img = new Img('img/photo.png');
        $img->attributes($attributes);

        $this->assertEquals('<img src="img/photo.png" class="image-responsive" />', $img);
    }
}
