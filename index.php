<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
  // Retrieve the form data
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  // Validate the username and password
  if ($username == 'admin' && $password == 'secret') {
    // Redirect to the protected page
    header('Location: protected.php');
    exit;
  } else {
    $error = 'Invalid username or password';
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
  </head>
  <body>
    <?php if (isset($error)) { ?>
      <p style="color: red;"><?php echo $error; ?></p>
    <?php } ?>
    <form action="" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username">
      <br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password">
      <br>
      <input type="submit" name="submit" value="Login">
    </form>
  </body>
</html>