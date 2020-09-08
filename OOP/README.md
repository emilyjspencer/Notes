# OOP

# How did OOP come to exist?

Programmers needed to find a way to keep applications maintainable. As applications and programmes grew, small changes would often result in changes in unexpected places or in various parts of the application, where dependencies were.
The concept of code compartmentalization grew out of this desire to be able to prevent small changes from having a sort of domino effect on the rest of the system.
Splitting the code up into different units, allowed changes to be made that wouldn't have significant effect on the system.

With most OOP languages, we thus use classes.
Classes are used to represent objects
Object's data is encapsulated in variables
Object's behaviour is encapsulated in methods

The four main principles of object oriented programming:

* Abstraction
* Encapsulation
* Inheritance
* Polymorphism


# Inheritance

* Inheritance allows you to create a more specific and specialized version of a class
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

* Inheritance is used to create a specialized version of a class
* Inheritance expresses an 'is-a and/or has-a' relationship between two objects
* It also make code more DRY


**Inheritance in Rails**

In Rails, all controllers inherit from the ApplicationController and models inherit from ApplicationRecord, which inherits from ActiveRecord.
As a result, the developer has access to useful methods such as find, where, sum and average


# Abstraction - simplifying

* :) is an abstraction of a much more complex depiction of a face.
* It is a simplified version of a face, but it is still understood to represent a smiling face/happiness.
* In terms of programming, it can be said that Ruby is an abstraction of lower level code  (Ruby is a high level programming language)

**Abstraction allows us to design code that is more readable.**


# Polymorphism  - the ability for different types of data/different objects to respond to/make use of a common interface (set of methods/method)

Allows developers to use pre-written code for new pruposes

The same method can be used for multiple different objects - the same message can be send to different objects to get different results.

Examples of polymorphism in action:

* Modules can contain methods that are used by a number of different classes. 
These modules can be included into a variety of different classes to give those classes certain methods that they otherwise wouldn't have
* ActiveRecord Relations - can be treated like arrays
* Sessions can be treated like hashes.


### Polymorphism in action using inheritance

One way to achieve polymorphism is by using inheritance

```
class DisneyCharacter
    def initialize(first_name, hair_colour, movie)
         @first_name = first_name
         @hair_colour = hair_colour
         @movie = movie
    end

    def introduce
          puts "Hi. My name is #{@first_name}. I'm from #{@movie}"
    end

    def bye
      puts "Nice to meet you"
    end
end

class Princess < DisneyCharacter
    def introduce
          puts "I'm a princess. I'm #{@first_name}. I'm from #{@movie}"
    end
end

class Prince < DisneyCharacter
    def introduce
          puts "I'm a prince - #{@first_name}. I'm from #{@movie}"
    end
end

class Baddie < DisneyCharacter     
    def introduce           
        puts "I'm #{@first_name}. I'm from #{@movie}"     
    end 
end 

character = Baddie.new("Evil Queen", "black", "Snow White") 
character.introduce 
character.bye
p character
character2 = Prince.new("Prince Charming", "black", "Cinderella")
character2.introduce
character2.bye
p character2

#=>
I'm Evil Queen. I'm from Snow White
Nice to meet you
#<Baddie:0x00005627880c3f90 @first_name="Evil Queen", @hair_colour="black", @movie="Snow White">
I'm a prince - Prince Charming. I'm from Cinderella
Nice to meet you
#<Prince:0x00005627880c34c8 @first_name="Prince Charming", @hair_colour="black", @movie="Cinderella">
```

The Baddie, Prince and Princess classes inherit from the DisneyCharacter class.
So, they inherit its methods.

Another example

