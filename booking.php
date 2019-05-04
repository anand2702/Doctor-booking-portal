<html>
<head>
<title>
PATIENT DETAILS
</title>
<style>
.img{ background-color:powderblue;
color:red;}
.m{background-color:black;
color:white;}
.p{background-color:powderblue;
color:black;}

.q{background-color:cyan;
color:blue;}
.b{background-color:orange;
color:purple;}

.bg {
    
    background-image: url("pat.jpg");

    
    height: 100%; 

    
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.error {color: #FF0000;}
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.box{
	background-color: cyan;
}
</style>
</head>
<body >

<div class="bg">
<?php
// define variables and set to empty values
$daterr=$emailerr=$nameErr = $phoneErr = $genderErr = "";
$dat=$name = $phone = $address = $gender= $email="";
$doc="anand";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (!empty($_POST["email"])) {
  
  
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["phone"])) {
    $phoneErr = "Empty phone no. not allowed";
  } 
  else
  {
	  $phone=test_input($_POST["phone"]);
  }
  

  if (empty($_POST["address"])) {
    $address = "";
  } else {
    $address = test_input($_POST["address"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
  if (empty($_POST["dat"])) {
    $datrr = "Date is required";
  } else {
    $dat = test_input($_POST["dat"]);
	$count=0;

  	$host = 'localhost';
 $user = 'root';
 $pass = '';
 $con=mysql_connect($host, $user, $pass);
 if(!$con){
    die("ERROR: Could not connect. " . mysql_connect_error());
}
 $db=mysql_select_db('proj');

  if($emailerr==""&&$nameErr =="" &&$phoneErr=="" && $genderErr== "")
  {
 
 $address="Delhi";
 $id=$phone;

 $insertdata=" INSERT INTO patient(patient_id,patient_name,patient_phone,patient_address,patient_email,gender,appn_date) VALUES( $id,'$name','$phone','$address','$email','$gender' ,'$dat') ";
 $ins=mysql_query($insertdata,$con);
 if(!$ins)
 {echo "Cant insert1";}
  }
  
  $getdata="select patient_id from patient where patient_name='$name'";
 $id=mysql_query($getdata,$con);
 if(!$id)
 {echo "no such record";}
else
	echo $id;
 $insert=" INSERT INTO appointment VALUES( '$doc','$phone' ,'$dat') ";
 $ins1=mysql_query($insert,$con);
 if(!$ins1)
 {echo "Cant insert2";}
  } 
}

 


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="frm">  
  Name: <input type="text" name="name" class="p" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br><br><br>
  Phone no.: <input type="text" name="phone" class="p" value="<?php echo $phone;?>">
  <span class="error">* <?php echo $phoneErr;?></span>
  <br><br>
  <br><br>
  Email id.: <input type="text" name="email" class="p" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailerr;?></span>
  <br><br>
  <br><br>
  Address: <textarea name="comment" rows="5" cols="40" class="p" name="address"> <?php echo $address;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  
  Preffered Appointment Date: <input type="text" name="dat" class="p" value="<?php echo $dat;?>">
  <span class="error">* <?php echo $daterr;?></span>
  <br><br><br>
  <input type="submit" name="submit" value="Submit" class="button">  

  </form>
  <br><br>
</body>
</html>