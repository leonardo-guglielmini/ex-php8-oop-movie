<?php
class Genre
{
    public $name;
    public $description;

    public function __construct($_name, $_description)
    {
        $this->name = $_name;
        $this->description = $_description;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getDescription()
    {
        return $this->description;
    }
}
