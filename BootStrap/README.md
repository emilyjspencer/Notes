**Bootstrap**

* Add Bootstrap to a project: 

```html
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
```

* To ensure proper rendering and touch zooming, add the following <meta> tag inside the <head> element: 

```html
<meta name="viewport" content="width=device-width, initial-scale=1">
```

* Elements must enclosed in a container. 
Bootstrap 4 offers two classes:
* **.container**  provides a responsive fixed width container
* **.container-fluid** class provides a full width container, spanning the entire width of the viewport


* Make an image responsive by adding the **class "img-responsive"** to the image
* Centre an image by adding the **class "text-center"** to the image
* Create Bootstrap buttons - add the **btn and btn-default** classes to the button
* **btn-danger** - red - dangerous action
* **btn-success** - green - successful
* **btn-info** - light blue - optional actions
* **btn-primary** - darker blue - most important actions
* **BootStrap Grid** - made up of 12 columns

**Bootstrap 4 default settings:**
* **font-size:** 16px
* **line-height:**  1.5.
* **font-family:** "Helvetica Neue", Helvetica, Arial, sans-serif.

* All <p> elements have margin-top: 0 and margin-bottom: 1rem (16px)

**Bootstrap Headers**

* **2.5rem** 40px h1
* **2rem** 32px h2
* **1.75rem** 28px h3
* **1.5rem** 24px h4
* **1.25rem** 20px h5
* **1rem** 16px h6

**Bootstrap Displays**

* **Four classes:

* **.display-1**    biggest
* **.display-2**
* **.display-3**
* **.display-4**    smallest 

**<small>** tag - used to create smaller, lighter, secondary text in a heading 

**Bootstrap text colours**

**Classes to provide meaning through text:**
* **.text-muted** - grey
* **.text-primary**  - darker blue - important text
* **.text-success** - green
* **.text-info** - light blue - some information
* **.text-warning** - yellow   - warning 
* **.text-danger** - red - danger
* **.text-secondary** 
* **.text-white**
* **.text-dark**
* **.text-body** (default body color/often black) and .text-light:

**Bootstrap backgrounds**

* **.bg-primary**
* **.bg-success**
* **.bg-info**
* **.bg-warning**
* **.bg-danger**
* **.bg-secondary**
* **.bg-dark**
* **.bg-light**

**span** - allows you to put several elements on the same line 

**Add icons to pages by using Font Awesome**
**Add this link to the top of the html:**

```html
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
```


**Add a thumbs up icon to a button:**

```html
<button class="btn btn-black btn-primary"><i class="fas fa-thumbs-up"></i>Like</button>
```

**Add an info circle icon to a button:**

```html
<button class="btn btn-block btn-info"><i class="fas fa-info-circle"></i>Info</button>
```

**Add a bin icon to a button:**

```html
<button class="btn btn-block btn-danger"><i class="fas fa-trash"></i>Delete</button>
```

**Create a Bootstrap Well** to create visual depth:

```html
* **<div class="well></div>
```