# Notes

* Python is an interpreted programming language, created in 1991
* Has many uses:
create web apps, connect to databases, handle data etc
* Python files have the extension .py
* Indentation is extremely important in Python - whitespace is used to define scope (Indentation doesn't affect functionality in Ruby, indentation is just for readability purposes)
* The same number of spaces must be used in the same block of code
* Python uses new lines to complete a command

### Python CLI
* Open the python command line interface with the following command:
```html
python
```
* Close the python cli with:
```html
exit()
```

### Variables

Just like with Ruby, there is no command to declare a variable, as there is in JS.
```html
word = "hello"
```

Variables:
* must start with a letter or _
* cannot start with a number
* are case-sensitive 

a, b, c = "One", "Two", "Three"
print(a) # One
print(b) # Two
print(c) # Three


If a variable is defined globally AND locally, the local variable will take
precedence:

```html
x = "sunny"

def weather():
  x = "rainy"
  print("It is " + x)

weather()
# It is rainy

```

To make a variable that is defined inside of a function, global, use the global keyword i.e.
```html
def weather():
   
  a = "rainy"

weather()

print("It is " + a)

Throws an error - NameError: name 'a' is not defined

```
BUT, if you use the global keyword:

```html
def weather():
  global a 
  a = "rainy"

weather()

print("It is " + a)
# It is rainy
```

No error is thrown

### Comments

Comments are prefixed by a #

To create a muli-lined comment:
```html
"""
I 
am
a
multi-lined
comment
"""
```
```html
fifth_letter = fifth_letter = "EMILY"[4]

print(fifth_letter)

#=> Y
```


### Classes

* Define a class with the class keyword
* method declarations are different to Ruby, __ __ and no end keyword

```html
class Triangle(object):
  def __init__(self):
    self.sides = 3
 
  
shape = Triangle()
print(shape.sides)

#=>  3
```

```html
class Person(object):
  def __init__(self, name):
    self.name = name

lily = Person("Lily")
print(lily.name)

#=>  Lily
```

```html
class Actor(object):

    def __init__(self, name, age, nationality):
      self.name = name
      self.age = age
      self.nationality = nationality

dustin = Actor("Dustin", 82, "American")
jack = Actor("Jack", 82, "American")
clint = Actor("Clint", 89, "American")

print(dustin.name, dustin.age, dustin.nationality)
print(jack.name, jack.age, jack.nationality)
print(clint.name, clint.age, clint.nationality)
```

```html
class Animal(object):

  is_mammal = True # variable available throughout class

  def __init__(self, name, colour):
   self.name = name
   self.colour = colour
  
  def description(self):
    print(self.name)
    print(self.colour)
    
whale = Animal("Harold", "grey")
whale.description()


class Animal(object):

  is_mammal = True # variable available throughout class
  is_healthy = True # variable available throughout class

  def __init__(self, name, colour):
    self.name = name
    self.colour = colour

  def description(self):
    print(self.name)
    print(self.colour)
    
cheetah = Animal('Nom', "orange and black")
dingo = Animal('I_stole_your_baby', "brown")
raccoon = Animal('Ringo', "medium grey")

print(cheetah.is_healthy)
print(dingo.is_healthy)
print(dingo.name)
print(raccoon.is_healthy)

```

### Inheritance

Parent class = base class
Child class = derived class - inherits from the parent class

__init__() - is a constructor - called automatically each time the class is used to create a new object 

The child's __init__() function overrides the inheritance of the parent's __init__() function

To keep the inheritance of the parent's __init__() function, add a call to the parent's __intit__() function

super() - makes the child class inherit all the methods and properties from its parent

```html
class Parent(Child):
  def __init__(self, firstname, lastname):
    super().__init__(firstname, lastname)
```

By using super() you don't have to use the name of the parent element, it will automatically inherit the methods and properties from its parent.


### Data types

* text type: str
* numeric stypes: int, float, complex
* sequence types: list, tuple, range
* mapping type: dict
* set types: set, frozenset
* boolean type: bool
* binary types: bytes, bytearray, memoryview

* str - "I am a string"
* int - 10
* float - 10.4
* complex - aj
* list - ["one", "two", "three"]
* tuple - ("one", "two", "three")
* range - range(10)
* set - {"one", "two", "three"}
* dictionary - {"one": "un", "two": "deux", "three": "trois"}
* frozenset - ({"one", "two", "three"})
* boolean - True
* bytes - 
* bytearray -
* memoryview - 



Check a datatype with the type() function
```html
x = 9
print(type(x))
# <class 'int'>
```

Set a datatype using the name of the datatype e.g.

name = str("Emily")

### Complex

```html
a = 3+5j
b = 5j
c = -5j

print(type(a))  # 'complex'
print(type(b)) # 'complex'
print(type(c)) # 'complex

print(a) # (3+5k)
print(b)  5j
print(c) (-0-5j)
```

### Type conversion

Convert a type into another type(numeric type) with:
* int()
* float()
* complex()

### Generating random numbers

No method to generate a random number, but there is a built-in module 'random' that can be used

```html
import random

print(random.randrange(1, 90))
# 29
```



### Dictionaries

Dictionaries in Python have the same functionality as hashes in Ruby and objects in JavaScript

```html

disney_films = {}
disney_films["Cinderella"] = 1950
disney_films["The Little Mermaid"] = 1990
disney_films["Bambi"] = 1942
disney_films["The Lion Kings"] = 1994
disney_films["Hercules"] = 1997


print(disney_films)
```

### Strings

* Strings in Python are arrays of bytes representing unicide characters


* The len() method is used to find the length of a string

```html
phrase = "ciao"
print(len(phrase))
# 4
```

Access elements in a string 
```html
a = "hello"
print(a[2])
#l
```
* The slice() method - used to return a range of characters

```html
sentence = "The land before time"
print(sentence[2:8])
# e land
```

* The strip method has similar functionality to the Ruby chomp() method
* strip() removes whitespace

```html
sentence = "       Tamagotchis were invented by Akihiro Yokoi     "
print(sentence.strip())
Tamagotchis were invented by Akihiro Yokoi
```

* upper() - converts all of the characters of a string to uppercase
* lower() - converts all of the characters of a string to lowercase
* replace() - replaces a string with another string
```html
a = "Python was invented by Huido van Rossum"
print(a.replace("H", "G"))
Python was invented by Guido van Rossum
```

* split() - splits a string into substrings 
```html
python = "Object Orientated Programming, is, fully, supported"
print(python.split(","))
```

### Checking for the presence of a character or phrase in a string:

```html
text = "Python uses duck typing"
x = "a" in text
print(x)
# False

text = "Python uses duck typing"
x = "e" in text
print(x)
# True
```

### String concatenation

Concatenate strings using the + operator


### Format() method
Use the format() method to insert variables into strings

```html
colour = "pink"
colour2 = "green"
text = "My favourite colour is {}. My least favourite colour is {}"
print(text.format(colour, colour2))
# My favourite colour is pink. My least favourite colour is green
```

### Escape characters

Escape charactrers \ are used in Python

### Negative indexing

```
sentence = "The land before time"
print(sentence[-9:-2])
# fore ti
```
### Other string methods

capitalize()
casefold() - the same as lower()
center()
count() - returns the number of times a specified value occurs in a string
encode() - returns an encoded version of the string
endswith() - returns true if the string ends with the specified value
expandtabs() - sets the tab size of string
find() - searches the string for a speciifed value and returns the position of where it was found
index() - returns the position of a specified character
join() - joins string elements
split() - converts a string into a list
swapcase - convert lower case to upper case and vice versa



### Formatting

```html
name = "Meryl"
string = "Hello, my name is "

sentence = string + name 
print(sentence)
#=> "Hello, my name is Meryl"

name = "Goldie"
print("Hello %s" % (name))
#=> "Hello Goldie"

nationality = "American"
print("I am %s" % (nationality))
#=> "I am American"
```

### Booleans

False values include:

() [] "" 0 None False

### Loops

```html

for letter in "HourOfCode":
  print(letter)
    
H
o
u
r
O
f
C
o
d
e

sentence = "Learn computer science. Change the world."

for letter in sentence:
  
  if letter == "c":
    print(letter)

#=> c
#=> c
#=> c
```

### Math module

```
from math import sqrt
print(sqrt(25))

#=> 5.0

print(sqrt(100))

#=> 10.0
```

### Operators

* Arithmetic operators + - / * ** % //
* Assignment operators = += -= *= /= %= //= **= &= |= ^= >>= <<=
* Comparison operators == != > < >= <=
* Logical operators  and or not
* Identity operators  is  is not
* Membership operators in  not in
* Bitwise operators 
& AND sets each bit to 1 if both bits are 1
| OR sets each bit to 1 if one of two bits is 1
^ XOR set each bit to 1 if only one of two bits if 1
~ NOT invents all bits
<< Zero fill left shift  shift left by pushing zeros in from the right and let the leftmost bits fall off
>> Signed right shif    shift right by pushing copies of the leftmost bit in from the left, and let the rightmost bits fall off

### Python Collections

* Four types of collection data types in Python:

* List - ordered and mutable
* Tuple - ordered and immutable
* Set - unordered and unindexed
* Dictionary - unirdered mutbale and indexed


* Lists

```
list = ["one", "two", "three", "four", "five", "six"]

print(list[3:5])
# ['four', 'five']
```

```html
list = ["one", "two", "three", "four", "five", "six"]

print(list[:5])
# ['one', 'two', 'three', 'four', 'five']
```

List methods

* append() - similar to Ruby's push() method
* append() adds an item to the end of a list

* insert() - allows you to insert an item at a specified index


* remove() - removes a specified item

* pop() - same as Ruby's pop() method - removes an item from the end of a list - or at a specified index

* del() - removes the specified index

* clear() - empties a list

* copy() - copies a list

* list() - also copies a list - or as a constructor can be used to make a new list

* extend() - adds elements from one list to another

* sort() - sorts a list


### Tuples

* Tuple - ordered and immutable


* Set - unordered and unindexed
* Dictionary - unirdered mutbale and indexed


### Functions

* Arbitrary arguments *args

If you don't know how many arguments will be passed into a function, add a * before the parameter name in the function definition
* The function will receive a tuple of arguements and can access the items

### Virtual environments

pip is a dependency manager for Python.
Pipenv is a higher-level dependency manager

To install Pipenv - use pip
```html
pip3 install --user pipenv
```
NB must be pip3 - (think final project)

Pipenv manages dependencies on a per-project basis. To install packages - cd into the project folder and run
```html
pipenv install requests
```

which installs the Requests library
A Pipfile, similar to a Gemfile or package.json, tracks the project's dependencies.

Create a main.py file

```html
import requests

response = requests.get('https://httpbin.org/ip')

print('Your IP is {0}'.format(response.json()['origin']))
```
Run the script with:

```html
pipenv run python main.py
```

Using pipenv run ensures that the installed packages are available to your script.

### Virtualenv

Virtualenv is used to create Python environments - creates a folder which contains all necessary executables to use the packages that a Python project would need and a copy of the pip library which can be used to install other pakcages

The name of the virtual environment can be anything, but it is convention to use **venv**

This creates a copy of Python in any folder that the command is run in

### Activating the virtual environment

To use the virtual environment - it needs to activated:
```
source venv/bin/activate
or 
source virtualEnvironmentName/bin/activate
```

We know that we are in the virtual environment if the name of it is appended to the console.

From now on, any package that is installed using pip will be placed in the env folder, isolated from the global Python installation

### Ending a session

```html
deactivate
```

### Deleting a virtual environment

```html
rm -rf virtualEnvironmentName
```

### pip freeze - (final project)

In order to keep the environment consistent, it's best to freeze the current state of the environemtn packages:

```html
pip freeze > requirements.txt
```

This creates a requirements.txt file, which contains a list of all the packages in the current environment, and their versions.

Typing the following enables the developer to see a list of the installed packages:
```html
pip list
```

```html
pip install -r requirements.txt
```



