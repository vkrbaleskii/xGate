<?php

// class Age 
// {
//     public $age;

//     public function __construct($age)
//     {
//         if($age < 0 || $age > 100){
//         throw new InvalidArgumentException('That makes no sense');
//         }
        
//         $this->age = $age;
//     }

//     public function increment()
//     {
//         $this->age += 1;
//     }

//     public function getAge()
//     {
//         return $this->age;
//     }

//         // function register(string $name, Age $age)
//         // {

//         // }
// }

// $age = new Age(35);
// $age->increment();
// var_dump($age->getAge());

// register('Jon Doe', new Age(-50));

//--------------------------------------------------------------------------

class Age 
{
    public $age;

    public function __construct($age)
    {
        if($age < 0 || $age > 100){
        throw new InvalidArgumentException('That makes no sense');
        }
        
        $this->age = $age;
    }

    public function increment()
    {
        return new self ($this->age += 1);
    }

    public function getAge()
    {
        return $this->age;
    }

}

$age = new Age(35);
$age = $age->increment();
var_dump($age->getAge());
