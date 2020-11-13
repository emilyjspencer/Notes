# Java

* Statically-typed object-oriented programming language
* It is a compiled language
* One of the most popular programming languages
* Created in 1995 by Sun Microsystems 
* Its Virtual Machine ensures the same Java code can be run on different operating systems and platforms
* Being a statically-typed langauge - each variable/attribute's type must be declared, unlike in Ruby - which is a dynamically-typed language, and thus doesn't
* Java is also a lower-level language than Ruby and thus is more verbose; it takes more lines of code to achieve the same functionality in Java than it does in Ruby
* A common IDE is IntelliJ
* Java files have the extension .java
* The class is named after the file
* Statements always end with a semicolon - ;
* Java is case-sensitive
* Use pascal case to declare classes
* Use camel case to declare functions and variables
* Every Java program must include a main() method
* Parts of an object can be accessed with a dot - dot notation
* Curly braces are used to indicate the beginning and end of a method and the beginning and end of a class
* Public methods and public classes must be declared with the public keyword - meaning that these are accessibly anywhere in the application

Hello world in Java

```
public class HelloWorld {
  public static void main(String[] args) {
    System.out.println(“Hello World!”);
  }
}
#-> Hello World!
```
In this example:
* static - indicates that the method main() can be called without calling it on an instance of a class
* void is the return value of the method - i.e. this method is expected to have no return value
* the code in the parentheses represents the arguments
* println - shorthand for 'print line'
* Java's way of printing messages to the screen is:
System.out.println() as opposed to simply 'print' in ruby


### Writing comments

* Single-line comments: //
* Multi-line comments: /*    */

### Semicolons

Semicolons are used to mark the end of a statement


# Full compilation cycle:

We can manually compile the Java file with the following command:

```
javac fileName.java
```

If the compilation is unsuccessful - errors are thrown and no fileName.class file is created.
If the compilation is successful - a fileName.class file is created.
This file can be executed with the following command:

```
java fileName.class
```


```
public class Converstion {
  public static void main(String[] args) {
    
    System.out.println(“Hi.”);
    System.out.println(“My name is Emily”);
    System.out.println(“How are you”);

  }
}
```

# Declaring variables

* In Ruby, the type of variable doesn't need to be declared.
* In JavaScript it doesn't either - although let/const/var(ES5) need to prefix the variable name
* In Java, the variable's type must also be declared:

```
public class Human {
	public static void main(String[] args) {
    String name = "Mag";
    int yearOfBirth = 1964;
    System.out.println(name);
	}
}
```

# Primitive Data Types
* Primitive data types are the most simple of data types
* They don't have built-in behaviour
* The different primitive data types in Java are:
boolean, long, short, int, double, float, char, byte
* In Java - whole numbers are stored in the int 
* Ints hold pos neg numbers and zero
* Don’t hold floats
* Doubles hold very large numbers and decimals
* Char - a single character. Must be enclosed in single quotes
* Byte - stores whole numbers from -128 to 127
* Primitive data types always have a value
* They start with a lowercase letter

```
public class Attendance{
  public static void main(String[] args) {
    
    double percentageAttendance = 97.4;
    System.out.println(percentageAttendance);
  }
}

#=> 97.4
```

# Non-primitive data types

The non-primitive data types are:
* strings
* classes
* arrays

They are called reference types because they refer to objects

* Non-primitive data types can be null
* They start with an uppercase letter

# Scientific numbers

* A floating point number can also be a scientific number with an 'e' to indicate the power of 10:


# Equality

When checking for equality with primitive data types - we can use equality operator
== !=   >=   <=

When checking for equality with non-primitive data types - we can't use the primitive equality operator - have to use the built-in method equals()
e.g.
```

String sentence1 = "Hi there!";
String sentence2 = "Hi!";
System.out.println(sentence1.equals(sentence2));
```


# Naming variables


Variables can only start with a letter or $ - nothing else

# Static checking - helps catch bugs in the code before the code is run e.g

boolean sing 'Get wavy'


# String concatenation

Use the + to concatenate string

# Classes and Objects

In order to have the data types we want, we need to be able to create them, as only a few data types actually exist.
For this purpose, we can define classes, which act as blueprints for the new data structure - defining what the new data structure will look like and what it's made up of.
Classes are used to model more complex pieces of data.
To create the actual data type - we have to instantiate the class.

* To define a class in Java  - use the class keyword
* The class is enclosed within curly braces
* Another term for attributes in Java is fields
* If you don't want a variable to be overwritten, declare it as being final e.g.
```
public class Person
  final String name = "Betty";

  public static void main(String[] args) {
    Person woman = new Person();
    woman.name = "Amy";
    System.out.println(name);
  }
}
```

Will throw an error




# Methods

The keywords static or public can be used with methods

* If the public keyword is used - that method can't be accessed without calling the method
on an instance of the class
* If the static keyword is used - the method can be called without being called on an instance of a class

```
public class Person {
  static void nameThem(String name) {
    System.out.println(fname + "is a teacher");
  }

  public static void main(String[] args) {
    myMethod("Billy");
    myMethod("Benny");
    myMethod("Bathsheba");
  }
}
// Billy is a teacher
// Benny is a teacher
// Bathsheba is a teacher
```

```

public class Student {
 
  
  public void speak() {
    System.out.println("I love music");
  }

  
  public void playInstrument(String instrument) {
    System.out.println("I play the " + instrument);
  }


  public static void main(String[] args) {
    Student student = new Student();     
    student.speak();      // Call the fullThrottle() method
    student.playInstrument('violin);      
  }
}

// I love music
// I play the violin
```