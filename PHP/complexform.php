<!DOCTYPE html>
<html>
<head>
  <title>Form Validation</title>
</head>
<body>

<form action="index.php" method="post">
Name: <input type="text" name"name">
Username: <input type="text" name="username">
E-mail: <input type="text" name="email">
GitHub: <input type="text" name="github">
Comment: <textarea name="comment" rows="5" cols="40"></textarea>
Gender:
<input type="radio" name="gender" value="female">Female 
<input type="radio" name="gender" value="male">Male 
<input type="radio" name="gender" value="other">other
</form>

Welcome <?php echo $_POST["name"]; ?><br>
Your username is: <?php echo $_POST["username"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
Your GitHub profile is: <?php echo $_POST["github"]; ?><br>
You added: <?php echo $_POSt["comment"]; ?><br>

</body>
</html>