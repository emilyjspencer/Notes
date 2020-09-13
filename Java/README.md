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
* In Java - whole numbers are stored in the int primitive data type
* Ints hold pos neg numbers and zero
* Don’t hold floats
* Doubles are to some extent the Ruby equivalent of floats - confusing 
* Doubles can hold decimals and fractions. They can also hold integers however.

```
public class Attendance{
  public static void main(String[] args) {
    
    double percentageAttendance = 97.4;
    System.out.println(percentageAttendance);
  }
}

#=> 97.4
```

Other primitive data types:

* booleans
* char - for any character - the value must be enclosed in single quotes


# Objects

Objects have built-in behaviour

* Strings - defined with String

# Naming variables


Variables can only start with a letter of $ - nothing else

# Static checking - helps catch bugs in the code before the code is run e.g

boolean sing 'Get wavy'



