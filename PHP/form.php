<html>
<body>

<form action="index.php" method="post">
Username: <input type="text" name="username">
Password: <input type="text" name="password">
<input type="submit">Submit</input>
</form>

Welcome <?php echo $_POST["username"]; ?><br>
Your password is: <?php echo $_POST["password"]; ?>

</body>
</html>
