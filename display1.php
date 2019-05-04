<html>
<head><title>diplay</title>
</head>
<body>
<?php
$arr=$_POST['model'];

$con=mysqli_connect("localhost","root");
$db=mysqli_select_db($con,"db1");
foreach($_POST['model'] as $x)
{	echo $x;
	$q="SELECT * FROM cars_detail where car_model=$x";
	$r=mysqli_query($con,"$q");
	if(!$r)
	{}
else{
	$p_detail=mysqli_fetch_array($r);
	echo $p_detail["engine_capacity"]." ";
}}


	
	
?>
</body>
</html>