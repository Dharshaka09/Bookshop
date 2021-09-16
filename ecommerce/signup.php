<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }

  if(isset($_SESSION['captcha'])){
    $now = time();
    if($now >= $_SESSION['captcha']){
      unset($_SESSION['captcha']);
    }
  }

?>
<?php include 'includes/header1.php'; ?>
<body>
<?php include 'includes/navbar1.php' ?>


<div class="register-box">
  	<?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }

      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
  	

    <section id="form">
        <!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">

                </div>
                <div class=" col-sm-4">
                    <div class="login-form ">
                        <!--login form-->
                        <h2>Creat new account</h2>
                        <form action="register.php" method="POST">
                        <input type="text" class="form-control" name="firstname" placeholder="Firstname" value="<?php echo (isset($_SESSION['firstname'])) ? $_SESSION['firstname'] : '' ?>" required>
                        <input type="text" class="form-control" name="lastname" placeholder="Lastname" value="<?php echo (isset($_SESSION['lastname'])) ? $_SESSION['lastname'] : '' ?>" required>
                        <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : '' ?>" required>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        <input type="password" class="form-control" name="repassword" placeholder="Retype password" required>
                            <button type="submit" class="btn btn-default " name="signup">Sign Up</button>
                        </form>

                        <br>
                        <a href="login.php">I already have a membership</a><br>
                    </div>
                    <!--/login form-->
                </div>
                <div class="col-sm-4">

                </div>

            </div>
        </div>
    </section>
</div>
	




    <?php include 'includes/scripts.php' ?>
</body>
</html>