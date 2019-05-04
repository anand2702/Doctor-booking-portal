<html>
  <head>
  <title>
  Doctor login
  </title>
    <style>
      .m{
        width: 100%;
        height: 400px;
        background-color: grey;
      }
	  .p {

    background-color: powderblue;
    width: 300px;
    border: 25px solid red;
    padding: 25px;
    margin: 25px;
}
body, html {
    height: 100%;
    margin: 0;
}

.bg {
    
    background-image: url("docl.jpg");

    
    height: 100%; 

    
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
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
    </style>
  </head>
  <body ><div class="bg">

  
<form method="post" action="showpat.php" name="frm">
  <?php
  
 echo $nam;
  $pas="Anand@123";

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"proj");
$q="select * from doctor where doc_id='$nam' and doc_pass='$pas'";
$res=mysqli_query($con,"$q");
$l= mysqli_num_rows($res);
if($l==0)
{
	echo "Invalid username or password";
}
else
{ while($row=mysqli_fetch_array($res)){
	if($row['doc_id']='')
	{
		echo "Error";
		
	}
	else{$date='';
echo "Your id:".$row['doc_id']."<br>"."Your name:".$row['doc_name']."<br>"."Your email id:".$row['doc_email']."<br>"."Your phone no:".$row['doc_phone']."<br>";}
}?>
Click here to view you patients date wise:<br>
<input type="text" name="date" value="<?php echo $date;?>">
<input type="submit" value="Click here!">
<?php
}?>
</body>
</form>
</html>;