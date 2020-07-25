### TypeScript

* Is a typed superset of JS, built by Microsoft, aimed at making the language more scalable and reliable. Being a superset of JS means that it includes all of the features of JS as well as its own additional features
*  Bein a typed version means means that the developer can specify the types of different variables at the time of declaration
They will always hold the same type of data in that scope.
* Compiles to regular Javascript
* Tends to be less error prone
* Lends itself to code readability and maintainability
* Used to support the building of large-scale JS applications, as it offers better development-time tooling, static code analysis, compile-time type checking and code level documentation
* TypeScript's online playground can be found here: https://www.staging-typescript.org/play?#

##### Adding TypeScript

```html
npm install -g typescript
```

Verify it has been installed/check the version:
```html
tsc -v  
``` 

Save TypeScript files with a file extension of .ts

### Compiling

TypeScript needs to be compiled into plain JavaScript as this is the language of the Web

To compile, the following needs to be run:
```html
tsc filename.ts
```
This JavaScript file with the same filename but a different extension, and which can then be passed to the browser

To compile all TypeScript files in any folder
```
tsc *.ts
```

### Typing 

Typing is useful for ensuring reliability and scalability.
Type checking helps the developer to ensure that their code works as expected.

Assign a type to a variable by adding a : after the name of the variable and then the name of the type followed by = and the value of the variable.


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

**Language**

The syntax is similar to but not the same as JS syntax.

**Compiler**

The compiler is responsible for type information erasure i.e. removing the typing information, and the code transformations.
Teh code transformations enable TypeScript code to be transpiled into executable JS. 
Everything related to the types is removed at compile-time, so TypeScript isn't really statically typed.
A better word to use would be transpiling - the act of converting code from a human readable format to a machine readable format. With TS, human readable code is converted into another form of human readable code.

The compiler also performs static code analysis - throwing errors and warnings when needed. Can combine the generated code into a single file.

**Language service**

Language service - collects type information from the source code.


### TypeScript key language features

### Type annotations

Type annotations in TypeScript are a lightweight way to record the intended contract of a function or variable.

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
In structural typing, two elements are considered to be compatible with one another if, for each feature within the type of the first element, a corresponding and identical feature exists within the type of the second element.
Two types are considered to be identical if they are compatible with each other.


### Type inference

The TypeScript compiler can attempt to infer the type information if no type has been specified. A variable's type can be inferred based on its assigned value and its usage.
The type inference takes place when initialising variables and members, setting parameter default values, and determining function return types.

Example:

```html
const add = (a: number, b: number) => {

  return a + b;
}

console.log(add(4, 10))
// 14
```

### Type erasure

TypeScript removes all type system constructs during compilation

input:

```html
let x: SpecfiedType;

output:

let x;
```
This means that no type information remains at runtime - there is not konwledge that some variable x was declared as being of type Specfiedtype.


### Reasons to use TypeScript

* Type checking and static code analysis.
Values can be specified as being of a certain type - and the compiler will warn the developer if they are being wrongly used.
This can reduce runtime errors 

Static code analysis - doesn't warn about wrongful type usage but warns about mispellings or if the developer attempts to use a variable beyond its scope.

* Type annotations - type annotations can function as a type of code level documentation. It's easy to check from a function signature what kind of arguments the function can accept and that type of data it will return.
Useful for developers who are new to a project

Types can be reused throughout the code base and a change to a type definition will automatically be reflected wherever that type is used.

* Intellisense - is improved when it is known exactly what types of data is being procesed. Can provide hints about available properties.

### Negatives

These type annotations and type checking only exist a compile time and not at runtime.

Type inference in TypeScript is not bullet-proof - sometimes the developer might have seemingly declared their types perfectly, but the compiler still states that the property doesn't exist, or that kind of usage is not permitted.
In such cases, the developer might need to help the compiler by adding an extra type check.

Type errors can be difficult to dicipher. 


### Setting up TypeScript

TS code isn't executable by itself  - has to first be compiled into executable JS.
When TS is compiled into JS, the code becomes subject to type erasure; interfaces, type aliases, type annotations are removed from the code  - resulting in pure ready-to-run JS.

During the build process, all TS code is compiled into JS in a separate folder to the production environment then runs the code from that folder.


Create an npm project:
```html
npm init
```

Install the dependencies:
```html
npm install --save-dev ts-node typescript
```

Set up the scripts in the package.json file

```html
{
      "scripts": {
          "ts-node": "ts-node"
      },
}
```

Run ts-node by running:
```html
npm run ts-node
```

Run the specific TS file by entering the following:

```html
npm run ts-node -- file.ts
```

Example

```html

type Operation = 'multiply' | 'add' | 'divide' | 'subtract' ;

type Result = number;

  const calculator = (a: number, b: number, operation: Operation): Result => {
      switch(operation) {
      case 'multiply':
          return a * b;
      case 'add':
          return a + b;
      case 'subtract':
          return a - b;
       case 'divide':
          if(b === 0) throw new Error('Can\t divide by 0!');
          return a / b;
       default:
         throw new Error('Operaton must be multiply, add, divide or subtract')
      }
  }

  try {
      console.log(calculator(1, 5, 'divide'))
  } catch (e) {
      console.log('Something went wrong, error message: ', e.message);
  }

  console.log(calculator(1, 4, 'add'))
  // 0.2
  // 5
```







