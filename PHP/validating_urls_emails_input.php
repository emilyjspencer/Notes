<!DOCTYPE HTML>  
<html>
<head>
  <title>Validating emails urls and input</title>
<style>
.required {color: red;}
</style>
</head>
<body>  

<?php

$name = $username = $email = $github = $comment = $gender = "";
$nameRequired = $emailRequired = $genderRequired = $githubRequired = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameRequired = "Name is required";
  } else {
    $name =  clean_input($_POST["name"]);
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameRequired = "Only letters and white space are permitted";
    } else {
        $username = clean_input($_POST["username"]);
    }
  }

  if (empty($_POST["email"])) {
    $emailRequired = "Email is required";
  } else {
    $email = clean_input($_POST["email"]);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailRequired = "Email is not valid";
    }
  }
    
  if (empty($_POST["github"])) {
    $github = "";
  } else {
    $github = clean_input($_POST["website"]);
    
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }    
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

function clean_input($input) {
  $input= trim($input);
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
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="required">* <?php echo $emailRequired;?></span>
  <br><br>
  GitHub: <input type="text" name="github">
  <span class="required"><?php echo $githubRequired;?></span>
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