<?php
  $obj = new main();

  class main{
    public function __construct (){
      echo 'Program has begun. <br>';
      $person = personFactory::create();

      $person->jump();
      $person->sit();

      print_r($person);
   }
    public function __destruct (){
      echo ' Program has finished. <br>';
    }
  }

  class personFactory{
    public static function create(){
      $person = new person;
      return $person;
    }
  }

  abstract  class personAction{
    public function jump(){
      echo 'is jumping <br>';
    }

    public function sit(){
      echo 'is sitting down <br>';
    }
  }

  class person extends personAction{
    public $name;
    public $gender;
    public $age;

    public function __construct(){
      $this->name = 'Jason Sevilla';
      $this->gender = 'M';
      $this->age = '25';
    }
  }

?>

