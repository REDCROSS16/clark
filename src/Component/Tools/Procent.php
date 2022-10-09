<?php

namespace App\Component\Tools;

class Procent
{
    public readonly ?float $value;
    public readonly string $formatted;

    public function __construct(?float $value)
    {
        $this->value = $value;

        if ($value === null) {
            $this->formatted = '';
        } else {
            $this->formatted = number_format($value * 100,2) . '%';
        }
    }

    public static function from(?float $value): self
    {
        return new self($value);
    }
}