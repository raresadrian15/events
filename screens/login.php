<?php
    include('../login/login.php');
    if(isset($_SESSION['login_user'])){
        header("location: ../index.php");

    }
?>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script src="../js/lib.js"></script>
</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="register-form" action="../register/register.php" method="post">
      <input type="text" name="username" placeholder="name"/>
      <input type="password" name="password" placeholder="password"/>
      <input type="text" name="email" placeholder="email address"/>
      <button name="register">create</button>
      <p class="message">Already registered? <a href="login.php">Sign In</a></p>
    </form>
    <form class="login-form" action="" method="post">
      <input type="text" name="username"placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <button name="login">login</button>
      <p class="message">Not registered? <a href="#" onclick='return registerNow();'>Create an account</a></p>
      <p><?php echo $error; ?></p>
    </form>
  </div>
</div>

</body>

</html>