<?php
session_start();
if (isset($_POST['submit'])) {
  // $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  // $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

  $username = filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS);
  $password = $_POST['password'];
  if($username == 'temidayo' && $password == 'password'){
    $_SESSION['username'] = $username;
    header('Location: /extras/dashboard.php');
  } else {
    echo "Incorrect login";
  }

}
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
  <div>
    <label for="username">Username: </label>
    <input type="text" name="username">
  </div>
  <div>
    <label for="password">Password: </label>
    <input type="text" name="password">
  </div>
  <input type="submit" value="Submit" name="submit">
</form>
