# Notes

Jasmine is a testing framework that can be used to test JavaScript code
Works with Node.js and browsers

* Add Jasmine by dragging and dropping it into the project or using the CDN
* The SpecRunner must include the application code and the spec files
* Open the SpecRunner in the browser to view all tests

**Jasmine keywords:**

* describe()
* it()
* expect()

* Work in the same ways as RSpec

addNumbers.js

```html

const multiplyNumbers = (num1, num2) => {
  return num1 * num2
}

multiplyNumbers(4,5)
```

add-numbers-test.js

```html

describe('multiplyNumbers)
  it('multiples two numbers together' function() {
    expect(multiplyNumbers(4, 5)).toEqual(20)
  }
}

```

**Matchers:**

* toEqual()
* toBe()
* not.toBe()
* toBeCloseTo
* toBeDefined
* toBeTruthy/toBeFalsey
* toContain
* toBeGreaterThan/toBeLessThan 

* toBe - uses triple equals to make a comparison between a value and another
* toBeCloseTo() accepts two parameters- used to check if something is similar to another value but not the same
* toBeDefined - useful for making sure that certain variables have a specific value
* toContain - arrays - checks that an element or elements are inside of an array

If the two objects are different references in memory, the strict equality operator will always be false 

* jasmine.any() - used to check that an object is an array or a function

**Hooks**

* Just as with RSpec, Jasmine offers functions that can be used to avoid repetition in code
 
**beforeEach** accepts a callback that will be run before the callback to each it() function

```html
var arr;

beforeEach(function() {
  array = [1,4,6,10, 15]
});
```

* The variable arr must be defined outside of the beforeEach() function so that it can be accessed inside of inner functions

**afterEach** - run after each it() callback 

* Used to reset variables used between tests, ensuring that the data stays the same between tests

```html
describe(‘Counting’, function(){
var count = 0;

beforeEach(function(){
count++;
});

afterEach(function(){
count = 0;
});

it(‘has a counter that increments’, function() {
expect(count).toBe(1);
});

it(‘gets reset’, function(){
expect(count).toBe(1);
});

});
```

**beforeAll/afterAll** functions can be used to persist a variable across all tests

* Can however lead to unintended side effects
* They are run before or after all tests
* They aren't reset between tests

* Nested describes - used in the same way as they are with RSpec - nested describes 

**Marking tests as pending**

* Tests can be marked as pending if we don’t know what we will be testing or if we don’t want to run a specific test for whatever reason

* Two ways to mark a test as pending:
* 1. - omitting a callback function to the it function, adding the pending function inside
* 2 - placing an x before the **it()** function


**Spies**

* When writing unit tests, developers should strive to isolate specific functionality 
* Unfortunately, many functions or objects may depend on other parts of an application and tight coupling is inevitable
* This is where mocking comes in

* Mocks take the place of the real object and we, the developer, can define what methods can be called on the mock, as well as their return values
* In Jasmine, mocks are referred to as spies - Jasmine's test double function
* A spy can **stub** or **mimic** any functionality and track calls to the function
* Spies only exist in the describe or it block in which they are defined
* They are removed after each test

* There are two ways to create a spy in jasmine, using either:

* **spyOn()** function - when the method exists on the object - when spying on an existing function
or
* **jasmine.createSpy()** function - creates a new function


```html
function add(a,b,b) {
  return a+b+c;
}

describe(‘add’, function(){
  var addSpy, result;
beforeEach(function(){
  addSpy = spyOn(window, ‘add’);
result = addspy();
})
it(‘can have params tested’, function(){
expect(addSpy).toHaveBeenCalled();
});
});
```

We are just faking the behaviour of this function


toHaveBeenCalled() matcher

.and.callThrough() method


* There shouldn't be lots of functions invoked that depend on other ones
* Dummy data should be used whenever possible to speed up our tests

* Testing frequency

* We can ensure that a function is only called a certain number of times by using the calls object on the spy


* Spies are useful when we want to see how many times a function has been called, how many arguments a function has been called with, and what the function returns

* Spies help us to reduce the time it takes to run tests



**Testing time-dependent code**

* How to test time-dependent code - e.g. when using the setInterval() and setTimeOut() methods or operations that use dates

* A Jasmine tool called a clock can be used 
* jasmine.clock().install() must be invoked and is commonly done in a beforeEach callback
* The clock must be uninstalled after each spec to ensure that we don’t have any unintended side effects

```html
describe('Hello world', function () {

  beforeEach(function () {
    this.addMatchers({
      toBeDivisibleByTwo: function () {
        return (this.actual % 2) === 0;
      }
    });
  });

  it('is divisible by 2', function () {
    expect(gimmeANumber()).toBeDivisibleByTwo();
  });

});
```


* Use this - to refer to the object
* Use this.actual - to refer to the content of the object 

* If you want something to run after each spec - use afterEach()

* If you want to be able to check if functions have been called and if they have been called - that they’ve been called how we want them to - spies can be used 


Where a spy might come in useful: 

```html
var Person = function () {};

Person.prototype.helloSomeone = function (toGreet) {
    return this.sayHello() + ' ' + toGreet;
};

Person.prototype.sayHello = function () {
    return 'Hello';
};

```


The hellosomeone() method should call the sayHello() method and I want to check that the sayHello() method is called when the hellosomeone() method is called



**Disabling Suites**

Suites can be disabled with the xdescribe function. These suites and any specs inside them are skipped when run and thus their results will show as pending.


* Pending specs

X it


toHaveBeenCalled matcher returns try if the spy was called

toHaveBEenCalledTimes will pass if the spy was called the specified number of times

toHAveBeenCalledWith will return true if the argument list matches any of the recorded calls to the spy


Create spy 

Where there is not a function to spy on, jasmine.createspy can create a bare spy 
This spy acts as any other spy - tracking calls arguments etc
But there is no implementation behind it
Spies are javascript objects and can be used as such


**Testing asynchronous code**