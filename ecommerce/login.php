<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }
?>
<?php include 'includes/header1.php'; ?>
<body>
<?php include 'includes/navbar1.php' ?>
<div class="login-box">
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

<section id="form" style="margin-top: -1px">
        <!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">

                </div>
                <div class=" col-sm-4">
                    <div class="login-form ">
                        <!--login form-->
                        <h2>Login to your account</h2>
                        <form action="verify.php" method="POST">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                            <button type="submit" class="btn btn-default " name="login">Login</button>
                        </form>

                        <br>
                        <a href="password_forgot.php">I forgot my password</a><br>
                        <a href="signup.php" class="text-center">Register a new membership</a><br>
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

    
    <!--/form-->


    