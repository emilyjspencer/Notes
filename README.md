# RAILS

# Notes

Create new rails app

rails new appname e.g.:

```html
rails new globalreads
```

* **Create a new rails app with a postgresql database:**

```html
rails new appname --database=postgresql
```

* Rails uses SQlite3 by default


* **Run app by typing:**

```html
rails s 
```

* Go to localhost:3000

* **Generate a controller:**

```html
rails g controller pages
```
or create a controller yourself:

```html
class PagesController < Application Controller
end
```

* All controllers inherit from the Application Controller
* Methods in the Application Controller are available to all other Controllers
* Routing determines which controller and its public method (action) to call.

**Routes** are defined in config/routes.rb

reviews#edit = call the ReviewsController and its public method(action) edit

**Templates** are stored in app/views
*They are erb files - using embedded Ruby and have an extension of .html.erb

**application.html.erb** in views/layouts/application.html.erb is where everything gets rendered

**<% yield %>** - renders the requested template

### Using Bootstrap with Rails

**To use Bootstap with Rails, add the following gems to Gemfile:**
bootstrap-sass
sass-rails
jquery-rails

run bundle install 

* Bootstrap JavaScript is dependent on jQuery, so to use jQuery with Rails, the jquery-rails gem must be added

Add the following to app/assets/stylesheets/application.css
```html
@import "bootstrap-sprockets";
@import "bootstrap";
```

* Change the extension of application.css to .scss so that we can make use of Sass features 

* **In App/Javascript/packs, add the following to the application.js file:**

```html
//= require jquery
//= require bootstrap-sprockets
```

* This requires BootStrap and jQuery

**Link for Bootstrap components:**
```html
https://getbootstrap.com/docs/3.3/components/
```

**Partials**

* Partials allow us to DRY up our code.
* It is a good idea to create a navigation partial
* Partials are denoted by _ at the beginning of the file name e.g. _navigation.html.erb
* To render a partial file - use the render() and give it the partial's path as the argument e.g.

```html

<%= render 'layouts/navigation' %>
<%= yield %>

```

* This allows us to render the nav bar in all views i.e. across all pages 


**Authentication**

* Authentication can be done using the devise gem

* Add devise gem to Gemfile:

```html
gem 'devise'
```
* Run **bundle install**
* run **rails generate devise:install**

* Devise can be used to generate models e.g.

```html
rails generate devise User
```
* Create database

rails db:create

* Create new tables
rails db:migrate

* It can also be done in the following way

sqlite3

* Generate a migration:

```html
rails g migration create_user
```

* This creates a migration file which can then be edited - add columns etc to it
* Running rails db:migrate then adds the columns to the table and change the schema.rb file



# Terms and commands

**#** - represents a method
**action** - a public method

* **rails routes**  - lists all of the available routes 

* The prefixes listed can be used to generate a path to a particular page. 
* Take a prefix name and add _path to it. 
root_path - would generate a path to the root page








<hr>
<hr>


# Databases

* A database forms the persistence layer
* Databases are made up of multiple tables.
* Some of these tables are linked - thus the name: relational databases

* Column names are called attributes
* Tables can be linked using a foreign-key (a column).
* An example of this could be a user_id column in a posts table, which makes the link
* between a particular user in  a users table.
* The id columns in the users table would be automatically generated.

* CRUD operations - create read update delete
* A query language is required to talk to the database for the application to perform CRUD operations.
* The most commonly used language is SQL.
* Database management systems that use SQL include:
PostGresSQL
Microsoft SQL Server
Oracle


**Active Record**

* Rails uses an ORM called Active Record to communicate between the rails code and the database
* ORM stands for Object Relational Mapper
* Using an ORM means that we don't have to construct SQL queries ourselves to perform operations with the database
* Ruby code gets translated into SQL queries
   


# DOM Manipulation

* The **DOM** is an API (Application Programming Interface)

* **APIs** allow you to use their built-in functions to make changes to the HTML document.
Using the DOM allows us to build web pages that change and react when the user does something

* When the HTML document runs in the browser, it becomes part of the DOM called the document object.

* The Dom's API structure is **hierarchical**.
The HTML elements within the document object are all connected to each other.
Any HTML element that is inside another is a **child element**.
The outer element is the **parent**

* JavaScript can be used to access, change, add or remove HTML elements
* The DOM is **case sensitive**

### DOM methods and properties

**Methods**

There are various methods that can be used, but these need to be called on the document.
Doing so tells the browser that we want to access the API.

**Selection methods:**

**getElementById()**
**getElementsByClassName()**
**getElementsByTagName()**
**getElementsByName()**

**Creating and adding methods:**

**createElement()** - makes a new element.
We can us JavaScript to assign the element to a variable and then use the innerHTML property to set 
the content of the new element

**appendChild()** - allows you to add a new HTML element to an existing HTML element

```html 
<script>
  var newDiv = document.createElement("div");
  newDiv.innerHTML = "hello";
  document.body.appendChild(newDiv);
</script>
```

**Deletion methods**

**removeChild()** - is used to remove child elements 

```html
document.getElementById("buttonone").removeChild(this);
```

* The **this** keyword refers to the HTML element that was used to call the function

**getAttribute()**

**setAttribute()**

**Properties**

**innerHTML** property can be used to access or change the content of an HTML element

```html
var showStar = document.getElementById("list");
alert(showStar.innerHTML);
```

**Node Methods**

**node.childNodes**
**node.firstChild**
**node.lastChild**
**node.parentNode**
**node.nextSibling**
**node.previousSibling**

**Local Storage**

* The **localStorage** API can be used to save information submitted.
localStorage allows you to save information in the browser even if the page is refreshed or closed.

* localStorage is a collection of functions.

* Tell the browser that you want to use localStorage by typng the localStorage keyword and giving a name
to the information you want to store

```html
localStorage.storageName = "stuff";
```

* To **remove** a piece of information from localStorage, set to an empty string:

```html
localStorage.storageName = "";
``` 
