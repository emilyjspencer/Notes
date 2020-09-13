# PHP

* Server-side technology
* Provides the underlying code for many content management systems i.e. WordPress
* Provides the underlying code for many ecommerce sites including WooCommerce and Magento
* PHP frameworks include Laravel, Symphony and CakePHP
* PHP often used to create dynamic web pages
* PHP files have the file extension .php
* PHP can work inline with HTML to create dynamic behaviour by using the following tags:
```
<?php ................... ?>
```
<?php is the start
?>  is the end
```
<h1>I am an H1</h1>
<?php echo "<p>This is interpreted by PHP and converted to HTML</p>";?>
```

* echo is used to output text
* When PHP is sent from the back-end to the front-end - it is received as HTML and 
displayed in the browser
* PHP's flexibility enables it to be executed from the terminal

### Writing back-end code with PHP

When writing a PHP script file, the <?php  tag still need to be used, but the closing tag is no longer required.

For example, if the following code were placed in playing.php:
```
<?php
echo "I'm learning PHP!!!";
#=> I'm learning PHP!!!
```

