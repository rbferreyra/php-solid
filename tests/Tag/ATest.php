<?php

namespace Solid\Html\Tag;

class ATest extends \PHPUnit\Framework\TestCase
{

    public function testCreateTagAWithAnchor()
    {
        $a = new A('https://foobar.com', 'Clique Aqui!');

        $this->assertEquals('<a href="https://foobar.com">Clique Aqui!</a>', $a);
    }
}
