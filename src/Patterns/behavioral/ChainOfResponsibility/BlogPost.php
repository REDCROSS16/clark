<?php

namespace App\Patterns\behavioral\ChainOfResponsibility;

class BlogPost
{
    public string $text;
    public array $flags = [];

    public function __construct($text, $isSubmitted, $isDbReady)
    {
        $this->text = $text;
        $this->flags['isSubmitted'] = $isSubmitted;
        $this->flags['isDbReady'] = $isDbReady;
    }
}