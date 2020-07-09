#Node

### What is Node?

* Node.js is an open source server environment
* It allows developers to run JavaScript on the server. Before Node, JavaScript code could only be executed in the browser.
* It runs single-threaded, non-blocking, asynchronously programming, making it extremely memory efficient.

### The Node Console

* Open the Node console:
```html
node
```

* Exit the Node console:
```html
.exit
```

* Run a file with Node:
```html
node nameOfFile
```
An example. Shows how writing JS in a file with extension .js can then be executed using
```html
node scores.js
```


scores.js
```html
let scores = [10, 98, 93, 45, 86, 34];

let scores2 = [20, 4, 73, 12, 74, 93, 3, 25, 49];


average = (array) => {
    let sum = array.reduce((a, b) => {
        return a + b;
    }, 0);
   
    let averaged = sum / array.length
    
    let roundedAverage = Math.round(averaged)
    console.log(roundedAverage)
    }


average(scores);  // 61
average(scores2); // 39
```

### Node Package Manager

* NPM is JavaScript's package manager 

* Packages are simply 'packages'/'modules'/'libraries' etc of code that others have written to speed up developent/make our lives easier
* It's a centralised repository of thousands of packages that developers can use

* Npm has a command line tool that allows developers to easily install packages

```
npm install packageNAme
```

As long as npm knows about that package - the package will automatically be installed

### Uses of Node.js

* Generating dynamic page content
* Manipulating database resources
* Creating, opening, reading, writing, deleting and closing files on the server
* Collecting form data

### Node.js files

* Node.js files contain tasks that will be executed on certain events
* A typical event is someone trying to access a port on the server
* Node.js files must be initiated on the server before having any effect

* Herem I am have made a server file and started the server by running:
```html
node app.js
```
and navigated to localhost:5000

```html
let http = require('http');

http.createServer(function (req, res) {
  res.writeHead(200, {'Content-Type': 'text/html'});
  res.end('Server up and running!');
}).listen(5000);
```

![server](server.png)

### Node Modules

* Node modules are akin to JavaScript libraries
* They are essentially a set of functions that can be included in an application
* Node.js has a set of built-in modules which can be included into an application/project

**Including modules**

* The require() function must be utilized

```html
let http = require('http');
```

This gives the application access to the HTTP module and is thus able to create a server

### Custom modules

* You can create your own modules, and easily include them in your applications

The following example creates a module that returns a date and time object

module.js

```html
exports.dateTime = function () {
  return Date();
};
```

Use the exports keyword to make properties and methods available outside the module file

### Including custom modules in an application 

app.js

```html
let http = require('http');
let date = require('./module');

http.createServer(function (req, res) {
  res.writeHead(200, {'Content-Type': 'text/html'});
  res.write('The date and time are currently: ' + date.dateTime());
  res.end();
}).listen(5000);

```

Renders as follows in the browser:

![module](module.png)

