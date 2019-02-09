<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
 // it will never let you open index(login) page if session is set
 if ( isset($_SESSION['user'])!="" ) {
 header("Location: RegPage2.php");
  exit;
 }
 
 $error = false;
 
 if( isset($_POST['btn-login']) ) { 
  
  // prevent sql injections/ clear user invalid inputs
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  // prevent sql injections / clear user invalid inputs
  
  if(empty($email)){
   $error = true;
   $emailError = "Please enter your email address.";
  } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  }
  
  if(empty($pass)){
   $error = true;
   $passError = "Please enter your password.";
  }
  
  // if there's no error, continue to login
  if (!$error) {
   
   //$password = hash('sha256', $pass); // password hashing using SHA256
  
   $res=mysql_query("SELECT userId, userName, userPass FROM admins WHERE userEmail='$email'");
   $row=mysql_fetch_array($res);
   $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
   //$dbpass = hash('sha256',$row['userPass']);
   
   if( $count == 1 && $row['userPass']==$pass ) {
    $_SESSION['user'] = $row['userId'];
   header("Location: RegPage2.php");
   } else {
    $errMSG = "Please check the username and password, Try again...";
   }
    
  }
  
 }
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>h1{color:#000000;}
</style>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    <div>
        <h1>Sign In!</h1>
			<?php
			if(isset($errMSG)){
			?>
			<div>
			<?php echo $errMSG; ?>
			</div>
			<?php
			}
			?>
		<input type="email" name="email"  placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" />
		<span ><?php echo $emailError; ?></span>
		<br><br>
		<input type="password" name="pass" placeholder="Your Password" maxlength="15" />
		<span><?php echo $passError; ?></span>
		<br><br>
		<button type="submit" name="btn-login">Sign In</button>
		<br><br>
    </div>
    </form> 
</body>
</html>
<?php ob_end_flush(); ?>