<html>
<head>
<title>
BOOKING PORTAL
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
.l{
	background-color:black;
	color:orange;
}
.sel{
	background-color:red;
	color:white;	
}
.bg {
    
    background-image: url("max.jpg");

    
    height: 100%; 

    
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

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
table, th, td {
    border: 2px dotted orange;
    border-collapse: collapse;
	
	background-color:grey;
	color:white;
}
th, td {
    padding: 15px;
	
.b{background-color:green;
color:purple;}
}
</style>
</head>
<body >
<div class="bg">
<table border=2 align=center style="width:100%">
<form name="frm1" action="booking.php" method="post">
<tr align="center">
<td></td>
<td>Doctor name</td>
<td>Hospital name</td>
<td>City</td>
<td>Doctor email id</td>
<td>Department</td>
</tr>
<?php
$h_name=$_POST["hosp_name"];
$dept=$_POST["dept_name"];
$h_city=$_POST["hosp_city"];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"proj");
echo "your selected hospital is:";
echo $h_name;
echo "<br>";
echo "your selected city is:";
echo $h_city;
echo "<br>";
echo "your selected department is:";
echo $dept;
echo "<br>";
$q="select * from doctor where h_name='$h_name' and h_city='$h_city' and doc_dept='$dept'";
$result=mysqli_query($con,"$q");
if(!$result){
	echo("No such record available");
}
else{
while($row=mysqli_fetch_array($result)){?>
<tr>
<td><input type="radio" name="docid" value="<?php echo $row['doc_id']?>"></td>
<td> <?php echo $row['doc_name'];?></td>
<td><?php echo $row['h_name']; ?></td>
<td><?php echo $row['h_city']; ?></td>
<td><?php echo $row['doc_email']; ?></td>
<td><?php echo $row['doc_dept']; ?></td>
</tr>
    <?php
    }
}?>
</table>
<div class="b" style="left: 250;position: absolute;z-index: 1;visibility: show;">
<input type="submit" value="SUBMIT" class="button" >
</div>
</form>

</body>
</html>