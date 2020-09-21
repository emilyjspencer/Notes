<!DOCTYPE HTML>  
<html>
<head>
  <title>Adding required fields to forms</title>
<style>
.required {color: red;}
</style>
</head>
<body>  

<?php

$name = $username = $email = $gender = $comment = $github = "";

$nameRequired =  $usernameRequired = $emailRequired = $genderRequired = $githubRequired = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameRequired = "Name is required";
  } else {
    $name = clean_input($_POST["name"]);
  }

  if (empty($_POST["username"])) {
      $usernameRequired = "Username is required";
  } else {
      $username = clean_input($_POST["username"]);
  }
  
  if (empty($_POST["email"])) {
    $emailRequired = "Email is required";
  } else {
    $email = clean_input($_POST["email"]);
  }
    
  if (empty($_POST["github"])) {
    $github = "";
  } else {
    $github= clean_input($_POST["github"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = clean_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderRequired = "Gender is required";
  } else {
    $gender = clean_input($_POST["gender"]);
  }
}

function clean_data($input) {
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  return $input;
}
?>


<p><span class="required">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="required">* <?php echo $nameRequired;?></span>
  <br><br>
  Username: <input type="text" name="username">
  <span class="required">* <?php echo $usernameRequired;?></span>
  E-mail: <input type="text" name="email">
  <span class="required">* <?php echo $emailErr;?></span>
  <br><br>
  Github <input type="text" name="github">
  <span class="required">* <?php echo $githubRequired;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="50"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="required">* <?php echo $genderRequired;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>You entered:</h2>";
echo $name;
echo "<br>";
echo $username;
echo "<br>";
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

