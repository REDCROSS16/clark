<?php

namespace App\Patterns\Creational\Prototype;

class Prototype
{
    private $objectName;
    private $objectID;

    /**
     * @return mixed
     */
    public function getObjectName()
    {
        return $this->objectName;
    }

    public function getObjectID()
    {
        return $this->objectID;
    }

    public function __construct($objectName, $objectID)
    {
        $this->objectID = $objectID;
        $this->objectName = $objectName;
    }

    public function __clone(): void
    {
        $this->objectName .= ' CLONED';
        $this->objectID++;
    }

    public function __toString(): string
    {
        return "ID is $this->objectID and name $this->objectName";
    }
}