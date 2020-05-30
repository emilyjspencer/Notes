## Regular Expressions

* **Regular expressions**  are special strings that represent a search pattern. 
* Also known by the terms **regex** or **regexp**
* Regexes help programmers match, search, and replace text. 

**test()** method - used for literal matches/single-pattern searches

The test() method tests for a match in a string.

This method returns true if it finds a match, otherwise it returns false.
Example:

```html
let string = "It is super hot today";
let regex = /hot/;
regex.test(string);
//true

let string = "It is super hot today";
let regex = /in/;
regex.test(string);
// false
```

* Searching for multiple patterns

* Use  OR or |

Example

```html
let colours = "My favourite colour is pink, but I also love lilac";
let colourRegex = /pink|lilac|blue|green/; 
let result = colourRegex.test(colours);
console.lot(result) // true
```

* Ignore case while matching
* Use the i flag
Example
```html
let string = "I love to cycle";
let regex = /LOVE/i; 
let result = regex.test(string);
console.log(result) // true
```

* **match()** method
* Use the match() method to extract actual matches

```html
let string = "Which word will be extracted from the string.";
let regex1 = /from/; 
let result = string.match(regex1); 
console.log(result) // 'from'
```

* **Extracting a pattern more than once using the /g flag**

```html
let song = "I think I see confetti from this potion pillow fights and feathers,
overdosin"
let lyric = /I/gi; // Change this line
let result = song.match(lyric); 
console.log(result) 
// 
[
  'I', 'i', 'I',
  'i', 'i', 'i',
  'i', 'i', 'i'
]

``` 
* **Use the wildcard character to match everything**  .

```html
let string = "There was a lot of sun today. I love when there is lots of sun";
let word = /.un/; // Change this line
let result = word.test(string);
console.log(result) // true
```
As long as there is a word which ends with 'un' in the string - true is returned


