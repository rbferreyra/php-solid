<?php

namespace Solid\Html\Tag;

use Exception;

class Img extends Tag
{

    public function validate()
    {
        if (!isset($this->attrs[0])) {
            throw new Exception('Attribute src not found');
        }

        if (!is_string($this->attrs[0])) {
            throw new Exception('Attribute src must be string');
        }
    }

    public function __toString()
    {
        return '<img src="' . $this->attrs[0] . '" />';
    }
}
