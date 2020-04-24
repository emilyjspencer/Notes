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
to start the server

* Go to localhost:3000

* **Generate a controller:**

```html
rails g controllername
```

or

```html
rails generate controllername
```

or create a controller yourself:

```html
class PagesController < Application Controller
end
```

* All controllers inherit from the Application Controller
* Methods in the Application Controller are available to all other controllers
* Routing determines which controller and its public method (action) to call.

**Routes** are defined in config/routes.rb
* Routes tell Rails where to find te code to handle incoming requests

* View routes by entering the command:

**rails routes**
or
**rails routes --expanded** (for a more legible format)
or
**rake routes**

* To view particular route, use grep e.g

```html
rails routes --expanded | grep delete
```

* grep is more generally used to search for a specific keyword in search results from a terminal command 

* Each route is a combination of am HTTp verb and a URL pattern - mapping to a combination of controller and action




**Controllers**

* Methods in the controllers are also known as actions

* **reviews#edit** = calls the ReviewsController and its public method(action) - edit

 * **Templates** are stored in app/views

*They are erb files - using embedded Ruby and have an extension of .html.erb

**application.html.erb** in views/layouts/application.html.erb is where everything gets rendered

**<% yield %>** - renders the requested template


### Styling with Rails 

* Code can be added to app/views/layouts/application.html.erb and it will show up in all views.
* Place code in body

### Using Bootstrap with Rails

**To use Bootstap with Rails, add the following gems to Gemfile:**

bootstrap-sass
sass-rails
jquery-rails

* As of Rails 5, Rails doesn't ship with jQuery, so the gem 'jquery-rails' needs to be added, due to frontend frameworks having a dependency on it.

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

**Semantic UI** can also be used 




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

**Migrations using Rails' default database - sqlite3:**

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
* index
* new
* edit
* show
* create
* update
* destroy


**timestamps** are fields that provide us with information about when posts etc where created and updated.

* tracked and maintained by Rails

* development.sqlite3 file is the database in the development environment

* The model is singular ---  User
* the table is plural --- users
* the controller is plural  --- UsersController 

* Models inherit from ApplicationRecord, which itself inherits from ActiveRecord::Base - so it can talk to the database 


### Authentication systems

**One-to-many association:**

* Primary key of one table is the foreign key of another table
Users - Posts
* One user can create many posts
* Each post has only one creator

**Many-to-many association:**

* One article can belong to several categories
* A category can have a list of different articles
article_id  vs  category_id

* These relationships can be expressed through an ERD - Entity Relationship Diagram


**Add columns to tables**

* This is done with a migration
* Generate a migration file by doing the following:

```html
rails generate migrations add_whatever_we_want_to_target_table
```

* This creates a migration file
* We can edit this file by manually adding in the information in the change method e.g.

```html
add_column :name_of_table_we're_adding_to, :column_to_add_name :type
```
e.g.

```html
add_column :posts, :user_id, :int
```


* The type might be int. It might be string etc
* Then run rake:db migrate
* The schema.rb file changes as a result

**Make an association between the two tables:**

* Update a model with an association e.g.

```html
has_many :things
```

* Update the other model in the relationship with:

```html
belongs_to :thing
```

**Validations** -  adding constraints

* In the relevant model:

```html
validates :thing, presence:true { minimum: 3, maximum: 50}
```

* We can test that the validations work in the Rails Console.

* **Regexes** can we used to test for the format of an email

e.g.

```html
validates: email, presence: true,
   uniqueness: { case_sensitiveL false },
   length: { maximum: 105 },
   format: { with: VALID_EMAIL_REGEX}
```

**Authentication**

**Devise** is a gem that can be used for authentication

