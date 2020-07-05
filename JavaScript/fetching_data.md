# Fetching Data 

The most common way for frontend programmes to communicate with servers is through the HyperText Transfer Protocol.

The fetching of data can be achieved in various ways: 

* The Fetch API and the XMLHttpRequest interface allows for the fetching of resources and the making of HTTP requests.
* jQuery's $.ajax() function can be used to make requests.
* Axios

* Axios is a promise-based (just like Fetch) client HTTP API based on the XMLHttpRequest interface provided by browsers.
* It allows for the sending of asynchronous HTTP requests to REST endpoints and the performing of CRUD operations.
* It can be used with vanilla JavaScript or libraries such as React.
* Requests with Axios will default to 'get' if no method is specified

Making a post request with axios:
```html
axios({ 
    method: 'post',
    url: './greetings',
    data: {
        name: 'Mona',
        age: '20'
    }
})
```

or 
```html
axios.post('/greetings', {
    name: 'Mona',
    age: '20'
});
```

Once an HTTP request is made, Axios returns a promise that is either fulfilled or rejected, depending on the response from the backend service.
To handle the results, use the then() method
```html
axios.post('/greetings', { 
    name: 'Mona',
    age; '20'
})
  .then((response) => {
      console.log(response);
  }, (error) => {
      console.log(error);
  });
  ```
If the promise is fulfilled, the first argument of then() will be called
If the promise is rejected, the second argument will be called. 
The fulfillment value is a response object consisting of :
* data
* status e.g. 200
* statusText
* headers 
* request 

Axios can also make mutliple requests simultaneously by passing an array of arguments to the axios.all() method
This returns a single promise object that resolves only when all arguments passed as an array have resolved.

```html

axios.all([
  axios.get('https://iamatest.com/testing'),
  axios.get('https://iamalsoatest.com/testing')
])
.then(response -> {
    console.log('Data fetched 1', response[0].test),
    console.log('Data fetched 2', response[1].test)
});
```

Here, two requests are made to this fake aPI.
The values of the test property of each response is console.logged.

Axios also provides the spread() method to assign the properties of the response array to separate variables. 

```html
axios.all([
  axios.get('https://api.animallover.com/animals'),
  axios.get('https://api.animallover.com/animals/kangaroo')
  ])
  .then(axios.spread((animal1, animal2) =. {
      console.log('Data fetched 1: ', animal1.data.test);
      console.log('data fetched2: ', animal2.data.test);
  }));
  ```

Axios also provides the means to protect against XSRD (cross-site request forgery), by enabling the ability to embed authentication data when making requests.
This allows the server to identify requests from unauthorized locations. 

```html
const explore = {
  method: 'post',
  url: '/testing',
  xsrfCookieName: 'XSRF-TOKEN',
  xsrfHeaderName: 'X-XSRF-TOKEN',
};

// send the request
axios(options);
```

### Using Axios with async......await

For a function to use await, the function itself has to be wrapped as an async function

async makeGetRequest = () => {
    let result = await axios.get('http://idontknow.com/carebear');

    let data = result.data
    console.log(data);
}

makeGetRequest();
```