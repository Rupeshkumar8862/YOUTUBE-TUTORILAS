QUESTION : Primary key and foreign key
ANS:  Primary keys serve as unique identifiers for each row in a database table. Foreign keys link data in one table to the data in another table. A foreign key column in a table points to a column with unique values in another table (often the primary key column) to create a way of cross-referencing the two tables.

QUESTION : Primary key and Unique key
 ANS: The main difference between a primary key vs unique key is that a primary key is a key that uniquely identifies each record in a table but cannot store NULL values. In contrast, a unique key prevents duplicate values in a column and can store NULL values

 QUESTION PHP IMPLOAD VS EXPLOAD
 PHP Explode function breaks a string into an array. PHP Implode function returns a string from an array. PHP implode and PHP explode are two common functions used in PHP when working with arrays and strings in PHP

QUESTION MERGE ARRY AND COMBINE ARRAY?
 ANS:array_merge() Function: The array_merge() function is used to merge two or more arrays into a single array. This function is used to merge the elements or values of two or more arrays together into a single array
 array_combine() Function: The array_combine() function is used to combine two arrays and create a new array by using one array for keys and another array for values i.e. all elements of one array will be the keys of new array and all elements of the second array will be the values of this new array.



question : PHP - The __construct Function 
ans: If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
Notice that the construct function starts with two underscores (__)!
We see in the example below, that using a constructor saves us from calling the set_name() method which reduces the amount of code
example
<?php
class Fruit {
  public $name;

  public $color;

  function __construct($name) {
    $this->name = $name;
   
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit("apple");
echo $apple->get_name();
?> 
Question: PHP - The __destruct Function
 ans: A destructor is called when the object is destructed or the script is stopped or exited.
If you create a __destruct() function, PHP will automatically call this function at the end of the script.
Notice that the destruct function starts with two underscores (__)!
The example below has a __construct() function that is automatically called when you create an object from a class, and a __destruct() function that is automatically called at the end of the script
<?php
class Fruit1 {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function __destruct() {
    echo "The fruit is {$this->name}.";
  }
}

$apple = new Fruit1("Apple");
?>
 Question :PHP - What is Inheritance?
 ans: Inheritance in OOP = When a class derives from another class.
The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.
An inherited class is defined by using the extends keyword.
<?php
class Fruit3 {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit3 {
  public function message() {
    echo "Am I a fruit or a berry? ";
  }
}
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();
?>
PHP - What are Interfaces?
Interfaces allow you to specify what methods a class should implement.

Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".
Interfaces are declared with the interface keyword:
<?php
interface InterfaceName {
  public function someMethod1();
  public function someMethod2($name, $color);
  public function someMethod3() : string;
}
?>
PHP OOP - Abstract Classes
Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.
An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.
An abstract class or method is defined with the abstract keyword:
<?php 
  abstract class ParentClass {
  abstract public function someMethod1();
  abstract public function someMethod2($name, $color);
  abstract public function someMethod3() : string;
}



// Parent class
abstract class Car {
    public $name;
    public function __construct($name) {
      $this->name = $name;
    }
    abstract public function intro() : string;
  }
  
  // Child classes
  class Audi extends Car {
    public function intro() : string {
      return "Choose German quality! I'm an $this->name!";
    }
  }
  
  class Volvo extends Car {
    public function intro() : string {
      return "Proud to be Swedish! I'm a $this->name!";
    }
  }
  
  class Citroen extends Car {
    public function intro() : string {
      return "French extravagance! I'm a $this->name!";
    }
  }
  
  // Create objects from the child classes
  $audi = new audi("Audi");
  echo $audi->intro();
  echo "<br>";
  
  $volvo = new volvo("Volvo");
  echo $volvo->intro();
  echo "<br>";
  
  $citroen = new citroen("Citroen");
  echo $citroen->intro();
  ?>











