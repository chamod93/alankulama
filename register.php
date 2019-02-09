<?php
 ob_start();
 session_start();
 if( isset($_SESSION['user'])=="" ){
  header("Location: RegPage.php");
 }
 include_once 'dbconnect.php';

 $error = false;

 if ( isset($_POST['btn-signup']) ) {
  
  // clean user inputs to prevent sql injections
  $name = trim($_POST['name']);
  $name = strip_tags($name);
  $name = htmlspecialchars($name);
  
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  
  // basic name validation
  if (empty($name)) {
   $error = true;
   $nameError = "Please enter your full name.";
  } else if (strlen($name) < 3) {
   $error = true;
   $nameError = "Name must have atleat 3 characters.";
  } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
   $error = true;
   $nameError = "Name must contain alphabets and space.";
  }
  
  //basic email validation
  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  } else {
   // check email exist or not
   $query = "SELECT userEmail FROM users WHERE userEmail='$email'";
   $result = mysql_query($query);
   $count = mysql_num_rows($result);
   if($count!=0){
    $error = true;
    $emailError = "Provided Email is already in use.";
   }
  }
  // password validation
  if (empty($pass)){
   $error = true;
   $passError = "Please enter password.";
  } else if(strlen($pass) < 6) {
   $error = true;
   $passError = "Password must have atleast 6 characters.";
  }
  
  // password encrypt using SHA256();
  $password = hash('sha256', $pass);
  
  // if there's no error, continue to signup
  if( !$error ) {
   
   $query = "INSERT INTO users(userName,userEmail,userPass) VALUES('$name','$email','$pass')";
   $res = mysql_query($query);
    
   if ($res) {
    $errTyp = "success";
    $errMSG = "Successfully registered, you may login now";
    unset($name);
    unset($email);
    unset($pass);
   } else {
    $errTyp = "danger";
    $errMSG = "Something went wrong, try again later..."; 
   } 
  }
}
?>



<style>h1{color:#000000;}
</style>



	<div>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    <div>
        <h1>Sign Up!</h1>
         <?php
			if(isset($errMSG)){
		?>
			<div >
            <div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
			 <?php echo $errMSG; ?>
             </div>
             </div>
         <?php
						}
		?>
            <div >
            <input type="text" name="name"  placeholder="Enter Name" maxlength="50" value="<?php echo $name ?>" />
			<span ><?php echo $nameError; ?></span>
			<br><br>
			<input type="email" name="email"  placeholder="Enter Your Email" maxlength="40" value="<?php echo $email ?>" />
			<span ><?php echo $emailError; ?></span>
			<br><br>
			<input type="password" name="pass"  placeholder="Enter Password" maxlength="15" />
			<span ><?php echo $passError; ?></span>
			<br><br>
			<button type="submit"  name="btn-signup">Sign Up</button>
			<br><br>
			<a href="Index.php">Sign in Here...</a>
			<br><br>
            </div>
      </div>
   </form>
   </div> 

<?php ob_end_flush(); ?>