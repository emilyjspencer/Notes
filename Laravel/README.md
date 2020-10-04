### Controllers

* Create a controller:
```
php artisan make:controller controllerName
```

* In web.php - add the controller at the top of the file e.g.

use App\Http\Controllers\BooksController;


near the bottom:
```
Route::get('/books/{book}', [BooksController::class, 'show']);
```

* All controllers should extend the BaseController class - which is also where we might
put shared controller logic
* The Base class provides some convenience methods such as the middleware method

### Models

Laravel's ORM - Eloquent - provides an ActiveRecord implementation for working with the database.
* Just as with Rails, each database table has a corresponding Model which is used to interact
with the table.
* Same naming convention as Rails - use singular for the name of a Model
* Models allow the developer to query the data in the database and add new data etc
* Eloquent models provide the same API for performing SQL queries
* All Eloquent models extend
```
Illuminate\Database\Eloquent\Model
```
* Store relevant business logic in the models


* To create a model:

```
php artisan make:model Todo
```

* The model must also be pulled in to the relevant Controller

e.g.

PostsController:

```
<?php 

namespace App\Http\Controllers;

use App\Models\Post;
```

Connect to the DB (example):

```
$post = Post::where('slug', $slug)->first();
```

### Migrations

Migrations allow you to define the structure of a table or make changes to an existing one.
* Can be considered as version control for the database as we can revert changes with the following command:
```
php artisan migrate:rollback
```

When making a change:
1:
```
php artisan migrate:rollback
```
2:
```
php artisan migrate
```

* To actually make a migration:
```
php artisan migrate
```

* To revert all changes:
```
php artisan migrate:reset
```

* Migration files live in the database folder and migrations subfolder
* Laravel comes with some migration files 'out of the box'
* The migration files will always contain an up() method and a down()
 method
* up() - for actually running the migrations/creating the table
* down() - for rolling back or undoing the migration or dropping the table


Eloquent's timestamp property is, by default:
```
 public $timestamps = true;
```
 
* Upon every saving or update or a record, Eloquent internally tries to inject the time to columns created_at and updated_at.
* The following has to be added to the Eloquent model:
``` 
public $timestamps = false;
```


### Creating a model, controller and migration simulataneously

* Just a Rails provides generators to generate a model, controller and migration,
Laravel offers us the ability to generate a model, controller and migration with the following command:
```
php artisan make:model ModelName -mc
```

### Laravel's REPL

Just as Rails offers its own REPL - the Rails console, where we can manually add data and more generally manipulate data in the databases, Laravel also provides a REPL  - **tinker**

* This can be opened with the following command:
```
php artisan tinker
```

Then new records can be created:

```
$todo = new App\Models\ToDo;
$todo->description = 'Go for a run';
$todo->save();

This persists the data to the database

To return all data:
```
App\Models\ToDo::all();
```

To return the first item:
```
App\Models\ToDo::first();
```
```


### Views

* Contain the HTML part of the codebase

A good structure for the views folder would be as follows:

views
  -- layouts
    - default.blade.php
    - sidebar.blade.php
  --pages
    - pageOne.blade.php
    - pageTwo.blade.php
    - pageThree.blade.php
    - pageFour.blade.php
    - pageFive.blade.php
  --includes
    head.blade.php
    header.blade.php
    footer.blade.php
    sidebar.blade.php


views/layouts/default.blade.php would have the general layout/structure
views/layout/sidebar.blade.php would contain the layout of the sidebar
views/pages/pageOne would contain the content specific to page one
(the same applies for all pages)
views/head.blade.php
views/header.blade.php - header
views/footer.blade.php - footer
views/sidebar.blade.php - sidebar

@includes is used to bring in code snippets
```
<header>
  @include('includes.header)
</header>

@yield is used to bring in content from invidual pages

@extends is used to extend the layout to individual pages

```
@extends('layouts.default')
@section('content')
  Content goes here
@stop or     @endsection

@section and @endsection are directives - they comes from Larave's Blade templating engine

@section and @endsection go in the individual page files

@yield goes in the layout file - layout.blade.php or layouts/default.blade.php and different things
can be yielded if needs be

A section needs to be created that corresponds to what is being yielded

* The request() helper function can be used to make selected menu items active/highlighted:

