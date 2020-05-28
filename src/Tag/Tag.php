<?php

namespace Solid\Html\Tag;

use Exception;
use Solid\Html\Attributes;

abstract class Tag implements TagContract
{
    protected $attrs;
    protected $attrsOptional;

    public function __construct()
    {
        $this->attrs = func_get_args();

        foreach ($this->attrs as &$value) {
            $value = (string) $value;
        }

        $this->validate();
    }

    public function attributes($attributes)
    {
        if (is_array($attributes)) {
            $attributes = new Attributes($attributes);
        }

        if (!is_a($attributes, 'Solid\Html\Attributes')) {
            throw new Exception('$attributes must be a instance of Solid\Html\Attributes');
        }

        $this->attrsOptional = $attributes;
    }
}
