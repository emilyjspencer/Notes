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

* Arithmetic operators
* Assignment operators
* Comparison operators
* Logical operators
* Identity operators
* Membership operators
* Bitwise operators