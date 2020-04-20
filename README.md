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
* View routes by entering the command:

**rails routes**
or
**rails routes --expanded** (for a more legible format)

  

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

* Create new tables: 
**rake db:migrate**
or
**rails db:migrate**

* It can also be done in the following way

sqlite3

* Generate a migration:

```html
rails g migration create_user
```

* This creates a migration file which can then be edited - add columns etc to it
* Running rails db:migrate  or rake db:migrate then adds the columns to the table and change the schema.rb file

* To undo changes made by the last migration file that was run, use the following commandL

```html
rails db:rollback
```

* **Generate a new migration file** in order to make changes to a table:

```html
rails generate migration name_of_migration_file
```

**Validations** - adding constraints

* In the relevant model:

```html
validates :thing, presence:true { minimum: 3, maximum: 50}
```


**Scaffolding**

In practice, it's better not to use this, but scaffold can be used to generate code quickly e.g.

```html
rails generate scaffold Review title:string description: text
```

* **Scaffold generators** generate the following actions:
* indexxx
* new
* edit
* show
* create
* update
* destroy


**timestamps** are fields that provide us with information about when posts etc where created and updated.
* tracked and maintained by Rails

development.sqlite3 file is the database in the development environment

* The model is singular ---  User
* the table is plural --- users
* the controller is plural  --- UsersController 

* Models inherit from ApplicationRecord, which itself inherits from ActiveRecord::Base - so it can talk to the database 



Adding **resources** to a routes.rb file


**Authentication systems**

**One-to-many association:**

* Primary key of one table is the foreign key of another table
Users - Posts
* One user can create many posts
* Each post has only one creator

* This relationships can be expressed through an ERD - Entity Relationship Diagram




**Add columns to tables**

**Delete columns from tables**



**Deployment**

* Move sqlite gem into the following section in the Gemfile:
```html
group :development, :test  
```

**Heroku's** default database is **PostgreSQL** so we should use the pg gem
in production

Run the following before deployment :

```html
bundle install --without production
```

The local database and tables don't get pushed to production - only the migration files do
so, migrations need to be run

**Run the following to tell Heroku to run the migrations:**

```html
heroku run rails db:migrate
```

**Preview production application:**

```html
heroku open
```


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

* A database forms the **persistence layer**
* Databases are made up of multiple tables.
* Some of these tables are linked - thus the name: **relational databases**

* Column names are called attributes
* Tables can be linked using a **foreign-key** 
* An example of this could be a user_id column in a posts table, which makes the link
between a particular user in  a users table.
* The id columns in the users table would be automatically generated.

* **CRUD** operations - create read update delete
* A query language is required to talk to the database for the application to perform CRUD operations.
* The most commonly used language is SQL.
* Database management systems that use SQL include:
PostGreSQL
Microsoft SQL Server
Oracle


**Active Record**

* Rails uses an ORM called Active Record to communicate between the rails code and the database
* ORM stands for Object Relational Mapper
* Using an ORM means that we don't have to construct SQL queries ourselves to perform operations with the database
* Ruby code gets translated into SQL queries


# SQL

* SQL stands for Structured Query Language
* SQL is used to store, manipulate and retrieve data in a database
* Single quotes (' ') must be used with SQL
* SQL statements end with a ;

SQL can:
* execute queries against a database
* retrieve data from a database
* insert records in a database
* update records in a database
* delete records from a database
* create new databases
* create new tables in a database
* create stored procedures in a database
* create views in a database
* set permissions on tables, procedures, and views

**Relational Database Management Systems**

The data in RDBMS is stored in database objects called tables.
A table is a collection of related data entries and it consists of columns and rows.
A row is also called a record - which is a horizontal entity in a table

SQL keywords are **NOT** case sensitive

* **SELECT** - extracts data from a database
* **UPDATE** - updates data in a database
* **DELETE** - deletes data from a database
* **INSERT INTO** - inserts new data into a database
* **CREATE DATABASE** - creates a new database
* **ALTER DATABASE** - modifies a database
* **CREATE TABLE** - creates a new table
* **ALTER TABLE** - modifies a table
* **DROP TABLE** - deletes a table
* **CREATE INDEX** - creates an index (search key)
* **DROP INDEX** - deletes an index

**SELECT DISTINCT** - only shows one from all duplicate values

**WHERE** clause is used to filter records.
- Used to extract only those records that fulfill a specified condition.

```html
SELECT * FROM Customers
WHERE Country='Canada';
```

```html
SELECT * FROM Customers
WHERE City = 'Berlin';
```
* Operators used with WHERE clause: 

**BETWEEN**	Between a certain range	
**LIKE**	Search for a pattern	
**IN**	To specify multiple possible values for a column

**WHERE** can be used with AND, OR, and NOT
**AND** and **OR**  used to filter records based on more than one condition:

**AND** shows a record if all the conditions separated by AND are TRUE.
**OR** shows a record if any of the conditions separated by OR is TRUE.
**NOT** shows a record if the condition(s) is NOT TRUE.

**Use of AND**

```html
SELECT
 * FROM Customers
WHERE City = 'Berlin'
AND Item = 'Lamp';
```

**Use of OR**

```html
SELECT * FROM Customers
WHERE City = 'Paris'
OR City 'NYC';
```

**Use of NOT**

```html
SELECT * FROM Customers
WHERE NOT Country='Germany';
```

**ORDER BY**

**Order By** is used to sort results in asc/ desc order
**ASC** is the default
**DESC** to sort in descending order

```html
SELECT * FROM Customers
ORDER BY Country;
```

```html
SELECT * FROM Customers
ORDER BY Country DESC;
```
**Order by several columns**

```html
SELECT * FROM Customers
ORDER BY Country, Item;
```

**INSERT INTO** - to insert data into the database

```html
INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country)
VALUES ('Helen','Helen Byrne','Worple Road','Wimbledon','SW19','England');
```

**NULL**

* Insert a new record into a table without adding a value to the field by using NULL

**Using IS NULL**

```html
SELECT CustomerName, Item, Country
FROM Customers
WHERE Item IS NULL;
```

**Using IS NOT NULL**

```html
SELECT CustomerName, Item, Country
FROM Customers
WHERE Item IS NOT NULL;
```

**Edit records using UPDATE**

* Change the details of the customer in the table whose id is 5:

```html
UPDATE Customers
SET CustomerName = 'Emily', City= 'London'
WHERE CustomerID = 5;
```

**Edit multiple records using UPDATE and WHERE
* Sets the name of all Japanese-based customers to Ayako

```html
UPDATE Customers
SET CustomerName='Ayako'
WHERE Country='Japan';
```

**DELETE records from tables using the DELETE keyword**

**Delete ALL records:**

```html
DELETE FROM Customers;
```

**Delete specific records:**
* Delete the customer with name of Minnie Mouse

```html
DELETE FROM Customers WHERE CustomerName='Minnie Mouse';
```

**LIKE** operator

LIKE is used in a WHERE clause to search for a specified pattern in a column.

There are two wildcards often used in conjunction with the LIKE operator:

% - The percent sign represents zero, one, or multiple characters
_ - The underscore represents a single character













   


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


