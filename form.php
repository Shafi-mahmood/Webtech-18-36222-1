<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-color:rgb(100, 68, 214);">  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr=$dobErr=$degreeErr=$bgE="";
$name = $email = $gender =$degree= $bg=$dob=$dd= $mm=$yyyy="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      $name="";
    }if(preg_match("/^[0-9]/", $name)){
      $nameE="Must start with letter";
    }
    if(str_word_count($name)<2)
    {
      $nameErr="Less then two Word";
      $name="";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $email="";
    }
  }
  if(empty($_POST["dd"]) or empty($_POST["mm"]) or empty($_POST["yyyy"])){
		$dobErr="Date of birth input is requied";
		$dd = test_input($_POST["dd"]);
		$mm = test_input($_POST["mm"]);
		$yyyy = test_input($_POST["yyyy"]);

	}
	else
	{
		$dd = test_input($_POST["dd"]);
		$mm = test_input($_POST["mm"]);
		$yyyy = test_input($_POST["yyyy"]);

		if( !filter_var($dd,FILTER_VALIDATE_INT,array('0' => array(
            'min_range' => 1, 
            'max_range' => 31
        )))|!filter_var($mm,FILTER_VALIDATE_INT,array('1' => array(
            'min_range' => 1, 
            'max_range' => 12
        )))|!filter_var($yyyy,FILTER_VALIDATE_INT,array('2' => array(
            'min_range' => 1953, 
            'max_range' => 1998
        ))))
			{$dobErr="Must be valid numbers(dd:1-31,mm: 1-12,yyyy: 1953-1998)";}
	}

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

if(empty($_POST["degree"]))
{
  $degreeErr="Must be selected";		
}
else if (sizeof($_POST["degree"])<2)
{
  $degreeErr="At least two must be selected";
}

if(!isset($_POST["bg"]))
{
	$bgE="Must be selected";
}
else
{
if($_POST["bg"]=="blank")
{
	$bgE="Must be selected";
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <fieldset>
  <legend>Name:</legend>  
  <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  </fieldset>
  <fieldset>
  <legend>Email:</legend> 
  <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  </fieldset>
  <fieldset>
<legend><b>DATE OF BIRTH</b></legend>
<table>
<tr style="text-align: center;">
	<th ><label for="dd" >dd</label></th>
	<th></th>
	<th><label for="mm" >mm</label></th>
	<th></th>
	<th><label for="yyyy" >yyyy</label></th>
	<th></th>
</tr>
<tr>
<td><input type="text" name="dd" style="width: 25px" value="<?php echo $dd;?>"></td>
<td>/</td>
<td><input type="text" name="mm" style="width: 25px" value="<?php echo $mm;?>"></td>
<td>/</td>
<td><input type="text" name="yyyy" style="width: 25px;" value="<?php echo $yyyy;?>"></td>
<td style="padding-left: 10px"><span class="error">* <?php echo $dobErr;?></span></td>
</tr>
</table>

</fieldset>
  <fieldset>
  <legend>Gender:</legend> 
  
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  </fieldset>
  <fieldset>
  <legend><b>DEGREE</b></legend>

	<input type="checkbox" id="degree" name="degree[]" value="ssc"> SSC
	<input type="checkbox" id="degree" name="degree[]" value="hsc"> HSC
	<input type="checkbox" id="degree" name="degree[]" value="bsc"> BSc
	<input type="checkbox" id="degree" name="degree[]" value="msc"> MSc	
	<span class="error" >* <?php echo $degreeErr;?></span>
  <br><br>			

  
  </fieldset>
  <fieldset>
<legend><b>BLOOD GROUP</b></legend>
	<select name="bg" id="bg">
		
		<option value="AB+">AB+</option>
		<option value="AB-">AB-</option>
		<option value="A+">A+</option>
		<option value="A-">A-</option>
		<option value="B+">B+</option>
		<option value="B-">B-</option>
		<option value="O+">O+</option>
		<option value="O-">O-</option>
	</select>	
	<br>	
	<span class="error" >* <?php echo $bgE;?></span>			


</fieldset>
  <input type="submit" name="submit" value="Submit">  
  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dob;
echo "<br>";
echo $gender;
echo "<br>";
echo $degree;
echo "<br>";
echo $bg;
?>

</body>
</html>