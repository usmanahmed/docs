# PHP - Object-Oriented Programming (OOP)

## Creating Class
```php
class MyClass {
}
```
---
## Method Chaining
```php
class BillMe {
    public $dinner_cost = 20;
    public $dessert_cost = 5;
    public $coldDrink_cost = 3;
    public $bill_amount;

    public function dinner($person) {
        $this->bill_amount += $this->dinner_cost * $person;
        return $this;
    }

    public function dessert($person) {
        $this->bill_amount += $this->dessert_cost * $person;
        return $this;
    }

    public function coldDrink($person) {
        $this->bill_amount += $this->coldDrink_cost * $person;
        return $this;
    }
}

$bill = new BillMe();

echo $bill->dinner(3)->dessert(1)->coldDrink(2)->bill_amount;
```
---
## Construct & Destruct
`__construct()` runs automatically on the instantiation of Class.

`__destruct()` runs on completion of Object.
```php
class BillMe {
    function __construct() {
        $this->bill_amount = 5;
    }

    function __destruct() {
        echo $this->bill_amount;
    }
}
```
---
## Inheritance
```php
class Place {
    public $name;
    public $country;
}

class City extends Place {
    public $is_capital;

    function __construct($city_name) {
        $this->name = $city_name;
    }
}

$washington_dc = new City('Washington DC');
echo $washington_dc->name;
```
---
## Access Modifiers (Getters & Setters)
Methods that are used to call private or protected properties are called Getters.

Methods that are used to set the value of private or protected properties are called Setters.
```php
class User {
  public $username = 'johndoe';
  private $password = 'ksoa89F7D3';
  protected $key = 'SFJLSAFL23234';

  public function getPass() {
    return $this->password . '<br>' . $this->key . '<br>';
  }

  public function setPass($input, $input_2) {
    $this->password = $input;
    $this->key = $input_2;
  }
}

$the_user = new User();

echo $the_user->getPass();
echo $the_user->setPass('mynewpassword', 'mynewkey');
echo $the_user->getPass();
```
---
## Interface
Interface forces class to have some specific methods and method arguments.

```php
interface shapeInterface {
  public function getShape();
}

interface colorInterface {
  public function getColor($fill, $border);
}

class SomeElement implements shapeInterface, colorInterface {

  // An error would be thrown if this method is not exist in the class. Becuase it is declared in the implemented Interface.
  public function getShape() {

  }

  // An error would be thrown even if method exists but number of arguments are not match with the interface.
  public function getColor($fill_color, $border_color) {

  }

}
```
---
## Abstract Class
An abstract class can not be instantiated on its own. They are used for inheritance.

```php
abstract class Place {
  public $name = 'New York';
  public $country = 'United States';

  public function cityName() {
    return $this->name;
  }
  
  // Abstract method forces inherited class to have named method.
  abstract public function countryName();
}

class City extends Place {

  // Inherited class must contain method defined in parent class as abstract
  public function countryName() {
    return $this->country;
  }
}

$city = new City;
echo $city->cityName();
echo $city->countryName();

// Following line would through an error because abstract class can not be instantiated
$place = new Place;
```
---
## Static Methods & Properties
```php
class User {
  static public $name = "John Doe";

  static public function getName() {
    self::$name = "Zaid";
    return self::$name;
  }
}

echo User::$name;
echo User::getName();
echo User::$name;
```
---
---
## Constants
```php
class User {
  const ROLE = "Subcriber";

  public function userRole() {
    return self::ROLE;
  }
}

// Constants can be accessed without instantiation
echo User::ROLE;
```
---
## Encapsulation
---
## Polymorphism
---
## Traits
```php
class FirstTest {

}
```
---
## Dependency Injection
```php
class Logger {
  public function log($message) {
    // This function would save the log in file or DB. Following line is just for demonstration.
    echo "Activity: $message";
  }
}

class ManageUser {
  private $logger;
  
  public function __construct(Logger $logger) {
    $this->logger = $logger;
  }

  public function createUser() {
    $this->logger->log("User Created");
  }

  public function updateUser() {
    $this->logger->log("User Updated");
  }

  public function deleteUser() {
    $this->logger->log("User Deleted");
  }
}

$logger = new Logger();

// We are injecting an object to another object.
$johndoe = new ManageUser($logger);

$johndoe->createUser();
$johndoe->deleteUser();
```
---
## Namespace
---
## Bidings (Early & Late)
---
## Final Method
---
## Final Class