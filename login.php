<<<<<<< HEAD
<?php session_start(); ?>
=======
>>>>>>> 06b6ecdb39f20f627200360ac599308aa603e420
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<<<<<<< HEAD
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Bootstrap 4 Login/Register Form</title>
</head>
<body>
    <div id="logreg-forms">
        <form class="form-signin" method="post">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Sign in with Facebook</span> </button>
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Sign in with Google+</span> </button>
            </div>
            <p style="text-align:center"> OR  </p>
            <input type="text" id="inputEmail" class="form-control" placeholder="Email address"  name="email" autofocus="">
            <input type="password" id="inputPassword" class="form-control" placeholder="Mobile Number"name="mobileno">

            <input type="submit" name="login" value="Signin Now" class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
            <a href="#" id="forgot_pswd">Forgot password?</a>
            <hr>

            </form>
            <div class="login_error">Login error display here</div>


            <?php
             require "database.php";
              if(isset($_POST['login']))
              {
                if(!empty($_POST['email'] && $_POST['mobileno']))
                {
                   $email=$_POST['email'];
                  $mobileno=$_POST['mobileno'];

                 $selectquery = "SELECT id, email,mobile from registration where email= '$email' && mobile='$mobileno'";
                 $logindetails = mysqli_query($connection,$selectquery);
               
			   if(mysqli_num_rows($logindetails)>0)
                 {
					 while($select = mysqli_fetch_assoc($logindetails)){
						  
						   $id = $select['id'];
						   echo $id = $_SESSION['userid'] =  $id;
                  echo $emailsession = $_SESSION['emailaddres'] =  $email;
                  echo $mobilesession = $_SESSION['usermobile'] =  $mobileno;
				 
					 }
					 
                   
				   
				   
				   die();
                 //header('location:dashboard.php');
                 }
                 else{
                   echo "fields not match";
                 }
              }

              else {
                echo "Emptyfileds";
              }

              }
             ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script  type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>
=======
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="discription" content="Free Web Tutorial">
    <meta name="ketword" content="THML,CSS,Javascript">
    <meta name="author" content="Jhon Doe">
    <link rel="stylesheet" type="text/css" href="assets/stylecss/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <title>login</title>
</head>
<body>
   <div class="container">
   <div class="loginarea">
   <div class="heading"><h1>login-form</h1></div>

   <form action="/action_page.php">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label><div class="forgetpassword"><a href="#">forget password</a></div>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      

       </div>
   </div> 
</body>
</html>
>>>>>>> 06b6ecdb39f20f627200360ac599308aa603e420
