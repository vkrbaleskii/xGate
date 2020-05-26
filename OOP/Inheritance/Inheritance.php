<?php

class CoffeMaker 

{
    public function brew()
    {
        var_dump('Brewing the coffe');
    }
}

class SpecialtyCoffeMaker extends CoffeMaker

{
    public function brewLatte()

    {
        var_dump("Brewing a lattte");
    }
}

(new SpecialtyCoffeMaker())->brew();

//----------------------------------------------------------------------------------------------

class Collection 

{

    protected $items = array();

    public function __construct(array $items)
    
    {
        $this->items = $items;
    }

    public function sum($key)

    {
        return array_sum(array_column($this->items, $key));
    }

}
// is 'a'?
class VideosCollection extends Collection

{
    public function length()

    {
        return $this->sum('length');
    }
}

class Video 

{
    public $title;
    public $length;

    

    public function __construct($title, $length)

    {
        $this->title = $title;
        $this->length = $length;
    }
}

$videos = new VideosCollection([
    new Video('Some Video', 123),
    new Video('Second Video', 12),
    new Video('Third Video', 1)
]);

echo $videos->length();


//----------------------------------------------------------------------------------------------

class Cat
{   
    public $name;

    public function catName($name)
    {
        $this->name = $name;
    }
    
    public function message()
    {
        echo "Prrr Prrrrr Pr .. I am {$this->name}";
    }

}

class EgiptianCat extends Cat
{
    public function speak()
    {
        echo "Cats dont speak.. Mjauu";
    }
}

$cat = new EgiptianCat();
$cat->catName('Aleks');
$cat->speak();

//----------------------------------------------------------------------------------------------

class User
{
    public $name;

    public function userName($name)
    {
        $this->name = $name;
    }

    public function messageName()
    {
        echo "You are {$this->name} ";
    }

}

class Subscriber extends User
{
    public function messageSubscriber()
    {
        echo "Hello {$this->name}. You are a subscriber for one year!. ";
    }
}


$subscriberUser1 = new Subscriber();
$subscriberUser1->userName("Aleks");
$subscriberUser1->messageSubscriber();

//----------------------------------------------------------------------------------------------


class Userr
{
protected $username;

public function setUserName($username)
{
    $this->username = $username;
}

public function getUserName()
{
    return $this->username;
}
}

class Admin extends Userr
{
   public function expressYourRole()
   {
       return "Admin";
   }
   public function sayHello()
   {
       return "Hello admin, {$this->getUserName()}. ";
   }
}

$admin1 = new Admin();
$admin1->setUserName("Balthazar");
echo $admin1->sayHello();