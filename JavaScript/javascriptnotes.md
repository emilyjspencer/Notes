**Callbacks**

* A callback function is a function that is passed into another function as a parameter and then invoked by that other function
* Callbacks are executed after another function has finished executing 

**Uses of callbacks:**

* Callbacks are used in various situations, such as:
* **React development**
* **AJAX requests**
* **Browser event**
* **Advanced array methods**

**Callback example:**

```html
function callback() {
    console.log("Hello from the callback function :)");
}

function higherOrderFunction(callback) {
    console.log("1");
    callback()
    console.log("Callback function has been called");
}

higherOrderFunction(callback);

// 
1
Hello from the callback function :)
Callback function has been called


``` 

**Using callback functions to reduce duplication:**

```html
function  greet(greeting) {
    console.log(greeting);
}

function greetAlert(greeting) {
    alert(greeting);
}

function greetConfirm(greeting) {
    return confirm(greeting);
}

greetConfirm("--------");

// pop-up alert "--------"
```

* We can use callbacks to limit this duplication:

```html
function sendMessage(message, callback) {
    return callback(message);
}

sendMessage("Message for console", console.log);
sendMessage("Message for alert", alert);

let answer = sendMessage("Are you sure??", confirm);
```

```html
function greet(name, capitalizeName) {
    return "Hello " + capitalizeName(name);
}

function capitalizeName(name) {
    return name.toUpperCase();
}

greet("Emily", capitalizeName);

// "Hello EMILY"
``` 

**Higher order functions** - a higher order function is a function that takes another function as a parameter and/or returns another function.

This parameter might be a callback 


**forEach() function**
* Take an array and a callback function
* For each element in the array, the callback function will be called
* forEach() can be used with three parameters (although not obligatory to do so)

```html

let words = ["It", "is", "sunny"];

let result = "";

forEach(words, function(string, index, array) {
    if(array.length -1 !== index) {
        result += string + " ";
    } else {
        result += string + "!!!";
    }
});


```

**findIndex**

* findIndex returns the index of the first element in an array for which the callback returns
a truthy value
* If findIndex() doesn't find an element that returns a truthy value  -1 is returned 
* findIndex() takes an array and a callback 
* findIndex() can take three parameters - element, index, array

**Arrow functions**

**setTimeout**

**setInterval**

**Regular Expressions**


**JavaScript Stack**

* It is an ordered set of stack frames
* It keeps track of the functions that have been called
* When a function is called, invocation information is added to top of the stack( so the most recently called function is at the top of the stack)
* The first function that was called is at the bottom of the stack
* The stack is processed from top to bottom
* When the execution of the function ends, invocation information is removed from the stack

* **A stack frame:**
* has information about the function that was called
* has the parameters that were passed to the function
* keeps track of the line number

**Event Loop**

**Global Scope**

**Module Pattern** 

**Promises**



**Closures**

A closure only exists when an inner function makes use of variables defined
from an outer function that has returned. 
If the inner function does not make use of any of the external variables all we have is a nested function

Only variables used in the inner function are remembered

The debugger keyword when used in the console pauses execution of the code
on the line that it has been placed 

Inner functions don't remember everything fom outer functions that have returned 
they only remember the variables that they need.

**Example**

```

function donaldTrump(){
    var name = "Donald"
    var iq = 10;
    return function Melania(){
      debugger
        return "My IQ is certainly not " + iq;
    }
}

donaldTrump()()

```

Execution is halted and we can try to access variables in the console.

iq = will return 10
iq // 10

However, if we try to access name - an error is thrown because it wasn't remembered
If the inner function does not use the outer variables then it doesn't have access
to them.

name

VM4047:1 Uncaught ReferenceError: name is not defined
    at eval (eval at Melania (7307106:5), <anonymous>:1:1)
    at Melania (<anonymous>:5:7)
    at <anonymous>:1:14


**Abstraction**

**The call stack**


**AJAX requests**


**JavaScript popup boxes** - three types:

**Confirm** - if you want the user to confirm or check something
* Box returns true if the user clicks 'OK'
* Box returns false if the user clicks 'Cancel'

**Alert** - a warning

**Prompt** - if you want the user to enter a value 
* Box returns true if the user clicks 'OK'
* Box returns false if the user clicks 'Cancel'

**parseInt() function** -  parses a string and returns an integer
```html
var parseIt = parseInt("115");
console.log(parseIt); // 115
```

**Math.random() function:** -  generates a **random decimal number** between 0 (inclusive) and 1 (exclusive) (never reaches 1)

* Math.random()) can be combined with Math.floor and another integer to generate **random WHOLE numbers**
```html
Math.floor(Math.random() * 65); // 17 - although this changes each time
```

* Math.floor() round decimal numbers down to the nearest whole number 

* This function will return a random whole number between 0 and 9:

```html

function randomWholeNum() {
 return Math.floor(Math.random() * 10)
}
```
* Math.random() and Math.floor() can be combined with max and min to generate random whole numbers in a range:


**Delete** keyword - used to delete properties from a JavaScript object:

```html
let Barbie = {
  "sibling": ["Shelley", "Skipper", "Stacey"]
  "hairColor": "blonde";
  "boyfriend": "Ken";
  "manufacturer": "Mattel";
  "inventor": "Ruth Handler"
};

delete Barbie.boyfriend;
```

**Variable declaration**

* If you don't declare variables, the variable will be declared in the global scope and not in the scope
in which you defined it.

**var vs. let**

* Var was used to declare variables until the advent of **ES6**
* It was problematic because variables declared using var could be overwritten without generating an error
* **let** was introducted with ES6. An error will be thrown if a variable declared using the let keyword is attempted to be overwritten
* **let** allows you to declare block-level variables 

**Block-level variables** - variables that exist only within the context of a block statement e.g.
and if statement. These block-level variables are destroeyd immediately after the statement has finished exeucting,

**const** - allows you to declare variables where values are never intended to change.
Variables decalred with **const** are available from the block in which they are declared.

**Type coercion**
**Type coercion** is performed for comparisons where the loose equality operator is used: '=='
Type coercion is not performed for comparison where the strict equality operator is used: '==='

**Operator precedence**

Operator precedence is enforced with parenthese:

```html
(1 + 3) * 2; // 8
```

**BODMAS/ BIDMAS** also applies

**Debugging in JavaScript**

* Get visibility using console.log() in JavaScript

**function** keyword - used to create an object in JS
This created a a new Function object - an object that can be invoked

**prototype** keyword - used to define an object's method

**Some useful methods**

```html
let myArray = [32, false, "js", 12, 19];
```

**reduce()**
**filter()**
**map()**
**slice()** - use to get a subarray of elements 
```html
myArray.slice(1,4);
// [false, "js", 12];
``` 

**splice()** - used to insert and remove elements
```html
myArray.splice(2, 4, "hi", "wr", "ld");
//  [32, false, "hi", "wr", "ld"]
```

**.replace()** - replaces words

```html
'hello, world'.replace('world', 'mars');
// 'hello mars';
```
charAt() - access characters in a string



**undefined** - value is not present
**null** - a deliberate non-value


**Function currying** - the process of breaking fown a function that takes multiple arguments into a series of functions that each take only one argument

**new and this**

When a function is called with the **new** keyword,  a new object is created and made available to the function via the **'this'** keyword,
Functions designed to be called in this way are called **constructors**