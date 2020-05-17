# Notes

* The two main formats that APIs respond with are:
* JSON
* XML

* **JSON** is more commonly used
* Requests can be made in the **browser**
* Requests can be made form the command line using **curl**
* Requests can be made form inside of code 

**Making requests using Node**

* An npm package called **request** can be used

* Install the package
```html
npm install request
```

* Include the package in the code

```html
const request = require('request');
request('http://www.google.com', function(error, response, body) {
if(!error && Response.statusCode == 200) {
  console.log(body)
})
```

* Run node filename to make the request

twitter_request.js

```html
const request = require('request');
request('http://www.twitter.com', function(error, response, body) {
 if(!error && response.statusCode == 200) {
    console.log(body)
  }
})
```
```html
node twiter_request.js
```

Returns: lots of html

An example of a failed request - non-existent page:

sylvanian_families_error_request.js

```html
const request = require('request');
request('https://www.sylvanianfamiliessssss.com/en-uk/', function(error, response, body) {
  if(error) {
      console.log("Server error");
      console.log(error);
  } else {
      if(response.statusCode == 200) {
      console.log(body)
  }
}
})
```
```html
node sylvanian_families_error_request.js
```

Returns: 

```html
Server error
Error: getaddrinfo ENOTFOUND www.sylvanianfamiliessssss.com
    at GetAddrInfoReqWrap.onlookup [as oncomplete] (dns.js:66:26) {
  errno: -3008,
  code: 'ENOTFOUND',
  syscall: 'getaddrinfo',
  hostname: 'www.sylvanianfamiliessssss.com'
}
```

An example using the JSONplaceholder API  - a fake online REST API for testing and prototyping

jsonplaceholder_request.js

```html
request = require('request');

request('https://jsonplaceholder.typicode.com/users/10', function(error, response, body) {
    
    if(!error && response.statusCode == 200) {
        const parsedData = JSON.parse(body); 
        console.log(parsedData);    
    }
})
```

Returns all of the 'person's' data:

```html 
{
      id: 10,
  name: 'Clementina DuBuque',
  username: 'Moriah.Stanton',
  email: 'Rey.Padberg@karina.biz',
  address: {
    street: 'Kattie Turnpike',
    suite: 'Suite 198',
    city: 'Lebsackbury',
    zipcode: '31428-2261',
    geo: { lat: '-38.2386', lng: '57.2232' }
  },
  phone: '024-648-3804',
  website: 'ambrose.net',
  company: {
    name: 'Hoeger LLC',
    catchPhrase: 'Centralized empowering task-force',
    bs: 'target end-to-end models'
  }
}
```

Return specific data by simply accessing the properties:

jsonplaceholder_request2.js

```html
request = require('request');

request('https://jsonplaceholder.typicode.com/users/10', (error, response, body) => {
    
    if(!error && response.statusCode == 200) {
        const parsedData = JSON.parse(body); 
        console.log(parsedData.name + ' lives at ' + parsedData.address.street);
        console.log(parsedData.name + ' works for ' + parsedData.company.name);
        console.log(`${parsedData.name} has a phone number of ${parsedData.phone}`);   
    }
})
```
Returns: 

```html
Clementina DuBuque lives at Kattie Turnpike
Clementina DuBuque works for Hoeger LLC
Clementina DuBuque has a phone number of 024-648-3804
```

* The third console.log() used the ES6 template literal syntax

The fetch syntax can also be used to make requests (uses promises)

```html
fetch(url)
  .then(response => response.json())
  .then(json => console.log(json))
``` 
* **fetch()** - returns a promise
* .then() handlers are used
* If trying to access data - two .then() handlers/callbacks are used
* If the goal is to manipulate data - only one .then() handler is required, although the second can be used 
* fetch() results in the request being made immediately and results in a promise
* if the request is successful - the promise resolves with a built-in reponse object
* then() is used to get the response object
* json() method is used to parse the data because the response object's data is not in JSON format
* the second then() handler - gets the parsed json respresentation of the data

Example of using fetch(), using the Pokemon API:

```html
fetch('https://pokeapi.co/api/v2/pokemon/pikachu')
  .then(response => response.json())
  .then(data => console.log(data));
```

* In the Developer Tools console - the following can be seen:

![output](pokemonapi_pikachu.png)

* Errors should be checked for. An example of a request for a non-existent Pokemon
* Results in an error message

```html
fetch('https://pokeapi.co.api/v2/pokemon/emily')
       .then(data => {
        if(data.ok) {
            console.log("Successful" ) 
        } else {
            console.log("Server error")
        }
    })
    .catch(error => console.log("error"))
           
```

* In the developer tools console - an error is console.logged out

![output](pokemonerror.png)




