# PHP

* Server-side technology
* Provides the underlying code for many content management systems i.e. WordPress
* Provides the underlying code for many ecommerce sites including WooCommerce and Magento
* PHP frameworks include Laravel, Symphony and CakePHP
* PHP often used to create dynamic web pages
* PHP files have the file extension .php
* PHP is not always case-sensitive so Echo can be used to print out rather than echo
* PHP is designed to interact with HTML to create dynamic behaviour by using the following tags:
```
<?php ................... ?>
```
<?php is the start
?>  is the end
```
<h1>I am an H1</h1>
<?php echo "<p>This is interpreted by PHP and converted to HTML</p>";?>
```

* In the above example - PHP has been embedded in to the HTML by placing the <?php     and ?> tags - opening and closing tags, respectively
* echo is used to output text
* When PHP is sent from the back-end to the front-end - it is received as HTML and 
displayed in the browser
* Keywords aren't case sensitive
* Whitespace is generally ignored
* PHP's flexibility enables it to be executed from the terminal

### Writing back-end code with PHP

When writing a PHP script file, the <?php  tag still need to be used, but the closing tag is no longer required.

For example, if the following code were placed in playing.php:
```
<?php
echo "I'm learning PHP!!!";
#=> I'm learning PHP!!!
```

### Comments in PHP

Writing comments with PHP

Single line comments 
#
//
Multi-line comments 
/* */

### Escape characters - like any other language
Use backslash

No need for escape characters:
```
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo "The weather's lovely today"; ?> 
  </body>
</html>
```

Need for escape characters:
```
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo 'The weather\'s lovely today'; ?> 
  </body>
</html>
```

```
<?php

 echo "1. Go for a run";
 echo "\n2. Fill in bullet journal";
```

### String concatenation in PHP

* Use the . operator - concatenation operator

```
<?php
  echo "\nConcatenate " . " strings with " . " the concatenation operator";
```

### Declaring variables

Declared variables must be prefixed with a $ (sigil)

* Variables names must start with a letter or _
* Variables in PHP should use snake case 

```
<?php

  $dog = "Bob";
  $biography = "\n I am a hoe";
  $favorite_food = "\n" . "tur" . "duck" . "en";
```
```
<?php

  $name = "Bob";
  $language = "Spanish";
  
  echo "Hi, I am " . $name .
  echo "\n and I am learning " . $language;
```

### String interpolation with PHP/ parsing

Interpolate variables into strings through the use of curly brackets

```
<?php
  $a = "cats";
  $b = "cute";
  $c = "friendly";

  echo "He likes ${a} because they are ${b} and loved ${c}.";

```

### Variable reassignment

Variables can be reassigned

```
<?php

$language = "Ruby";
$other = $language;

  echo "My favourite language used to be $language.";
  
  $language = "JavaScript";
  
  echo "\nBut now my favorite is $language.";
```

#=> 
I'm a fickle person, my favorite movie used to be Mary Poppins.
But now my favorite is Care Bears.

During assignment, the computer will first evaluate everything to the right of the assignment operator
and return a sinle value.

### Concatenating assignment operator -    .=

```
<?php
  echo "One two three";

  $sentence = "\n four";

  echo $sentence;


  $sentence .= ", five";
  
   echo $sentence;
   
   $sentence .= ", six";

   echo $sentence;
```

### Reference assignment operator

Assign by reference

When a variable is assigned to another variable, the computer finds a new 
space in memory which it associates with the left operand, and it stores a copy of 
the right operand's value there.

This new variable holds a copy of the value held by the original variable, but it's 
an independent entity; changes made to either variable won't affect the other:

The assignment operator =& can be used to assign by reference - that is to say that the variable
on the left of the operator should point or refer to the exact same data as the variable on the
right.

```
<?php
 
  $first= "pizza";

  $second =& $first; 

  $second .= ", mozzarella bites";

  $second .= ", doughnuts";
    
 
  echo "\nYour order is: $first.";
  ```

#=> Your order is: pizza, mozzarella bites, doughnuts.

### Integers

```
<?php

  $integer = 21; 
  echo $integer;
  $integer2 = 41;
  echo "\n $integer2";
  $float = 1.2;
  echo "\n $float";
```

```
<?php

  $last_month = 1187.23;
  $this_month = 1089.98;
  echo $last_month - $this_month;

97.25
```
```
<?php

  echo 8 **2;

  #=> 64
```

### Order of operations

Operations will be evaluated in the following order:

Any operation wrapped in parentheses/brackets (())
Exponents/indices (**)
Multiplication (*) and division (/)
Addition (+) and subtraction (-).
The acronyms BIDMAS, BODMAS or PEMDAS can be helpful for remembering the order of precedence for these arithmetic operations.

### Mathematical assignment operators - are the same as with any other language

+= -= *= /= &=


# Functions

Define a function in PHP with the following syntax:


```
function sayHello()
{
  echo "Hello!;
}
```

* function keyword
* curly braces to define a block
* ; to indicate the end of a statement
* camelCase

