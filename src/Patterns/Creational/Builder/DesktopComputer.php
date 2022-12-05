<?php

namespace App\Patterns\Creational\Builder;

class DesktopComputer
{
    private $components = [];

    public function __construct()
    {
        array_push($this->components, 'some details');
    }

    public function getDescription(): string
    {
        $description = '';
        if (isset($this->components[1])) {
            foreach ($this->components as $component) {
                $description .= $component . ' ';
            }
            return $description;
        }

        return $this->components[0];
    }

    public function addComponent(string $component): void
    {
        array_push($this->components, $component);
    }
}