<?php

namespace Solid\Html;

class AttributesTest extends \PHPUnit\Framework\TestCase
{

    public function testCreateAttributeHtmlToTags()
    {
        $data = [
            'class' => 'btn btn-default',
            'data-modal' => '#login',
            'id' => 'login'
        ];

        $attributes = new Attributes($data);

        $this->assertEquals(' class="btn btn-default" data-modal="#login" id="login"', $attributes);
    }
}
