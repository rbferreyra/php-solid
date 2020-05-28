<?php

namespace Solid\Html\Tag;

use Solid\Html\Attributes;

class ATest extends \PHPUnit\Framework\TestCase
{

    public function testCreateTagAWithAnchor()
    {
        $a = new A('https://foobar.com', 'Clique Aqui!');

        $this->assertEquals('<a href="https://foobar.com">Clique Aqui!</a>', $a);
    }

    public function testCreateTagAWithAnchorAndAttributes()
    {
        $attributes = new Attributes([
            'class' => 'btn btn-default',
            'data-modal' => '#login',
            'id' => 'login'
        ]);

        $a = new A('javascript:void();', 'Login');
        $a->attributes($attributes);

        $this->assertEquals('<a href="javascript:void();" class="btn btn-default" data-modal="#login" id="login">Login</a>', $a);
    }
}
