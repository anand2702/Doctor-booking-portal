<html>
<body>
<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = ($_POST["name"]);
  $roll = ($_POST["roll"]);
  
}
if($name==''||$roll=='')
echo "Empty fields not allowed";
else
	
	{

 $name = $_POST['name'] ;
 $roll=$_POST['roll'];
 $host = 'localhost';
 $user = 'root';
 $pass = '';

 $con=mysql_connect($host, $user, $pass);
 if(!$con){
    die("ERROR: Could not connect. " . mysql_connect_error());
}
 $db=mysql_select_db('proj');
if(!$db)
{	echo "No databse";
$sql = "CREATE DATABASE proj";
if (mysql_query($sql,$con)) {
    echo "Database created successfully with the name proj";
} else {
    echo "Error creating database: " . mysql_error($conn);
}
}
 $insertdata=" INSERT INTO data VALUES( '$name','$roll') ";
 $ins=mysql_query($insertdata,$con);
if(!$ins)
{ echo "Cant insert";
}
else
	echo "Sucessfully inserted"."<br>";

 $rows=mysql_query("Select * from data",$con);
if(!$rows)
{ echo "No record";
}
else
{
while($row=mysql_fetch_array($rows))
{
	echo $row["name"]." ".$row["roll"];
	echo "<br>";
}	
}}
?>
</body>
</html>