<?php
// access modifiers, public, private, protected
// Attributes that belong to the class -> properties
// Functions that belong to the class -> methods
// Function that runs when an object is created
class User {

  public $name;
  public $email;
  public $password;

  public function __construct($name, $email, $password){
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  function set_name($name){
    $this->name = $name;
  }

  function get_name(){
    return  $this->name;
  }


}

$user1 = new User("Temidayo", "temideewan@gmail.com", "temi21496");
$user2 = new User("Jamiu", "jamidee@gmail.com", "jami21496");


// var_dump($user2);

// echo $user1->email;
// echo $user2->name;

// Inheritance

class Employee extends User {
  public function __construct($name, $email, $password,$title)
  {
    parent::__construct($name,$email,$password);
    $this->title = $title;
  }
  public $title;

  public function get_title(){
    return $this->title;
  }
}

$employee1 = new Employee("Sarah", "sara@gmail.com", "1234", "Manager");
echo $employee1->get_title();
