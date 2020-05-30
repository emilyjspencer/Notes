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

<hr>

**String methods**

* **length** - returns the number of items in a string
```html
const string= "The humidity level today is very high";
const lengthOfString = string.length;
console.log(lengthOfString) // 37
```

* **indexOf()** - returns the index of the first occurrence of a specified
element in a string:
```html
const string = "Where is the word sunny in this sentence";
const word = string.indexOf("sunny");
console.log(word) // 18
```

* **lastIndexOf()** returns the index of the last occurrence of a specified
element in a string:
```html
const string = "Where is the last occurrence of the word sunny in this sentence where sunny is mentioned too many times because it is sunny today";
const word = string.lastIndexOf("sunny");
console.log(word) // 118
```
* **search()** - searches a string for a specified value and returns the position of the match:

```html
const string = "At what index does the word 'vanilla' occur!";
const position = string.search("vanilla");
console.log(position) // 29
```

* **slice()** - extracts a part of a string and returns the extracted part in a new string.
- The method takes 2 parameters: the start position, and the end position (end not included).
Example:
```html
const string = "Pink, Blue, Mint";
const result = string.slice(7, 13);
console.log(result) // lue, M
```
* If the second parameter is ommitted - extracts the rest of the string from the index specified
by the first parameter
Example:
```html
const string = "Pink, Blue, Mint";
const result = string.slice(7);
console.log(result) // lue, Mint
```

* If a parameter is negative, the position is counted from the end of the string.
Example:
```html
const string = "Pink, Blue, Mint";
var result = string.slice(-8);
console.log(result) // ue, Mint
```

* **substring()** is similar to slice(), but it can't accept negative indexes.
Example:
```html
const string = "Sanrio Co., Ltd. is a Japanese company";
const result = string.substring(7, 15);
console.log(result)
```

If you omit the second parameter, substring() will slice out the rest of the string.
Example:
```html
const string = "Sanrio Co., Ltd. is a Japanese company";
const result = string.slice(-21);
console.log(result)
```

* **substr()** - similar to the slice() method

- However, the second parameter specifies the length of the extracted part.
```html
const string = "Hey there, Delilah, dont you worry about the distance";
const result = string.substr(7, 2);
console.log(result) // re
```
* If the second parameter is ommitted, substr() will slice out the rest of the string.
Example:
```html
const string = "un, deux, trois, quatre, cinq";
var result = string.substr(7);
console.log(result) // x, trois, quatre, cinq
```

* If the first parameter is negative, the position counts from the end of the string.
Example:
```html
const string = "eins, zwei, drei, vier, funf";
const result = string.substr(-4);
console.log(result) // funf
```

* **replace** - replaces a specified value with another value in a string.
Example:
```html
const string = "Do you prefer Ruby or JavaScript";
const replacement = string.replace("Ruby", "Python");
console.log(replacement) 
// Do you prefer Python or JavaScript
```

* replace() is case-sensitive
* to ignore case sensitivity, use the i flag:
```html


```

* **charAt**


* **charCodeAt**


* **concat**


* **trim()**

