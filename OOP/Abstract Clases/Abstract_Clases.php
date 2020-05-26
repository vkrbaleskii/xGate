<?php

abstract class AchievementType
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();

        //FristThousandPoints => First Thousand Points
        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }

    public function icon()
    {
       return strtolower(str_replace(' ', '-', $this->name())).'.png';
    }

    abstract public function qualifier($user);

}

class FirstThousandPoints extends AchievementType
{
    public function qualifier($user)
    {
        
    }
}


class ReachTop50 extends AchievementType
{
    public function qualifier($user)
    {
        
    }
}

$achevement = new ReachTop50();


echo $achevement->qualifier('user');


//---------------------------------------------------------

abstract class Car
{
    protected $tankVolume;

    public function setTanksVolume($volume)
    {
        return $this->tankVolume = $volume;
    }

    abstract public function calcNumMilesOnFullTank();
}

class Honda extends Car
{
    public function calcNumMilesOnFullTank()
    {
        $miles = $this->tankVolume*30;
        return $miles;
    }
}

class Toyota extends Car
{
    public function calcNumMilesOnFullTank()
    {
        $miles = $this->tankVolume*40;
        return $miles;
    }

    public function getColor()
    {
        return 'White';
    }
}

$toyota1 = new Toyota();
$toyota1->setTanksVolume(10);
echo $toyota1->calcNumMilesOnFullTank();
echo $toyota1->getColor();


//---------------------------------------------------------

abstract class Pet
{
    protected $name;

    public function getName($name)
    {
        return $this->name = $name;
    }

    abstract public function getPet();
}

class Cat extends Pet
{
    public function getPet()
    {
        return "Congrats you have a pet, and the name is {$this->name}. ";
    }

}

$cat1 = new Cat();
$cat1->getName('Yoda');
echo $cat1->getPet();

//---------------------------------------------------------


abstract class User
{
    protected $name;
    
    public function setUserName($name)
    {
        $this->name = $name;
    }
    public function getUserName()
    {
        return $this->name;
    }
    abstract public function stateYourRole();
}

class Admin extends User
{
    public function stateYourRole()
    {
        return "admin";
    }
}

class Viewer extends User
{
    public function stateYourRole()
    {
        return strtolower(__CLASS__);
    }
}

$admin1 = new Admin();
$admin1->setUserName('Balthazar');
echo $admin1->stateYourRole();