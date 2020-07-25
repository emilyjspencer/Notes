### TypeScript

* Is a typed superset of JS aimed at making the language more scalable and reliable. Being a superset of JS means that it includes all of the features of JS as well as its own additional features
*  Bein a typed version means means that the devleoper can specify the types of different variables at the time of declaration
They will always hold the same type of data in that scope
* Is the typed version of JavaScript
* Built by Microsoft
* Compiles do to regular Javascript
* Tends to be less error prone
* Lends itself to code readability and maintainability
* Used to support the building of large-scale JS applications, as it offers better development-time tooling, static code analysis, compile-time type checking and code level documentation

##### Adding TypeScript

```html
npm install -g typescript
```

Verify it has been installed/check the version:
```html
tsc -v   

Save TypeScript files with a file extension of .ts

### Compiling

TypeScript needs to be compiled into plain JavaScript as this is the language of the Web

To compile, the following needs to be run:
```html
tsc filename.ts
```
This JavaScript file with the same filename but a different extension, and which can bed pass to the browser

To compile all TypeScript files in any folder
```
tsc *.ts
```

### Typing 

Typing is useful for ensuring reliability and scalability
Type checking helps the developer to ensure that their code works as expected

Assign a type to a variable by adding a : after the name of the variable and then the name of the type followed by = and the value of the variable


##### The three different types in TypeScript
* Any type
* Built-in types
* User-defined types

**Any type** - is the superset of all the data types in TypeScript
Giving any variable the type of any is equivalent to opting out of type checking for a variable

```
let typeAny: any = ‘Hi, my name is Emily’
```

**Built-in types**

Include number, string, boolean, void, null, undefined

```html
let num: number = 5;
let name: string = ‘Minnie’;
let isPresent: boolean = true;
```

**User-defined types**

Include: enum, class, interface, array and tuple

### Object-oriented programming

TypeScript supports all the features of object-oriented programming, such as classes

### Classes

TypeScript has built-in support for classes, which were unsupported by ES5 and earlier versions.

```
class Car {

  model: String;
  doors: Number;
  isElectric: Boolean;

  constructor(model: String, doors: Number, isElectric: Boolean) {
  this.model = model;
  this.doors = doors;
  this.isElectric = isElectric;
}

displayMake(): void {
  console.log(`This car is ${this.model}`);
}
}
```

To create a new instance of the class:

```
const Prius = new Car(‘Prius’, 4, true);
Prius.displayMake()
```






TS consists of three separate parts:

* Language
* Compiler
* Language service

The syntax is similar to but not the same as JS syntax.

The compiler is responsible for type information erasure i.e. removing the typing information, and the code transformations.
Teh code transformations enable TypeScript code to be transpiled into executable JS. 
Everything related to the types is removed at compile-time, so TypeScript isn't really statically typed.
A better word to use would be transpiling - the act of converting code from a human readable format to a machine readable format. With TS, human readable code is converted into another form of human readable code.

The compiler also performs static code analysis - throwing errors and warnings when needed. Can combine the generated code into a single file.

Language service - collects type information from the source code.


### TypeScript key language features

### Type annotations

Type annotations in TypeScript are a lightweight way to record the intend contract of a function or variable.

```html
const greeting = (name: string, age: number, occupation: string): string => {
    return `Hi there ${name}, you are ${age} years old! and you are a ${occupation}`;
};

const person = "Beyonce Knowles";
const age = 38;
const occupation = "singer";

console.log(greeting(person, age, occupation));

// Hi there Beyonce Knowles, you are 38 years old! and you 
are a singer

```

### Structural typing

TypeScript is a structurally typed language.
In structural typing, two elements are considered to be compatible with on another if for each feature within the type of the first element a corresponding and identical feature exists within the type of the second element.
Two types are considered to be identical if they are compatible with each other.


### Type inference

The TypeScript compiler can attempt to infer the type information if no type has been specified. A variable's type can be inferred based on its assigned value and its usage.
The type inference takes place when initialising variables and memebrs, setting parameter default values, and determing function return types.

Example:

```html
const add = (a: number, b: number) => {

  return a + b;
}

console.log(add(4, 10))
// 14
```







