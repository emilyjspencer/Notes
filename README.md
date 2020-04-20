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

* Create a folder in assets called javascripts if it isn't present
* Create a file in this folder if it isn't present - application.js
* Add the following:
```html
//= require jquery
//= require bootstrap-sprockets
```

* This requires BootStrap and jQuery

**Partials**

* Partials allow us to DRY up our code.
* It is a good idea to create a navigation partial
* Partials are denoted by _ at the beginning of the file name e.g. _navigation.html.erb




# Terms

**#** - represents a method
**action** - a public method

