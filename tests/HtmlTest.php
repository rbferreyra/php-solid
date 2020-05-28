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
        $anchor = $html->a('https://foobar.com', $img);

        $this->assertEquals('<a href="https://foobar.com"><img src="img/photo.png" /></a>', $anchor);
    }

    public function testCreateTagAWithAttributes()
    {
        $html = new Html();

        $attributes = [
            'class' => 'btn btn-default'
        ];

        $a = $html->a('https://foobar.com', 'Clique Aqui!');
        $a->attributes($attributes);

        $this->assertEquals('<a href="https://foobar.com" class="btn btn-default">Clique Aqui!</a>', $a);
    }

    public function testCreateTagAWithAttributesWithStaticMethod()
    {
        $attributes = [
            'class' => 'btn btn-default'
        ];

        $a = Html::a('https://foobar.com', 'Clique Aqui!');
        $a->attributes($attributes);

        $this->assertEquals('<a href="https://foobar.com" class="btn btn-default">Clique Aqui!</a>', $a);
    }
}
