#oops in php
object-oriented programming is about creating objects that contain both data and functions.
#class,objects
<summary>Let's assume we have a class named Fruit. A Fruit can have properties like name, color, weight, etc. We can define variables like $name, $color, and $weight to hold the values of these properties.
A class is defined by using the class keyword, followed by the name of the class and a pair of curly braces ({})</summary>
#syntax for class
class Fruit {
  // code goes here...
}
#setting and getting method
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

#objects
Classes are nothing without objects! We can create multiple objects from a class. Each object has all the properties and methods defined in the class, but they will have different property values.

Objects of a class are created using the new keyword.


$apple = new Fruit();
$banana = new Fruit();

<picture>
<img src="./img/Screenshot (264).png">
<img src="./img/Screenshot (265).png">
<img src="./img/Screenshot (266).png">
<img src="./img/Screenshot (267).png">
</picture>
