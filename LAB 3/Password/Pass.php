<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  



<h2>Login</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>  


  Name:
  <input type="text" name="name" value="">
  <span class="error"></span>
  <br><br>

  Password: 
  <input type="text" name="password" value="">
  <span class="error"></span>
  <br><br>

  <input type="Checkbox" id="Checkbox1" name="Remember Me" value="Remember ME">
  <label for="Checkbox1"> Remember Me</label><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>


<h2>Change Password</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> 
  
  Current Password:
   <input type="text" name="password" value="">
  <span class="error"></span>
  <br><br>

  
  New Password:
   <input type="text" name="newpassword" value="">
  <span class="error"> </span>
  <br><br>

  Retype New Password: 
  <input type="text" name="retypepassword" value="">
  <span class="error"> </span>
  <br><br>

  
  <input type="submit" name="submit" value="Submit">  
</form>




</body>
</html>