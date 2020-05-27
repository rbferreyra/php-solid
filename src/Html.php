<?php

namespace Solid\Html;

class Html
{
    
    public function img($data)
    {
        return '<img src="' . $data . '" />';
    }

    public function anchor($url, $data)
    {
        return '<a href="' . $url . '">' . $data . '</a>';
    }
}
