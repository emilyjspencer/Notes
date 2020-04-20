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