```
<?php
function first()
{
  return "Hi\n";
}

function second()
{
  return "Bye!\n";
}

function third()
{
  return "Hi again!\n";
}

echo first() . second() . third();
```

Functions without return statements return NULL - represents the absence of a value

```
<?php
function calculateArea($height, $width) {
  return $height * $width;
}

echo calculateArea(3, 4);

function calculateVolume($height, $width, $depth) {
  return $height * $width * $depth;

}

echo calculateVolume(45, 2, 1);

#=> 1290
```
Unlike with Ruby, we have to prefix arguments with $ e.g. $height

### Default parameters

```
<?php
function speak($name = "person with no name")
{
  echo "Hello, $name!";
};

speak("Emily"); //  Hello, Emily!

speak(); //  Hello, person with no name
```

### Defining global variables

Global variables can be declared in PHP using the **global** keyword.
This tells PHP to look in the global scope for the variable, instead of the local
scope of the function.


### In-built functions 

PHP has many in-built functions such as:

getttype()
abs()
round()
var_dump()
substr_count()
strrev()
strtolower()
str_repeat()
rand()
getrandmax()
pi()
min()
max()
sqrt()


```
<?php

function convertToUpper($sentence) {
  $result = strtoupper($sentence);
  return $result;
}

echo convertToShout(minniemouse);
```

MINNIEMOUSE

```
function tipGenerously($num) {

  $total = $num = $num * 1.2;
  return ceil($total);
}

echo tipGenerously(100);
```

### Creating constants in PHP

- Constants are global and can be used across the whole file
- Use the define() function
define(name, value, case-insensitive)

Parameters:

name: Specifies the name of the constant
value: Specifies the value of the constant
case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false

```
<!DOCTYPE html>
<html>
<body>

<?php
define("FOOD", "Pizza", true);
echo FOOD;

define("food", "Pizza");
echo food;
?>
</body
</html>
```


### Loops in PHP

The following types of loop exist in PHP:

* while - as long as the specified condition is true
* do...while - loops once then repeats for as long as the specified condition is true
* for - when the number of times to loop is known
* foreach - loops once for each element in an array

### While loop

```
<!DOCTYPE html>
<html>
<body>

<?php  
$x = 0;
 
while($x <= 50) {
  echo "$x <br>";
  $x+=5;
}
?>  

</body>
</html>
```
0
5
10
15
20
25
30
35
40
45
50

### Do....whilte

```
<!DOCTYPE html>
<html>
<body>

<?php 
$x = 0;

do {
  echo " $x <br>";
  $x+= 3;
} while ($x <= 20);
?>

</body>
</html>
```
0
3
6
9
12
15
18

### For loop:

```
<!DOCTYPE html>
<html>
<body>

<?php  
for ($x = 0; $x <= 200; $x+=20) {
  echo "$x <br>";
}
?>  

</body>
</html>
```

0
20
40
60
80
100
120
140
160
180
200

### Foreach

```
<!DOCTYPE html>
<html>
<body>

<?php  
$food = array("apples", "chips", "mushrooms", "pizza", "quiche"); 

foreach ($food as $x) {
  echo "$x <br>";
}
?>  

</body>
</html>

```

apples
chips
mushrooms
pizza
quiche

Like Ruby, the **break** keyword can be used to break out of a loop



### Arrays in PHP


### PHP forms

### PHP sessions


### PHP JSON

<hr>
### Object Oriented Programming with PHP

PHP5 onwards enables the developer to write PHP code in an object-oriented style

Classes

```

<!DOCTYPE html>
<html>
<body>

<?php
class Person {

  public $name;
  public $age;

  
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_age($age) {
      $this->age = $age;
  }
  function get_age() {
      return $this->age;
  }
  

}

$man = new Person();
$woman = new Person();
$man->set_name('Bob');
$woman->set_name('Mary');

echo $man->get_name();
echo "<br>";
echo $woman->get_name();
?>
 
</body>
</html>
```
Bob
Mary

* $this - refers to the current object and is only available inside methods
* instanceof() method can be used to check if an object belongs to a specific class


### Constructors in PHP

* Constructors are automatically called upon initialization of an object

* __construct() is called

* Has the same functionality as constructor() in JavaScript and initialize() in Ruby

```
<!DOCTYPE html>
<html>
<body>

<?php
class Person {
  public $name;
  public $age;

  function __construct($name, $age) {
    $this->name = $name; 
    $this->age = $age;
  }
  function get_name() {
    return $this->name;
  }
  function get_age() {
    return $this->age;
  }
}

$man = new Person("Pierre", 40);
echo $man->get_name();
echo "\n";
echo $man->get_age();
?>
 
</body>
</html>
```

=> Pierre
40

### Destructor

A destructor is called when the code has finished being evaluated.
If a __destruct() function is created, PHP will automatically call the function at the end of the script

### Access modifiers

**Public** - the property or method can be accessed from everywhere. This is the default.
**Protected** - the property of method can be accessed within the class and by classes derived from that class
**Private** - the property or method can ONLY be accessed within the class
