<?php

class Team 
{
    protected $name;

    protected $members = [];

    public function __construct($name, $members = [])
    {

        $this->name = $name;
        $this->members = $members;

    }

    public static function start(...$params)
    {
        return new static(...$params);
    }

    public function name()
    {
        return $this->name;
    }

    public function members()
    {
        return $this->members;
    }

    public function add($name)
    {
        $this->members[] = $name;
    }

    public function cancel()
    {
        
    }

    public function manager()
    {
        
    }
}

class Member
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function lastViewd()
    {

    }
}

$team1 = Team::start('team1',[

    new Member('Aleks'),
    new Member('Paul')

]);

$team1->add('Jane');

var_dump($team1->members());


//---------------------------------------------------------------


class Pet 
{
    protected $kind;

    protected $members = [];

    public function __construct($kind, $members = [])
    {

        $this->kind = $kind;
        $this->members = $members;

    }

    public static function start(...$params)
    {
        return new static(...$params);
    }

    public function kind()
    {
        return $this->kind;
    }

    public function members()
    {
        return $this->members;
    }

    public function add($kind)
    {
        $this->members[] = $kind;
    }

}

class Cat
{
    protected $catKind;

    public function __construct($catKind)
    {
        $this->catKind = $catKind;
    }
}

class Dog
{
    protected $dogKind;

    public function __construct($dogKind)
    {
        $this->dogKind = $dogKind;
    }
}

$pet = Pet::start('pet',[

    new Cat('Bengal Cat'),
    new Cat('Egiptian Cat')
]);


$pet1 = Pet::start('pet',[

    new Dog('Chi Chi'),
    new Dog('Fox Terier')
]);

var_dump($pet->members());
var_dump($pet1->members());





//---------------------------------------------------------------




