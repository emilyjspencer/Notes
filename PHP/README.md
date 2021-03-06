# PHP

* Server-side technology
* Provides the underlying code for many content management systems i.e. WordPress
* Provides the underlying code for many ecommerce sites including WooCommerce and Magento
* PHP frameworks include Laravel, Symphony and CakePHP
* PHP often used to create dynamic web pages
* PHP files have the file extension .php
* echo is akin to Ruby's 'puts' or 'prints' in that it prints output to the screen
* PHP is not always case-sensitive so Echo can be used to print out rather than echo
* PHP is designed to interact with HTML to create dynamic behaviour by using the following tags:
```
<?php ................... ?>
```
<?php is the opening tag
?>  is the closing tag
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
only the opening tag is required.

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

  echo "He likes ${a} because they are ${b} and very ${c}.";

```

### Variable reassignment

Variables can be reassigned

```
<?php

$language = "Ruby";
$other = $language;

  echo "My favourite language used to be $language.";
  
  $language = "JavaScript";
  
  echo "\nBut now my favourite language is $language.";
```

#=> 
I'm a fickle person, my favorite movie used to be Mary Poppins.
But now my favorite is Care Bears.

During assignment, the computer will first evaluate everything to the right of the assignment operator
and return a single value.

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

Functions without return statements return NULL - representing the absence of a value

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

getttype() - determine the type 
abs()
round()
ceil() - rounds a number up to the nearest integer (even if the float is closer to the number below)
var_dump()
substr_count()
strrev() - reverse a string
strtolower() - convert to lower case characters
str_repeat() - repeat a string a specified number of times
rand() - generate a random number
getrandmax()
pi()
min() - find the minimum number
max() - find the maximum number
sqrt() - find the square root


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

### Do....while

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

* Define classes with the class keyword
* Use access modifiers - public, private, protected to define to what degree variables
can be accessed
public - publicly accessible - other objects can call
private - only accessible within the class
protected - accessible within the class and its child classes
* Close a class with } not end

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

* **Public** - the property or method can be accessed from everywhere. This is the default.
* **Protected** - the property of method can be accessed within the class and by classes derived from that class
* **Private** - the property or method can ONLY be accessed within the class

<hr>

### Inheritance in PHP

A child class inherits all of the public and protected methods from its parent class.

Define an inherited class using the extends keyword
<hr>

### Form handling in PHP

* The superglobals $_GET and $_POST are used to collect form data
* Forms use the usual attributes such as **action** - to specify where the form data should
be submitted to, and **method** to specify whether the data is being submitted
using a GET/POST request etc

example:

```
<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
</head>
<body>
 
  <form action="index.php" method="post>
  Username: <input type="text" name="username">
  Password: <input type="text" name="password">
  <button type="submit"></button>
  </form>

</body>
</html>

```
Here an HTTP POST method is used to sent the form data which is sent to
index.php

```
<html>
<body>

<form action="index.php" method="post">
Username: <input type="text" name="username">
Password: <input type="text" name="password">
<input type="submit">Submit</input>
</form>

Welcome <?php echo $_POST["username"]; ?><br>
Your password is: <?php echo $_POST["password"]; ?>

</body>
</html>
```
The form data is sent and displayed on the same page, in this example

![phpform](formphp.png)

A GET request could also be used to send the data, but this isn't advisable as the data entered by the user
is passed in the url as query params, and thus their data isn't protected.

Example of using the GET superglobal and get http method:

```
<!DOCTYPE html>
<html>
<head>
  <title>Form with GET</title>
</head>
<body>

<form action="index.php" method="get>
Username: <input type="text" name="username">
Password: <input type="text" name="password">
<input type="submit">
</form>

Welcome <?php echo $_GET["username"]; ?><br>
Your password is: <php echo $_GET["password"]; ?>

</body>
</html>
```

![formphpget](formphpget.png)

More complex form:

```
<!DOCTYPE html>
<html>
<head>
  <title>Form Validation</title>
</head>
<body>

<form action="index.php" method="post">
Name: <input type="text" name"name">
Username: <input type="text" name="username">
E-mail: <input type="text" name="email">
GitHub: <input type="text" name="github">
Comment: <textarea name="comment" rows="5" cols="40"></textarea>
Gender:
<input type="radio" name="gender" value="female">Female 
<input type="radio" name="gender" value="male">Male 
<input type="radio" name="gender" value="other">other
</form>