```
(request()-> is('/')) ? 'current_page_item' : '' }}
```


### Routing

* Routes are defined in routes/web.php
* Use Route::get   Route::post etc
* Closures are provided to handle the routes logic
* Define Controllers towards the bottom of the web.php file

### Database connection

With Windows:

* Enter mysql -u root
* Start MYSQL in XAMPP
* Open TablePlus
* Create a new MySQL connection
* Create a new table
* Add columns
* Add rows
* Save with ctrl + s
* Disconnect if working with one command line by running 
```
\q
```



DB connection in Controller 
NB CONTROLLERS SHOULD BE SKINNY - SO THIS LOGIC SHOULDN'T ACTUALLY BE HERE.
DATABASE CONNECTION LOGIC SHOULD BE PLACED IN THE MODELS
e.g. think Eloquent

* This is used in order to access the DB class from the global namespace route
* An example connection:

```
$posts = \DB::table('posts')->where('slug', $slug)->first();

return view('post', [
    'post' => $post
])

The correct attributes must be echoed out in the respective views

```

The following is known as the query builder - an API for constructing safe and secure SQL queries:
```
$posts = \DB::table('posts')->where('slug', $slug)->first();
```





### Terms

* slug - the URI you use to access the post

* dd() - dump and die - is used to inspect variables and stop the execution

```
php artisan migrate:fresh
```

Drops all of the existing tables without rolling back 
The 'fresh' keyword runs the migrations.
(This fixed an issue I had when I tried to create the articles table)

In the models, other methods can be called to show a certain number of records per page:
```
$article = App\Models\Article::take(2)->get();
```
shows two articles all together
```
$article = App\Models\Article::paginate(2);
```

shows two articles per page

To show the most recent article first, use the latest() method :

```
$article = App\Models\Article::latest()->get();
```

### The seven Controller actions:

* index - renders a list of resources
* show - shows a particular resource
* create - shows a view to create a new resource e.g. a page with a form
* store - persists the new resource that has just been created
* edit - shows a view to edit an existing resource
* update - persists the edited resource
* destroy - delets a resource

### Using REST

Verbs shouldn't be put into the URI e.g.

this shouldn't happen:
```
/posts/:id/edit
```
or
```/users/:id/update
```

Instead, intent should be communicated by using the HTTP verbs
* GET
* PUT
* POST
* PATCH
* DELETE

GET /posts - get all posts
GET /posts/:id - get a particular post
POST /posts - create a new post
PUT /posts:id - update/edit a particular post
DELETE /posts/:id - delete a particular post

Any operation can be handled by combining the HTTP verbs with a URI structure

There is a sort of mapping from the HTTP verbs to the CRUD actions

GET /posts - view all posts
Get /posts/2 - view the post with an id of 2
PUT /posts/2 - update the post with an id of 2 (the act of updating)
DELETE /posts/2 - delete the post with an id of 2
GET /posts/2/edit - display a form to edit a post with an id of 2
GET /posts/create - display a form to create a new posts
POST /posts - when the form to create a new posts is submitted - a POST request is made

More specific actions e.g. if a user wanted to subscribe to blog posts, you can't do the following:
```
GET /posts/subscribe
```

but could do:
```
POST /posts/subscriptions
```
POST /posts/subscriptions => PostSubscriptionsController@store


### The order of the routes in routes/web.php matter

e.g.

```
Route::get('/posts/{post}', [PostsController::class, 'show']);

Route::get('/articles', [ArticlesController::class, 'index']);

Route::get('/articles', [ArticlesController::class, 'update']);

Route::get('/articles/create', [ArticlesController::class, 'create']);

Route::get('/articles/{article}', [ArticlesController::class, 'show']);
```

This is fine as the route with the wildcard - /articles{article}
is at the bottom.
If it weren't however, it would take precedence over any routes that are defined below it and thus,
an error would be thrown.




### Generate a Controller with all seven actions:

Use the following command to generate a Controller with its seven RESTful actions:

```
php artisan make:controller ControllerName -r
```

Use the following command to generate a Controll with its seven RESTful actions and its associated model:
```
php artisan make:controller ControllerName -r -m ModelName
```

e.g.
php artisan make:controller BooksController -r -m Book