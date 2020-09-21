<!DOCTYPE html>
<html>
<head>
  <title>Submitting Forms</title>
</head>
<body>

<?php

$name = $username = $email = $github = $gender = $comment = '';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = clean_data($_POST["name"]);
    $username = clean_data($_POST["username"]);
    $email = clean_data($_POST["email"]);
    $github = clean_data($_POST["github"]);
    $comment = clean_data($_POST["comment"]);
    $gender = clean_data($_POST["gender"]);

}

function clean_data($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  Username: <input type="text" name="username">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  GitHub <input type="text" name="github">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="70"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h3>You entered</h3>";
echo $name;
echo "<br>";
echo $username;
echo "<br";
echo $email;
echo "<br>";
echo $github;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>

