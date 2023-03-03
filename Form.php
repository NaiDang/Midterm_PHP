<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Form</title>
</head>
<body>
<div class="text">
      <h1>Sign In</h1>
<?php
function validateSignUpForm() {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $workEmail = $_POST['workEmail'];
    $password = $_POST['password'];
    $errors = array();
    
    // Validate first name
    if (empty($firstName)) {
      $errors[] = "Bạn chưa điền firstName";
    }
    
    // Validate last name
    if (empty($lastName)) {
      $errors[] = "Bạn chưa điền lastName";
    }
    
    // Validate work email
    if (empty($workEmail) || !filter_var($workEmail, FILTER_VALIDATE_EMAIL)) {
      $errors[] = "Email bắt buộc và phải là một địa chỉ email hợp lệ.";
    }
    
    // Validate password
    if (empty($password) || strlen($password) < 8) {
      $errors[] = "Mật khẩu bắt buộc phải dài ít nhất 8 ký tự";
    }
    
    // Display errors if any
    if (!empty($errors)) {
      echo "<div style='color: red;'>Hãy sửa các lỗi sau:</div>";
      echo "<ul>";
      foreach ($errors as $error) {
        echo "<li>$error</li>";
      }
      echo "</ul>";
    } else {
      // Show tất cả dữ liệu nếu không có lỗi gì
      echo "<div style='color: green;'>Xin chúc mừng, bạn đã đăng ký thành công!</div>";
      echo "<ul>";
      echo "<li>First name: $firstName</li>";
      echo "<li>Last name: $lastName</li>";
      echo "<li>Work email: $workEmail</li>";
      echo "<li>Password: $password</li>";
      echo "</ul>";
    }
  }
  ?>
  
  <!-- Sign Up form -->
  <form class="formsignup" method="post">
  
    <input class ="input_email" type="email" name="workEmail" placeholder="Work Email"><br>
    <div class="input_container">
        <input class ="input_FN" type="text" name="firstName" placeholder="First Name"><br>
        <input class ="input_LN" type="text" name="lastName" placeholder="Last Name"><br>
    </div>
    <input class ="input_passwork"type="text" value="" name="password" placeholder="Password"><br>
    

    <div class="btn">
          <button  class="btn_signin" name="signup" type="submit">Sign Up</button>
    </div>
  </form>
  
  <!-- Validate form on submit -->
  <?php
  if (isset($_POST['signup'])) {
    validateSignUpForm();
  }
  ?>
</body>
</html>