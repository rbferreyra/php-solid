<?php

namespace Solid\Html\Tag;

abstract class Tag implements TagContract
{
    protected $attrs;

    public function __construct()
    {
        $this->attrs = func_get_args();
        $this->validate();
    }
}
