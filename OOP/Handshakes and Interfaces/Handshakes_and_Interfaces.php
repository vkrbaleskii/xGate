<?php

// interface Newsletter
// {
//     public function subscribe($email);
// }

// class CampaignMonitor implements Newsletter
// {
//     public function subscribe($email)
//     {
//         die('Subscribing with Campaign Monitor!');
//     }
// }

// class Drip implements Newsletter
// {
//     public function subscribe($email)
//     {
//         die('Subscribing with Drip!');
//     }
// }

// class NewsletterSubscriptionController
// {
//     public function store(Newsletter $newsletter)
//     {
//         $email = 'joe@example.com';
//         $newsletter->subscribe($email);
//     }
// }

// $controller = new NewsletterSubscriptionController();
// $controller->store(new Drip());


//--------------------------------------------------------------------


// interface Car
// {
//     public function setModel($name);

//     public function getModel();

// }

// interface Vehicle
// {
//     public function setHasWheels($bool);
//     public function getHasWheels();
// }

// class miniCar implements Car, Vehicle
// {
//     private $model;
//     private $hasWheels;

//     public function setModel($name)
//     {
//         $this->model = $name;
//     }

//     public function getModel()
//     {
//         return $this->model;
//     }

//     public function setHasWheels($bool)
//     {
//         $this->hasWheels = $bool;
//     }

//     public function getHasWheels()
//     {
//         return  ($this->hasWheels)? "has wheels" : "has no wheels";
//     }
// }

//--------------------------------------------------------------------

interface Author
{   
    public function setAuthorPrivileges($array);

    public function getAuthorPrivileges();
}

interface Editor
{   
    public function setEditorPrivileges($array);

    public function getEditorPrivileges();
}

class User
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

class AuthorEditor extends User implements Author,Editor  
{
  private $authorPrivilegesArray = array();
   
  private $editorPrivilegesArray = array();
       
  public function setAuthorPrivileges($array)
  {
    $this->authorPrivilegesArray = $array;
  }
       
  public function getAuthorPrivileges()
  {
    return $this->authorPrivilegesArray;
  }
       
  public function setEditorPrivileges($array)
  {
    $this->editorPrivilegesArray = $array;
  }
       
  public function getEditorPrivileges()
  {
    return $this->editorPrivilegesArray;
  }
}

$user1 = new AuthorEditor();
$user1->setUsername("Balthazar");
$user1->setAuthorPrivileges(array("write text", "add title"));
$user1->setEditorPrivileges(array("edit text", "edit title"));


$userName = $user1->getUsername();
$userPrivileges = array_merge($user1->getAuthorPrivileges(), $user1->getEditorPrivileges());
echo $userName . " has the following privileges: ";
echo implode(", ", $userPrivileges);
echo ".";

//--------------------------------------------------------------------

interface Male
{
  public function setMaleRole($array);

  public function getMaleRole();
}

interface Female
{
  public function setFemaleRole($array);

  public function getFemaleRole();
}

class Person
{
  public $name;

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }
}

class Union extends Person implements Male, Female
{
  private $maleRole = array();
  private $femaleRole = array();
}


