# Notes

### Node and Express

* **Node** is a open source server environment
* Uses JS on the server

* **Express** is a Node framework which helps to make the process of building a server, easier.
* It can be built in pure Node.js, but Express speeds this process up.
* It is currently the most popular Node wed development framework and can be described as a lightweight, unopinionated framework, similar to Sinatra, as opposed to Rails - which is extremely opinionated and very much a heavyweight framework.
* Lightweight frameworks leave much of the work up to the developer while heavyweight frameworks, especially if scaffolds and generators are used  - in the case of Rails - can do much of the work for you.
* Hence the reason why at Makers, we are introduced to Sinatra, before moving on to Rails

**Installing Node:**
```html
npm install node
```

**Installing Express**
```html
npm install express --save
```

* **To create a server**

Set up project
```html
npm init
```

* This creates a package.json file which holds some basic information about the application 
as well as metadata about the app
* It also manages the dependencies of the application

**Create a server.js file**
* Require the express library
```html
const express = require(‘express’);
```

* Initialize the server by calling the express() function
- This creates an instance of an Express application
```html
const app = express();
```

* Start listening for potential requests by setting a port for the server to listen to
and utilizing the built-in method **listen()**
* The **listen()** method takes two args
1. The port
2. Callback function telling it what to do once the server is running

What the whole server.js file might look like before adding routes etc

```html
const express = require('express');
const app = express();

app.listen(3000, function () {
    console.log('Server is listening on port 3000. Ready to accept requests!');
});
```

The port could also be defined in the following way:

```html
const port = process.env.PORT || "8000";
```

Start the server with the name of the file:

```html
node app.js
```

* Once the server has been built, it needs to be communicated with, via handler functions.
* Handler functions receive requests and handle them - hence the name
* The handler() function always takes **request and response objects** and sends the response back to the client along with some information

* The **get()** method is used to define a handler function in Express. 
* It takes two parameters: 
the **endpoint** at which to trigger an action 
the handler function that tells it exactly what to do. 
* This handler function/callback takes two parameters - req and res - which stand for request and result
* req and res are objects - 
* req - is an object that contains all of the information about the request that was made
* res - is an object that contains all the information about what the response will be


```html
app.get("/", function (req, res) {
    res.send("Create");
});
```

This tells the server to responsd with 'Create', when users try to access the home page

* The handler function uses the **send()** method to send a message back to the client
* This updates the response object with the message

```html
const express = require('express');
const app = express();

app.get("/", function (req, res) {
    res.send("Hi");
  });

app.listen(3000, function () {
    console.log('Server is listening on port 3000. Ready to accept requests!');
});
```

"Hi" will be printed on the homepage

#### Routing

Through the use of endpoints, the server can send different responses 
for different requests.

No hot-reloading by default. The server must be stopped and re-started after any changes.
However - nodemon can be used to enable hot-reloading

Install nodemon:
```html
npm i -g nodemon
```

Then, instead of running:
```html
node app.js
```

run:
```html
nodemon
```
* * /wildcard/asterix can be used in a route to match all incoming requests.

```html
app.get(“*”, function(req, res) {
  res.send("Page not found)
});
```

Consequently, the route containing the wildcard character must be placed at the end - after all other routes.
This is because the first route that matches a given route is the only route that will be run and the wildcard character matches all characters and therefore will override all of the other routes.

* Route parameters can be used to describe a pattern in a route
* Params is an object that contains all of the route parameters
* Adding a colon tells Express to not actually match character for character bto make it a pattern 

**Creating patterns:**

```html
app.get("/topic/:comments/:id/:name/", function(req, res) {
    console.log(req.params);
  res.send("Comment on Darcey Bussell")
});
```

In the browser - in the url enter:
```html
localhost:3000/dance/comments/10/darceybussell
```

The logged params will be: 
```html
{ topic: 'dance', id: '10', name: 'darceybussell'}
```

```html
{  'dance', id: '10', title: 'bussell' }
```


Put a colon in front to anything that we want the user or the application to be able to change
Adding a : in front makes it a variable

* Data can be passed in the query string, although it is clearly more common for developers to create views and send them back as a response, rendering these views using res.render()

### Creating views

* Templating engines can be used to pass data to the views 
* Just like with Sinatra, which ships with ERB - Embedded Ruby,
we can use templating engines such as Pug or EJS to create Express views.

To install pug:
```html
npm install pug
```

To install ejs:
```html
npm install ejs
```

**Using EJS**

* In the server file, the view engine has to be set to ejs:
```html
app.set('view engine', 'ejs');
```

* Ejs files have the file extension .ejs, just like .erb files (Sinatra)
* res.render() is used to load up an ejs view file/send a view to the user, as was done with the 'Find a Movie app'
and added to the routes: e.g.

Snippet from Find a Movie:

```html
res.render("movies", {data: movies})
```

* res.render() renders the views, in the same way that the erb() method is used in Sinara to render erb files/views

* It is good practice to make use of partials, so as to avoid repetition of code
* To utilize EJS partials, they have to be called in the files in which they are required.
* The include syntax is used to 'include' them in files:
```html
<% include FILENAME %>
```
 The path to the partial is relative to the current file.

* Loop over data using forEach()  e.g.
```html
<ul>
    <% songs.forEach(function(song) { %>
        <li><%= song.name %> - <%= song.artist %></li>
    <% }); %>
</ul>
```





