# Defining 'classes' in JavaScript using the ES6 class syntax

Requires the following:

* class keyword
* } to close the class definition - no 'end'
* this keyword
* constructor

```
class Rectangle {
  constructor(height, width) {
    this.height = height;
    this.width = width;
  }

  findArea(height, width) {
    return this.height * this.width
  }
};

rectangle = new Rectangle(100, 50)
rectangle.findArea()
#=> 5000

```

```
class Person{
    constructor(salary, overtime, rate) {
      this.salary = salary;
      this.overtime = overtime;
      this.rate = rate;
    }

  calculateWage() {
    return this.salary + (this.overtime * this.rate)
  }

}

employee = new Employee(40_000, 15, 20)
employee.calculateWage()

#=> 40300



```