Welcome <?php echo $_POST["name"]; ?><br>
Your username is: <?php echo $_POST["username"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
Your GitHub profile is: <?php echo $_POST["github"]; ?><br>
You added: <?php echo $_POSt["comment"]; ?><br>

</body>
</html>
```

![complexform](complexform.png)

### Form Validation in PHP

Form validation ensures that a form can only be submitted if the required fields have been filled in, if the data that has
been entered is valid - e.g. the user has entered a valid email address, they've used a mix of letters, numbers and 
special characters etc

Two things can be used in the form action:

1 - htmlspecialcharacters() function - which converts special characters i.e. * % $ into HTML entities
* This prevents malicious attackers from carrying out XSS or Cross-site scripting attacks on forms, by injecting CSS or JavaScript

2 - $_SERVER["PHP_SELF"]  - a super global variable that returns the filename of the file whose code is currently being executed.
* Data is sent to the same page so error messages appear on the same message as the form i.e. "Please enter a valid email", "Please enesure that your password is at least eight characters long"

However $_SERVER["PHP_SELF"] is vulnerable to attackers, who can use XSS (Cross-site scripting) attacks on forms to inject client-side scripts e.g. JavaScript, CSs into web pages.
By adding a / they can executed XSS commands, for example they can add script tags, into which they can placed JS code. This could be used to redirect users to another server where they might be faced with malicious code.

It's the htmlspecialcharacters() function that, when used in conjuction with the super global variable $_SERVER["PHP_SELF"] can prevent the super global variable from being manipulated.

```
form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> method="post"
```

Before form submission, whitesapace etc should be removed from the user input data using PHP's trim()
function
* Backslashes should be removed from the user input data by using PHP's stripslashes() function

* All of this 'data cleaning/user-input cleaning' can be put in a function to DRY up code:

```
<!DOCTYPE html>
<html>
<head>
  <title>Submitting Forms</title>
</head>
<body>

<?php

$name = $username = $email = $github = $gender = $comment = '';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = clean_data($_POST["name"]);
    $username = clean_data($_POST["username"]);
    $email = clean_data($_POST["email"]);
    $github = clean_data($_POST["github"]);
    $comment = clean_data($_POST["comment"]);
    $gender = clean_data($_POST["gender"]);

}

function clean_data($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  Username: <input type="text" name="username">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  GitHub <input type="text" name="github">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="70"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h3>You entered</h3>";
echo $name;
echo "<br>";
echo $username;
echo "<br";
echo $email;
echo "<br>";
echo $github;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>

```

This outputs:

![cleanuserinput](cleandatabeforesubmitting.png)

### Making fields required in forms

```
<!DOCTYPE HTML>  
<html>
<head>
  <title>Adding required fields to forms</title>
<style>
.required {color: red;}
</style>
</head>
<body>  

<?php

$name = $username = $email = $gender = $comment = $github = "";

$nameRequired =  $usernameRequired = $emailRequired = $genderRequired = $githubRequired = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameRequired = "Name is required";
  } else {
    $name = clean_input($_POST["name"]);
  }

  if (empty($_POST["username"])) {
      $usernameRequired = "Username is required";
  } else {
      $username = clean_input($_POST["username"]);
  }
  
  if (empty($_POST["email"])) {
    $emailRequired = "Email is required";
  } else {
    $email = clean_input($_POST["email"]);
  }
    
  if (empty($_POST["github"])) {
    $github = "";
  } else {
    $github= clean_input($_POST["github"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = clean_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderRequired = "Gender is required";
  } else {
    $gender = clean_input($_POST["gender"]);
  }
}

function clean_data($input) {
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  return $input;
}
?>


<p><span class="required">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="required">* <?php echo $nameRequired;?></span>
  <br><br>
  Username: <input type="text" name="username">
  <span class="required">* <?php echo $usernameRequired;?></span>
  E-mail: <input type="text" name="email">
  <span class="required">* <?php echo $emailErr;?></span>
  <br><br>
  Github <input type="text" name="github">
  <span class="required">* <?php echo $githubRequired;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="50"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="required">* <?php echo $genderRequired;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>You entered:</h2>";
echo $name;
echo "<br>";
echo $username;
echo "<br>";
echo $email;
echo "<br>";
echo $github;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>
```

Outputs:

![requiredfields](required_fields.png)


### Validating input fields

To ensure that a input entered by the user into a particular field is valid,
the PHP function preg_match() and a regular expression can be used:

```
$username = clean_input($POST["username"]);
if (!preg_match("/^[a-zA-Z-' ]*$/", $username)) {
  $usernameRequired = "White space and letters only permitted";
}

```

### Validating email

To check whether the user has entered a valid email address, the PHP filter_var() method can be used:

```
$email = clean_input()$_POST["email"]);
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailRequired = "Email not valid";
}

```

### Validating urls

```
$github = clean_input($_POST["github"]);
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$github)) {
  $githubRequired = "Invalid URL";
}
```

```
<!DOCTYPE HTML>  
<html>
<head>
  <title>Validating emails urls and input</title>
<style>
.required {color: red;}
</style>
</head>
<body>  

<?php

$name = $username = $email = $github = $comment = $gender = "";
$nameRequired = $emailRequired = $genderRequired = $githubRequired = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameRequired = "Name is required";
  } else {
    $name =  clean_input($_POST["name"]);
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameRequired = "Only letters and white space are permitted";
    } else {
        $username = clean_input($_POST["username"]);
    }
  }

  if (empty($_POST["email"])) {
    $emailRequired = "Email is required";
  } else {
    $email = clean_input($_POST["email"]);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailRequired = "Email is not valid";
    }
  }
    
  if (empty($_POST["github"])) {
    $github = "";
  } else {
    $github = clean_input($_POST["website"]);
    
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }    
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = clean_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderRequired = "Gender is required";
  } else {
    $gender = clean_input($_POST["gender"]);
  }
}

