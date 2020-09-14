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
