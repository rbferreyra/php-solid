<?php

namespace Solid\Html;

class Attributes
{

    private $attributes;

    public function __construct($attributes)
    {
        $this->attributes = $attributes;
    }

    public function __toString()
    {
        $output = [];
        foreach ($this->attributes as $key => $value) {
            $output[] = $key . '="' . $value . '"';
        }

        return ' ' . implode(' ', $output);
    }
}
