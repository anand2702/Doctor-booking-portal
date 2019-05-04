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
</style>
</head>
<body >
<div class="bg">

<marquee class=m><font size="26">WELCOME!</font></marquee>
<a href="doclogin.php"><div class="m"	style="top: 60;left: 1350;position: absolute;z-index: 1;visibility: show;"><font color="red" size="5">DOCTOR</div></a></font>

<a href="man.php"><div class="m"	style="top: 60;left: 50;position: absolute;z-index: 1;visibility: show;"><font color="red" size="5">MANAGEMENT</div></a></font>
<form name="frm1" action="booking.php" method="post">
<div class="p" style="top: 100;left: 50;position: absolute;z-index: 1;visibility: show;">
<font size="6">
<b>Select city</b>
<select>
<option>Delhi</option>
<option>Mumbai</option>
<option>Chennai</option>
<option>Hyderabad</option>
</select>

</div>
</font>

<div class="q" style="top: 200;left: 50;position: absolute;z-index: 1;visibility: show;">
<font size="6">
<b>Select Hospital</b>
<select>
<option>Apollo</option>
<option>Max</option>
<option>Fortis</option>
<option>Medanta</option>
</select>

</div>
</font>
<div class="b" style="top: 400;left: 250;position: absolute;z-index: 1;visibility: show;">
<input type="submit" value="Click Here!" class="button">
</div>
<div class="b" style="top: 400;left: 550;position: absolute;z-index: 1;visibility: show;">
<a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJlLWRdWnfwQmPPzFBFqrsFSrBHGSCCssmPVdKnJPdrstzsKBnWBdbzpzlCMhZzhZMRRNVB">Feedback</a>
</div>
</div>
</form>
</body>
</html>