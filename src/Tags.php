<?php

namespace Solid\Html;

class Tags
{
    public function img($data)
    {
        return '<img src="' . $data . '" />';
    }

    public function a($href, $anchor)
    {
        return '<a href="' . $href . '">' . $anchor . '</a>';
    }
}
