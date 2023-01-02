<?php

namespace App\Patterns\behavioral\ChainOfResponsibility;

abstract class PreparedPost
{
    private $nextStep;

    abstract function write(BlogPost $post): void;
}