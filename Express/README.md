# Notes

### Node and Express

* **Node** is a open source server environment
* Uses JS on the server

* **Express** is a Node framework which helps to make the process of building a server, easier.
* It can be built in pure Node.js, but Express speeds this process up.
* It is currently the most popular Node web development framework and can be described as a lightweight, unopinionated framework, similar to Sinatra, as opposed to Rails - which is extremely opinionated and very much a heavyweight framework.
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
* Adding a colon tells Express to not actually match character for character but to make it a pattern 


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

* Data can be passed in the query string, although it is clearly more common for developers to create views and send them back as a response, rendering these views using render() - which is called on an object - usually res.

```
app.get("/getname/:name", function(req, res) {
    const name = req.params.name;
    res.send("Your name is " + name)
    console.log(req)
});
```

```html
localhost:3000/getname/emily
```

outputs:

```html
Your name is emily
```

**Express.router**

* Express.router is a class that can be used to create route handlers
* An instance of the Router class is a complete middleware and routing system
* Created as modules and then 'required' into the main app.js

```html

const express = require('express');
const router = express.Router();

router.get('/', function (req, res) {
  res.send('Home page');
})

router.get('/songs', function (req, res) {
  res.send('Songs page');
})

module.exports = router;
```
* Above, routes for the module have been created.
* The Express application object is imported, an instance of the Router class is created and routes
are defined
* The module exports the Router object.

**Using the router module**

* To use the router module, it has to be required using the require() method
* The use() method then has to be called on the Express application instance,
to add the middleware handling pather, specifiying a URL path of    

```html
const song = require('./song.js');
// ...
app.use('/song', song);



### Creating views

* Templating engines can be used to pass data to the views 
* Just like with Sinatra, which ships with ERB - Embedded Ruby,
we can use templating engines such as Pug or EJS (stands for Embedded JavaScript) to create Express views.
At runtime, the template engine replaces variables in a template file with actual values - data from a database or information submitted by a user, and transforms the template into an HTML file, which is sent to the client.

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
* res.render() is used to load up an ejs view file/send a view to the user, as was done with the 'Find a Movie app' and added to the routes: e.g.

Snippet from Find a Movie:

```html
res.render("movies", {data: movies})
```

* render() renders the views, in the same way that the erb() method is used in Sinatra to render erb files/views

```html
app.get("/", function(req, res) {
    res.render("words.ejs")
    console.log(req)
});
```
Here the .ejs file words.ejs is rendered when the user goes to the route /

* As a result of setting the engine to be ejs, the file extension .ejs can be ommitted when passing the views to res.render() e.g. instead of
```html
res.render(name.ejs)
```

```html
res.render(name)
```

* The variables in the .ejs files need to be embedded in <%= %>
* Anything that is placed between the brackets is evaluated at JavaScript

**Passing data**

```html
app.get("/getname/:name", function(req, res) {
    const name = req.params.name;
    res.render("name.ejs", {getName: name})
    console.log(req)

});
```
The variable needs to be explicitly passed in the render method to the view, and then the name of this variable is referenced in the view - within the <%= %>

in name.ejs:
```html
<h1>Your name is <%= getName %></h1>
```
**Conditionals**

in name.ejs

```html
<h1>Your name is <%= getName %> </h1>

<% if(getName.toLowerCase === "emily"){ %>
    <p>Yes - lowercase!!!</p>
<% } else { %>
    <p>Why not lowercase???</p>
<%  } %>
```

If the user enters a lower case name - 'Yes - lowercase!!! is rendered', otherwise, 'Why not lowercase???' is rendered

NB <% %> are used rather than <%= %> for conditional content

**Styling**

* Best practice to use stylesheets rather than the <style> tags within the views
* Create views and link to them from the views using the <link> tags
* Save these stylesheets in the Public directory. This has to obviously be created by the developer and it can be named something else, but most commonly is called Public.

* In app.js add the following:
```html
app.use("/", express.static("Public"));
```
which tells the Express to serve the Public directory.


**Partials**

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



### Creating a fullstack application with Express

Example - using PostgreSQL 

Dependencies need to be installed:

cors - allows different domain locations to communicate with one another - e.g. having the server run on localhost:5000 and the frontend run on localhost:3000
pg - connects the database with the server in order to run some postgres queries

Installed using npm install


#### Middleware

The use of middleware is indicated by the use method e.g. app.use(.......) e.g. app.use(cors());


app.use(express.json()); - this gives the developer access to request.body and so that they can get json data

#### Database and relations creation

With fullstack Sinatra applications, instructions for database and table creation are stored in migration files in the db folder.
With Express, this information can be stored in database.sql
```html
CREATE DATABASE bookshelf;

CREATE TABLE books (
    book_id SERIAL PRIMARY KEY,
    description VARCHAR(255)
);
```

#### Configuration

Configuration information can be put in db.js, allowing the developer to connect the database with the server

```html
const Pool = require('pg').Pool;

const pool = new Pool({
    user: 'postgres',
    host: 'localhost',
    port: 5432,
    database: 'bookshelf'
})

module.exports = pool;
```
The following needs to be imported into the server file:

```html
const pool = require('./db');
```
Allows the developer to call the query() method on the pool object in order to insert SQL queries

#### Routing

An example of a post request

```html
app.post('/books', async (req, res) => {
    try {
        console.log(req.body);
        const { info } = req.body;
        const newBook = await pool.query("INSERT INTO books (title) VALUES($1) RETURNING *", [title]);

        res.json(newBooks.rows[0]);

    } catch (err) {
        console.log(err.message);
    }
    
})
```

#### Postman

Postman is a brilliant tool to use to test HTTP requests.

In Postman, click on Body - raw - JSON dropdown - JSON


