<?php

namespace Solid\Html\Tag;

interface TagContract
{
    public function validate();

    public function __toString();
}
