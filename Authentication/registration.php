<?php require_once("../processes/dbconnect.php"); ?>
<?php include_once 'includes/header.inc.php' ?>

<!-- session messages--> 
<?php
            //session messages
            if (isset($_SESSION['message'])):
          ?>

            <div class="alert alert-<?=$_SESSION['msg_type']?>">
              <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
              ?>
            </div>
          <?php endif; ?>

<section class="vh-100 pt-4">
  <div class="container-fluid h-custom pt-4">
    <div class="mx-auto" style="width: 200px;">
        <h3 class="mx-auto" style="width: 200px;">AutoFarm </h3>
        
    </div>
    
    
    <div class="row d-flex justify-content-center align-items-center h-100 pt-4">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw2.png" class="img-fluid"
          alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="../processes/registrationprocess.php" method="post">
        <h4 class="mx-auto" style="width: 200px;">Sign Up </h4>

            <!-- User Name input -->
          <div class="form-outline mb-4">
            <input type="text" id="form3Example3" class="form-control form-control-lg"
            name="userName" placeholder="Enter user name" required/>
          </div>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form3Example3" class="form-control form-control-lg"
            name="userEmail" placeholder="Enter a valid email address" required/>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
            name="userPass" placeholder="Enter password" />
          </div>


          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg" name="login"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? 
            <a href="login.php" class="link-info px-2">Login</a>
            </p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
<?php include_once 'includes/footer.inc.php' ?>