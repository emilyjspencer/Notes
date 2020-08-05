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

### Data types

* text type: str
* numeric stypes: int, float, complex
* sequence types: list, tuple, range
* mapping type: dict
* set types: set, frozenset
* boolean type: bool
* binary types: bytes, bytearray, memoryview

str - "I am a string"
int - 10
float - 10.4
complex - aj
list - ["one", "two", "three"]
tuple - ("one", "two", "three")
range - range(10)
set - {"one", "two", "three"}
dictionary - {"one": "un", "two": "deux", "three": "trois"}
frozenset - ({"one", "two", "three"})
boolean - True
bytes - 
bytearray -
memoryview - 



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