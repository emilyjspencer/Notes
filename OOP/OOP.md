# OOP

The four principles of object oriented programming:

* Abstraction
* Encapsulation
* Inheritance
* Polymorphism


# Inheritance

* It allows you to create a more specific and specialized version of a class
* The parent class is the super class or base class
* The child class is the sub class or derived class
* The parent class is always more generic than the subclasses
example
Animal (more generic) is the parent class of Mammal (more specific) which is the parent class of Monkey(more specific)

```
class Animal
end

class Mammal < Animal
end

class Monkey < Mammal
end

```

The Mammal class inherits from the Animal class
The Monkey class inherits from the Mammal class

Every method and attribute defined on the Animal class will be available to / accessible on the Mammal and Monkey classes.

The methods in the Animal class are more general - apply to all animals.
Depending on the species and types of animal, there would need to be different methods for different species and animals i.e. not shared with all animals.
So new classes can be created to inherit the characteristics of ALL animals and then add the extra characteristics


# What is the purpose of inheritance?

Inheritance is used to create a specialized version of a class
Inheritance expresses an 'is-a and/or has-a' relationship between two objects
It also make code more DRY


**Inheritance in Rails**

In Rails, all controllers inherit from the ApplicationController and models inherit from ApplicationRecord, which inherits from ActiveRecord.
As a result, the developer has access to useful methods such as find, where, sum and average


# Abstraction - simplifying

* :) is an abstraction of a much more complex depiction of a face.
* It is a simplified version of a face, but it is still understood to represent a smiling face/happiness.
* In terms of programming, it can be said that Ruby is an abstraction of lower level code  (Ruby is a high level programming language)

**Abstraction allows us to design code that is more readable.**


* Polymorphism - one name - many meanings

The same method can be used for multiple different objects

Examples of polymorphism in action:

* Modules can contain methods that are used by a number of different classes. 
These modules can be included into a variety of different classes to give those classes certain methods that they otherwise wouldn't have
* ActiveRecord Relations - can be treated like arrays
* Sessions can be treated like hashes.



