<?php



class student{
    public $name;
    public  $age;
    public $role;

   public function result($name,$age,$role){

       $this->name=$name;
       $this->age=$age;
       $this->role=$role;

       return "Name:".$this->name."  age:".$this->age." role:".$this->role;

   }
}

$response= new student();
    echo $response->result("Masud","50","500");