<?php

class Subscription
{
    /** 
     
    * @var Gateway

    */
    protected $gateway;

    public function __construct(Gateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function create()
    {

    }

    public function cancel()
    {

    }

    public function invoice()
    {
        
    } 

    public function swap($newPlan)
    {
        
    }
}

interface Gateway
{
    public function findCustomer();

    public function findSubscriptionByCustomer();
}

class StripeGateway implements Gateway
{
    public function findCustomer()
    {

    }

    public function findSubscriptionByCustomer()
    {

    }
}

//--------------------------------------------------------------------

class Animal
{
    public function greating()
    {
        echo 'Hello';
    }
}

class Speak
{
    public function makeASound()
    {
        echo 'Animals dont speak !';
    }
}

class Cat 
{
    private $animal;

    private $speak;

    public function __construct(Animal $animal, Speak $speak)
    {
        $this->animal = $animal;
        $this->speak = $speak;
    }

    public function mjau()
    {
        $this->animal->greating();
        $this->speak->makeASound();
    }
}

$cat = new Cat(new Animal, new Speak);
$cat->mjau();

//--------------------------------------------------------------------

class Vehicle
{    
    public function move()
    {
        echo "Move the car";
    }    
}

class Tire
{    
    public function addSportWheels()
    {
        echo "Adding sport wheels...";
    }    
}

class Car
{
    private $vehicle;

    private $tire;

    public function __construct(Vehicle $vehicle, Tire $tire)
    {
        $this->vehicle = $vehicle;
        $this->tire = $tire;
    }

    public function accelerate()
    {    
        $this->tire->addSportWheels();
        $this->vehicle->move();   
    }
}


$car = new Car(new Vehicle, new Tire);
$car->accelerate();