```

class Student
    attr_accessor :first_name, :surname, :current_course, :new_course
      
  def initialize(first_name, surname, current_course, new_course)
    @first_name = first_name
    @surname = surname
    @current_course = current_course
    @new_course = new_course
  end

end

class ViewStudent
  def initialize(student)
    @student = student
  end

  def show_student
    puts "Student: #{@student.first_name} + 
     " " + #{@student.surname}"
    puts "Degree course: #{@student.current_course}"
  end
end

class ChangeCourse
  def initialize(student)
    @student = student
  end

  def choose
    puts "What is the student's first name?"
    @student.first_name = gets.chomp.capitalize
    puts "What is the student's surname?"
    @student.surname = gets.chomp.capitalize
    puts "What course are they currently studying?"
    @student.current_course = gets.chomp.capitalize
    puts "What course do they wish to change to?"
    @student.new_course = gets.chomp.capitalize
    puts "Student has been updated: #{@student.first_name}   #{@student.surname} who was studying #{@student.current_course} now studies #{@student.new_course}"
  end
end

options = [ViewStudent, ChangeCourse]

student = Student.new("betty", "boop", "french german", "arabic")

puts "Select 1 to view student or 2 to update degree course."
selection = gets.chomp.to_i
select = options[selection - 1]
select = select.new(student)
select.choose

#=>

Select 1 to view student or 2 to update degree course.
2
What is the student's first name?
Betty
What is the student's surname?
Boop
What course are they currently studying?
French German
What course do they wish to change to?
Arabic
Student has been updated: Betty   Boop who was studying French German now studies Arabic

```

# Polymorphism using modules

Modules can be used to achieve polymorphism
Modules allow the developer to define certain methods and then mix these modules into specific classes in order to provide those classes with particular behaviour/functionality.
Modules must be 'included' into a class using the include keyword

```
module Sing
  def sing(lyrics)
    puts lyrics
  end
end

class Singer
  include Sing
end

class Actor
  include Sing
end

lily = Singer.new
lily.sing("Ooops I did it again")      
miles = Actor.new
miles.sing("Reach for the stars")   

#=> Ooops I did it again
#=> Reach for the stars
```

# Duck typing

An object type is defined by its behaviour - by what it can do - not by its class/type or what it is
Duck typing refers to the fact that Ruby is less concerned with an object's class and more concerned with the methods that are defined on it that can be called and what operations can be performed on it.

If it walks like a duck and talks like a duck then it probably is a duck
If an object walks like a duck or acts like a string, treat it as if it is a duck or string

Should aim to treat objects according to the methods they define rather than the classes from which they inherit or the modules they include.

Duck typing in action

```
class French  
  def greet  
    'Salut!'  
  end  
  
  def say_no  
    'non'  
  end  
end  
  
class German  
  def greet  
    'Hallo!'  
  end

  def say_no  
    'Nein'  
  end  
end  
  
class Dutch 
  
  def greet
    'Hallo'  
end  
  
  def say_no  
    'Nee'  
  end  
end  
  
def do_something(language)  
  language.say_no  
end  
puts do_something(French.new)  
puts do_something(German.new)
puts do_something(Dutch.new)  
  
def greet(language)  
  language.greet  
end  
puts greet(German.new)  
puts greet(French.new)
puts greet(Dutch.new) 

non
Nein
Nee
Hallo!
Salut!
Hallo

```


# Encapsulation  - hide the data whenever possible


* Encapsulation is to do with the idea of hiding aspects of an object's functionality from the rest of the code base. 
* Provides a sort of data protection - data can't be easily changed
* It is what defines the boundaries of an application and does so by using classes to represent objects. These classes expose interfaces (collections of methods) - which are used to interact with the objects.
The object's data is encapsulated in variables and the object's behaviour is encapsulated in methods.


Practiced by hiding data in instance variables, and only exposing these instance variables and thus the stored data when required, using attr_reader, attr_writer and attr_accessor.
These allow access to methods outside the class when that functionality is required and only for as much as it is required.
It allows developers to restrict direct access to an object's data and methods.

Encapsulation is also related to the single responsibility principle - SRP, where each class, module, and method has a responsibility for a single piece of functionality that is encapsulated by that class, module or method.