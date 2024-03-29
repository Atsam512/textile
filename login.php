<?php
require('connection.inc.php');
// require('functions.inc.php');
$msg='';
if(isset($_POST['submit'])){
	$username= ($_POST['username']);
	$password= ($_POST['password']);
	$sql="select * from admin_users where username='$username' and password='$password'";
	$res=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($res);
	if($count>0){
      session_start();
		$_SESSION['ADMIN_LOGIN']='yes';
		$_SESSION['ADMIN_USERNAME']=$username;
      $_SESSION['loggedin'] = true;
		header('location:./index.php');
		die();
	}else{
		$msg="Please enter correct login details";	
	}
	
}
?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Login Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="./assets/csss/normalize.css">
      <link rel="stylesheet" href="./assets/csss/bootstrap.min.css">
      <link rel="stylesheet" href="./assets/csss/font-awesome.min.css">
      <link rel="stylesheet" href="./assets/csss/themify-icons.css">
      <link rel="stylesheet" href="./assets/csss/pe-icon-7-filled.css">
      <link rel="stylesheet" href="./assets/csss/flag-icon.min.css">
      <link rel="stylesheet" href="./assets/csss/cs-skin-elastic.css">
      <link rel="stylesheet" href="./assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <body class="bg-dark text-light">
      <div class="container sufee-login d-flex align-content-center flex-wrap">
         <div class="container mt-5">
           
            <div class="row d-flex justify-content-center mt-5 ">
           
               <div class="col-md-6 ">
               <h2 class="text-center">Admin Panel Admin Login</h2>
               <div class="login-content">
               <div class="login-form mt-150 mt-5">
                  <form method="post">
                     <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                     </div>
                     <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                     </div>
                     <div class="d-flex justify-content-center mb-5">
                     <button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30 ">Sign in</button>
                      </div>
                    
					</form>
					<div class="field_error text-center text-danger"><?php echo $msg?></div>
               </div>
            </div>
              </div>
             </div>
         
         </div>
      </div>
      <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
   </body>
</html>