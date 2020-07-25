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


Interface


```
const Car = {
  model: 'Prius',
  Make: 'Toyota',
  display() => { console.log('hi'); }
}
```

If we look at the object above and try to extract its signature, it would be:

```
{ model: String,
  make: String,
  display(): void
}
```

If we want to reuse this signature, we can declare it in the form of an interface.
To create an interface, we use the keyword interface

```html
interface ICar {  
  model: String,  
  make: String,  
  display(): void  
}

const Car: ICar = {  
  model: 'Prius',  
  make: 'Toyota',  
  display() => { console.log('hi'); }  
}


```



TS consists of three separate parts:

* Language
* Compiler
* Language service