function clean_input($input) {
  $input= trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  return $input;
}
?>


<p><span class="required">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="required">* <?php echo $nameRequired;?></span>
  <br><br>
  Username: <input type="text" name="username">
  <span class="required">* <?php echo $usernameRequired;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="required">* <?php echo $emailRequired;?></span>
  <br><br>
  GitHub: <input type="text" name="github">
  <span class="required"><?php echo $githubRequired;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="50"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="required">* <?php echo $genderRequired;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>You entered:</h2>";
echo $name;
echo "<br>";
echo $username;
echo "<br>";
echo $email;
echo "<br>";
echo $github;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>
```
Outputs:

![]()




### The PHP processor

The PHP processor reads files, evaluates any PHP, translates it into HTML, and passes it to the web server so 
it can be sent to the client


<hr>
* void - means that it doesn't return any value


* Mathematical functions

* octdec() converts an octal string to a decimal
* deg2rad() - converts degrees to radians
* cos() - gets the cosine of a specified value
* round() - to round . Second argument is the number of decimal points to round to
* log() - take the natural log
* abs() - take the absolute value
* acos() - take the inverse/arc cosine
* rad2deg() - converts radians to degrees
* floor() - rounds down to the nearest whole number


### Arrays in PHP

* Zero-based indexed
* count() function can be used to find the length of the array
* array() function can be used to create an array
* echo() can't be used to print out the contents of an array - need to use
print_r()
```
<?php
$numbers = [7, 201, 33, 88, 91];

print_r($numbers);

Array ( [0] => 7 [1] => 201 [2] => 33 [3] => 88 [4] => 91 )

```

* implode() method is used to convert an array into a string
* The first argument of the implode method acts as the separator between each element that was in the 
previous array
```

<?php


$statement = ["This is a string, " PHP", " is different\n"];

$numbers = [7, 201, 33, 88, 91];

echo implode("!", $statement);
#=> This is a string! PHP! is different
```


### Accessing elements in array

```
<?php


$round_one = ["X", "X", "first winner"];

$round_two = ["second winner", "X", "X", "X"];

$round_three = ["X", "X", "X", "X", "third winner"];

$winners = ["first winner", "second winner", "third winner"];
echo $winners[0];
echo "\n";
echo $winners[1];
echo "\n";
echo $winners[2];
echo "\n";





$round_one = ["X", "X", "first winner"];

$round_two = ["second winner", "X", "X", "X"];

$round_three = ["X", "X", "X", "X", "third winner"];



$winners = [$round_one[2], $round_two[0], $round_three[4]];

print_r($winners);
```

### Adding items to an array 

* Add items to the end of an array through the use of 
[] and the assignment operator

```
<?php

$an_array = ["a", "b"];

$an_array[] = "c";

echo implode(", ", $an_array); 
#=> a b c

```

PHP also provides array_pop()  and array_push() methods to remove items from the end 
of the array and add items to the end of the array

```
<?php

$sentence = ["it", "was", "a"];

array_push($sentence, 'sunny', 'day');
print_r($sentence);
array_pop($sentence);
array_pop($sentence);
array_pop($sentence);
array_pop($sentence);
print_r($sentence);


Array ( [0] => it [1] => was [2] => a [3] => sunny [4] => day ) Array ( [0] => it )
```

### Add items to and remove items from the start of arrays

```
<?php

$people = [];

array_unshift($people, "Peter", "Bob", "Daniel", "Thomas", "Henry");

array_shift($people);

array_unshift($people, "Tobin", "Michael");

array_shift($people);

array_unshift($people, "Tobin");
print_r($people);

Array ( [0] => Tobin [1] => Michael [2] => Bob [3] => Daniel [4] => Thomas [5] => Henry )
```

### Associative arrays

* Simply refers to arrays that contain key/value pairs
* => is used to separate each key from its respective pair
* To print associative arrays - use the print_r() function

```
<?php


$films_and_actors = ["The Sixth Sense" => "Bruce Willis",
"Titanic" => "Leonardo DiCaprio",
"Tootsie" => "Dustin Hoffman",
"Barefoot in the Park" => "Robert Redfood"];

echo implode(", ", $films_and_actors);

print_r($films_and_actors);

// Bruce Willis, Leonardo DiCaprio, Dustin Hoffman, Robert RedfoodArray ( [The Sixth Sense] => Bruce Willis [Titanic] => Leonardo DiCaprio [Tootsie] => Dustin Hoffman [Barefoot in the Park] => Robert Redfood )

```



### Remove key/value pairs using the unset() function

```
<?php

$names = ["Molly" => 1, "Billy"=> 2];

echo implode(", ", $names);

unset($names["Molly"]);

echo implode(", ", $names);
echo "\n"; 
print_r($names);

// 1, 22Array ( [Billy] => 2 )
```


### Concatenating Arrays

We can concatenate arrays using the + operator
* The + operator is called the union operator
* It takes two array operands and returns a new array with any unique keys from the second array
appended to the first array

### Prompting users for input

We can prompt the user for input by using the readline() method, which is considered to be the equivalent of Ruby's gets() method