**Bcrypt** is a gem used to hash passwords. (A hashed password can't be converted back into the original string, thus protecting against database attacks).

* rainbow tables attacks

**has_secure_password** method

* This is added to the (User) model

**password-digest** - needs to be added to the users table via a migration

```html
def change
  add column :users, :password_digest, :string
end 
```

* When we are in the Rails console, the passwords associated with each user will be hashed

**authenticate()** method - can be used to verify a user.
When the user logs in using other details in conjunction with their password - that information is checked against the password_digest_field using the authenticate() method







 

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
**Restful routes** 

* Restful routes provide mapping between HTTP verbs (patch put, delete, post, get) to 
Controll CRUD actions

* **REST** - is an architectural style for defining routes - a way of mapping HTTP routes and the CRUD functionalities 

* The prefixes listed can be used to generate a path to a particular page. 
* Take a prefix name and add _path to it. 
root_path - would generate a path to the root page

Adding **resources** to a routes.rb file

Adding for example  **resources :users**
gives us all of the rotues for users

If we want to omit a particular route because it or they have already been defined we can do the following:

```html
resources :users, except: [:new]
```

etc.

**ByeBug** - is a debugging tool for Rails.

* Used to pause the server. 
* Can be placed withint a Controller action. We can then enter:

```html
params[:review]
params[:user]
``` 

in the Rails console to see what has been entered.

* We can also gain visibility by printing out params:
```html
p params
```

* We can also use:

```html
params.inspect
```


* The following can also be added to views/layouts/application.html.erb, for useful debugging messages:

```html
<%= debug(params) if Rails.env.development? %>
```


**new_record?** method - can be used to check whether something is new or already exists, whether that
be a user, a review, a post etc
* Used with the ternary operator e.g.
```html
@review.new_record? ? "Create review" : "Edit review"
```
**pluralize** - a helper method - from the TextHelper module - provides methods for filtering and formatting strings. 
They extend the Action View, making them callable within templates.

**Pagination**

* Pagination limits the number of posts/reviews etc that are showed on a page at any one time

**will-paginate** if a pagination library, whose gem can be added

**patch** - analogous to update of CRUD

**Rails console** - like irb. Allows us to play with db data e.g. user = User.find_by(email: "bob@example.com")

**Model-backed forms**

**Modelless forms**

**Flash messages**

* **Flash** is a helper method that behaves in a similar way to a Ruby hash.
Flash has methods such as: **any? keys? each**
Flash messages aren't automatically shown - they have to be **rendered** in views

```html
<% flash.each do |type, msg| %>
  <div class="alert alert-info">
    <%= msg %>
  </div>
<% end %>
``` 

or similar needs to be added.
The alert alert-info Bootstrap class can be used to improve the appearance of flash messages

* Flash persists for **one full HTTP request-response cycle**

* In the case of a **redirect** - the flash message appears **after** the redirect has taken place
Therefore, when flash messages are used with **redirect**, it suffices to use **flash[:notice]** or **flash[:alert]**
* However, if there is **no redirect** i.e in the case of rendering a template - flash.now needs to be used.
* If flash[:notice] or flash[:alert] was used when rendering, the flash message would remain and when a new HTTP request takes place - the same flash message would appear again.
Therefore - we need to use flash.now in the case of a render

flash[:notice]

flash[:success]

flash.now

**Sessions**

* Apps have a session for each user in which small amounts of info can be stored e.g. username, password, and which is persisted across requests

* The session is only available in the controller and the view

* Sessions enable an app to maintain a user-specific state

* The session object can be used to store information e.g. about a user who we want to track
e.g. set the session user_id to be equal to the authenticated user

* All session stores use a cookies to store a unique id for each session

* Cookie data is encrypted an cryptographically signed to make it tamper-proof and its contents are unreadable


**Filters**

* **Filters** are methods that are run **before**, **after**, or **around** a controller action.

* Filters added to the ApplicationController will be inherited by all other controllers since all controllers inherit from the ApplicationController

* **before_action** is a filter - more specifically - it is a 'before' filter
This particular 'before' filter requires that a user be logged in for an action to be run
So, a before_action added to the ApplicationController like this:

```html
class ApplicationController < ActionController::Base
  before_action :require_login
 
  private
 
  def require_user
    if logged_in?
      flash[:danger] = "You must be logged in to perform that action"
      redirect_to root_path
    end
  end
end
```

will make everything in the application require the user to be logged in.

* before_actions work in order, so it is important to list the before actions in the order that you want them to be executed 

* Another example of before_action

```html
before_action :require_user, except: [:index, :show]
```

all actions except the index and show actions require a user to be logged in

**skip_before_action:**  - skip_before_actioin can be used to prevent filters from running before particular actions

**memoization** 

**strong parameters**

* By default, Active Record models distrust params - so we have to explicitly state which params we want to permit. Done in the relevant controller 

```html
params.permit :username, :login
```

etc.

**toggle¬** - is a method that can be used to switch a column value from false to true or true to false

**Active Storage**


**Turbo Links**























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


**SQL Injection** - web hacking technique










   


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

<hr>


**Node.js**




**Express**





**Big O Notation**




**Searching Algorithms**



**Binary Trees**



**Graph Traversal**



**Hash Tables**



**Bubble Sort**



**Merge Sort**




