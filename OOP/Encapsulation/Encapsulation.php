<?php

class Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    private function thingsThatKeepUpAtNight()
    {
        return 'We are all going to die and that is terrifying';
    }
}


//---------------------------------------------------------------------

class Car
{
    private $model;

    public function setModel($model)
    {
        $this->model = $model;
    }
    public function getModel()
    {
        return "This car model is " . $this->model;
    }
}

$toyota = new Car();
$toyota->setModel('Toyota');
echo $toyota->getModel();

//---------------------------------------------------------------------