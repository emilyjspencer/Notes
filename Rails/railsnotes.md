# RAILS

# Notes

Create new rails app

rails new app_name e.g.:

```html
rails new globalreads
```

* **Create a new rails app with a postgresql database:**

```html
rails new app-name --database=postgresql
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
rails g controller_name
```

or

```html
rails generate controller_name
```

or create a controller yourself:

```html
class PagesController < Application Controller
end
```

* All controllers inherit from the **Application Controller**
* Methods in the Application Controller are available to **all** other controllers
* Routing determines which controller and its public method (action) to call.

**Routes** are defined in **config/routes.rb**

* Routes tell Rails where to find te code to handle incoming requests
* View routes by entering the command:

```html
rails routes
```
or:
```html
rails routes --expanded (for a more legible format)
```
or
```html
rake routes
```

* To view particular route, use grep e.g

```html
rails routes --expanded | grep delete
```

* **grep** is more generally used to search for a specific keyword in search results from a terminal command 

* Each route is a combination of am HTTP verb and a URL pattern - mapping to a combination of controller and action




**Controllers**

* Methods in the controllers are also known as **actions**

* **reviews#edit** = calls the ReviewsController and its public method(action) - edit

 * **Templates** are stored in app/views

* They are erb files - using embedded Ruby and have an extension of .html.erb

**application.html.erb** in views/layouts/application.html.erb is where everything gets rendered

**<% yield %>** - renders the requested template


### Styling with Rails 

* Code can be added to app/views/layouts/application.html.erb and it will show up in all views.
* Place code in body

### Using Bootstrap with Rails

**To use Bootstap with Rails, add the following gems to Gemfile:**

* bootstrap-sass
* sass-rails
* jquery-rails

* As of Rails 5, Rails doesn't ship with jQuery, so the gem 'jquery-rails' needs to be added, due to frontend frameworks having a dependency on it.

run bundle install 

* Bootstrap JavaScript is dependent on jQuery, so to use jQuery with Rails, the jquery-rails gem must be added

Add the following to app/assets/stylesheets/application.css:

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

**Semantic UI** can also be used for styling purposes




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

**hirb gem** - can be used to enable a tabular view in the console - makes it easier to read

**seeds.rb file** - in the db folder, can be used to populate a database with the initial data
required e.g. creating users with usernames, email addresses and passwords

**skip_before_action:**  - skip_before_action can be used to prevent filters from running before particular actions

**Security**

* Passwords should not be stored in databases, unencrypted. 
* To store passwords, we store their hashes, which is a number created by feeding a string
to a hash function.
* Hashed passwords are stored in the password_digest columns of the database
* Bcrypt is a cyptographic hash
* Salting is an additional step, which adds an extra value to the beginning of the password,
before it is hashed, thereby helping to protect against attack methods such as rainbow tables.

**has_secure_password** - is a method 
- adds two fields to the model - password and password-confirmation
- adds some before_save hooks to your model - which compare the password and password_confirmation. IF they match - the password_digest column is updated

**Action Cable** - integrates WebSockets with the rest of the Rails application
* Allows for real-time features 
* The client of a Websocket connection is called a consumer
* If the user has the browser window open, they are said to be subscribed to the channel
* The connection between the subscribed and the channel is called a subscription
* The client who is subscribed to the channel is called a subscriber
* For every WebSocket accepted by the server, a connection object is instantiated



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

**Conventions**

* Rails is built on convention
One convention is that controller actions should be written in a certain order:
* index
* show
* new
* edit
* create
* update
* delete

(This is the order in which actions are generated by the generator)








