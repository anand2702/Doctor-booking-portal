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
    </style>
	<script text="text/javascript" type="text/javascript">
	</script>
  </head>
  <body ><div class="bg">
<?php  $name=""; ?>
  <form name="doclogin" action="docdetail.php" method="POST">
<center> <div class="p"	style="
      top: 250;
      left: 550;
      position: absolute;
      z-index: 1;
      visibility: show;">Login id:<br> <input type="text" name="dlogin" value="<?php echo $name;?>"><br>Password:<br><input type="password" name="dpass" value="Anand@123"><br>
	
	  <input type="submit" value="SUBMIT" class="button"  onClick=goto();> </div></center>	
	  <div class="b" style="top: 500;left: 250;position: absolute;z-index: 1;visibility: show;">
</form>
  <?php
 //$name=$_POST["dlogin"];
 
 ?>
	  </body>
</html>