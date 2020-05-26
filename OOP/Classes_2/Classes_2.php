<?php

class Post
{

    protected $name;

    protected $body;

    protected $description = [];
    

    public function __construct($name, $body, $description = [])
    {
        $this->name = $name;

        $this->body = $body;

        $this->description = $description;
        
    }


    public static function create(...$file)
    {
        return new static(...$file);
    }

    public function name()
    {
        return $this->name;
    }

    public function body()
    {
        return $this->body;
    }

    public function description()
    {
        return $this->description;
    }
}



$post = Post::create('post1','This is post 1 Body', 
    'This is post 1 description'
    );

var_dump($post);




