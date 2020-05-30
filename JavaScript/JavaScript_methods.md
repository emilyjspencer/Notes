### JavaScript methods 

**Array methods**


* **push** - add item to end of array
* **pop** - remove item from end of array
* **shift** - remove item from start of array
* **unshift** - add item to start of array

* **length** - returns the number of elements in an array
* **delete** - deletes the item at a specified index
* **splice** - add new items to an array

```html
var pets = ["cat, "dog", "rabbit", "gerbil"];
pets.splice(2, 0, "hamster", "budgie");
// "cat", "dog", "rabbit", "hamster", "budgie", "gerbil"
``` 
* First argument - the index after which we add new elements
* Second argument - number of elements to delete
* Post-second argument - the new elements to add

* **slice** -  slices out a piece of an array into a new array.
* **concat** - creates a new array by merging arrays
* **map** - transforms each item in an array and returns the array of results
* **filter** - lets through all elements that meet a  certain condition
* **reject** - doesn't let through elements that don't meet a certain condition
* **reduce** - used to calculate a single value based on the array 

* **forEach** - runs a specified function for every element of an array

* **indexOf** - returns the index of a specified element

* **lastIndexOf** - returns the index of the last instance of a specified element

* **includes** - returns true if array contains specified element

* **find** - returns the value of the first element in an array that passes a test 

* **findIndex** 

* **sort**  - sorts the array as string however e.g.
```html
let arr = [1,2,15];
arr.sort() /// 1, 15, 2
```

Not what one would expect
This is because the integers are treated as strings and sorted as strings by default
All elements are converted to strings for comparison


* **localeCompare** 

* **split** - splits an array into a string
* **split(" ")** - splits into single words
* **split("")** - splits into single letters

* **reverse** - reverses the order of elements in an array

* **join** - joins string elements into an array

* **toString** - converts an array to a string
```html
var crystals = ["Agate", "Amethyst", "Garnet", "Opal"];

crystals.toString() // Agate,Amethyst,Garnet,Opal
```

* **valueOf**

* **keys** 


