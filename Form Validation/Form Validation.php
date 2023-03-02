
<center><h2>PHP Form Validation</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> <center> 
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
 
 Date:
  <input type ="date" name = "date" value = "<?php echo date('d-m-y'); ?>" /><br><br>


  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  Degree:
  <input type="radio" name="degree" value="SSC">SSC
  <input type="radio" name="degree" value="HSC">HSC
  <input type="radio" name="degree" value="BSc">BSc
  <input type="radio" name="degree" value="MSc">MSc
  <br><br>

Blood Group : 
<select>
<option value="">Bloodgroup</option>
  <option value="A pos">A pos</option>
  <option value="A neg">A neg</option>
  <option value="B pos">B pos</option>
  <option value="AB pos">AB pos</option>
  <option value="AB neg">AB neg</option>
  <option value="O pos">O pos</option>
  <option value="O neg">O neg</option>
</select>
<br><br>
  <input type="submit" name="submit" value="Submit">  
</form></center>

?>