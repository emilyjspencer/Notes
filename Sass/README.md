# Sass - Syntactically Awesome Stylesheets

**Install Sass globally:**

```html
npm install -g sass
```

* **Sass** is a language extension of CSS.
* It is a preprocessor- it can extend the CSS language by taking code written in Sass**
**and convert it into basic CSS, allowing you to create variables, nest CSS rules into others,**
**import other Sass files, use mixins, and inheritance**



* There are two Sass syntaxes:

1. SCSS( Sassy CSS)
Files have the extension .scss

2. Sass 
Files have the extension .sass 

* **Sass Variables**

* **Declare Sass variables using $ :**

```html
$main-fonts: Arial, sans-serif;
$headings-color: green;
```

* **To use variables:**

h1 {
  font-family: $main-fonts;
  color: $headings-color;
}

* **Nest CSS using Sass:**

```html
nav {
  background-color: red;

  ul {
    list-style: none;

    li {
      display: inline-block;
    }
  }
}
```

* li is a child of ul and ul is a child of nav 

* **Sass Mixins**

**Mixins** are like functions for CSS - they are groups of CSS
declarations that can be reused throughout the style sheet

* **Declare** a mixin using the following:
**@mixin** followed by a custom name

```html
@mixin box-shadow
```

* **Call** a mixin using the following:
**@include directive e.g.

```html
div {
  @include box-shadow(0px, 0px, 4px, #fff);
}
```


**Sass partials**

* Partial Sass files can be created that contain bits of CSS that can be included in other Sass files. 
* Helps to modularize CSS and help keep things easier to maintain. 
* A partial is a Sass file named with a leading underscore  (just like with Rails). 
* The underscore indicates that the file is only a partial file and that it should not be generated into a CSS file. 
* Sass partials are used with the @use rule.