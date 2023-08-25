<?php include 'inc/header.php'; ?>
<?php
$name = $email = $body = '';
$nameErr = $emailErr = $bodyErr = '';

function validateField($field)
{
  $err = '';
  $value = '';
  if (empty($_POST[$field])) {
    $err = ucwords($field) . ' is required';
  } else {
    $value = filter_input(INPUT_POST, $field, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  return [$value, $err];
}
// Form submit
if (isset($_POST['submit'])) {
  [$name, $nameErr] = validateField('name');
  [$email, $emailErr] = validateField('email');
  [$body, $bodyErr] = validateField('body');
  if(empty($nameErr) && empty($emailErr) && empty($bodyErr)){
    $sql = "INSERT INTO feedback (Name, email, body) VALUES('$name', '$email', '$body');";
    if(mysqli_query($conn, $sql)){
      // successfully done
      header('Location: feedback.php');
    } else {
      // error
      echo 'Error '. mysqli_error($conn);
    }
  }
}

?>
<img src="img/logo.png" class="w-25 mb-3" alt="">
<h2>Feedback</h2>
<p class="lead text-center">Leave feedback for Traversy Media</p>
<form action="" class="mt-4 w-75" method="POST" action="<?php echo htmlspecialchars($_SERVER['php_srelf']) ?>">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control <?php echo $nameErr ? 'is-invalid' : null ?>" id="name" name="name" placeholder="Enter your name">
    <div class="invalid-feedback">
      <?php echo $nameErr ?>
    </div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control <?php echo $emailErr ? 'is-invalid' : null ?>" id="email" name="email" placeholder="Enter your email">
    <div class="invalid-feedback">
      <?php echo $emailErr ?>
    </div>
  </div>
  <div class="mb-3">
    <label for="body" class="form-label">Feedback</label>
    <textarea class="form-control <?php echo $bodyErr ? 'is-invalid' : null ?>" id="body" name="body" placeholder="Enter your feedback"></textarea>
    <div class="invalid-feedback">
      <?php echo $bodyErr ?>
    </div>
  </div>
  <div class="mb-3">
    <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
  </div>
</form>
<?php require 'inc/footer.php'; ?>
