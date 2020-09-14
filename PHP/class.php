


<!DOCTYPE html>
<html>
<body>

<?php
class Person {

  public $name;
  public $age;

  
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_age($age) {
      $this->age = $age;
  }
  function get_age() {
      return $this->age;
  }
  

}

$man = new Person();
$woman = new Person();
$man->set_name('Bob');
$woman->set_name('Mary');

echo $man->get_name();
echo "<br>";
echo $woman->get_name();
?>
 
</body>
</html>