<html>
<head>
<title>airlines_register</title>
<STYLE>
#i1{

			width:40px;
			height:40px;
			border-radius:50%;
			border:grey;
			cursor:pointer;
			float:left;
		}
H1{
COLOR:WHITE;
FONT-SIZE:50;
word-spacing:15PX;
letter-spacing:8PX;
MARGIN: 20PX 300PX 20PX 300PX;
PADDING:15PX;
BORDER:5PX SOLIDBLUE;
}
INPUT[TYPE]{
MARGIN:20PX 400PX 20PX 400PX;
}
BODY{
background-image:URL('ART.JPG');

repeat:NO-REPEAT;
}
H3{
DISPLAY:INLINE;
background-color:HSLA(0,75%,0%,0.3);
word-spacing:5PX;
letter-spacing:3PX;
font-size:20;
COLOR:WHITE;
MARGIN:20PX 400PX 20PX 400PX;
}
INPUT[VALUE="SUBMIT"]
{
CURSOR:POINTER;
MARGIN:20PX;
MARGIN-LEFT:400PX;
BORDER:5PX ;
PADDING: 15PX 50PX 15PX 50PX;
background-color:GREY;
COLOR:WHITE;
}
INPUT[VALUE="SUBMIT"]:HOVER{
background-color:RED;
}
</STYLE>

</head>
<BODY><HR>
<a href="airlines.html"><img src ="home.png" alt="home" id="i1"></a>
<h1>CREATE NEW ACCOUNT</H1><HR>
<FORM name="myform" action="record.php" method="post">
<H3>FULL
NAME</H3><BR>
<INPUT TYPE="TEXT"  placeholder="EG.SHRYATA NIGAM" NAME="FNAME"ID="FNAME"><BR>
<H3>EMAIL ID</H3><BR>
<INPUT TYPE="EMAIL" PLACEHOLDER="ABC@XYZ.COM" ID="EMAIL" NAME="EMAIL"><BR>
<H3>CONTACT NUMBER</H3><BR>
<INPUT TYPE="TEL"ID="CNO" NAME="CNO"placeholder="XXXXXXXXXX"><BR>
<H3>CREATE PASSWORD</H3><BR>
<INPUT TYPE="PASSWORD" NAME="PW"ID="PW" placeholder="********"><BR>
<H3>RE-ENTER THE PASSWORD</H3><BR>
<INPUT TYPE="PASSWORD" NAME="PW2"ID="PW2"placeholder="********"><BR>
<input type="submit" value= "SUBMIT" NAME="sb"><BR>
</FORM>
<?php
$con=mysqli_connect('localhost','root','','record');
if(isset($_POST['sb']))
{
$FNAME=$_POST['FNAME'];
$EMAIL=$_POST['EMAIL'];
$CNO=$_POST['CNO'];
$PW=$_POST['PW'];
$query="INSERT INTO register(FNAME,EMAIL,CNO,PW)VALUES('$NAME','$EMAIL','$CNO','$PW')";
$run=mysqli_query($con,$query);
}
?>
<p style=" color: white;float:right;margin:20px 30px 10px 30px;font-size:22;">Already have an account<A HREF="login.html" style="text-decoration:none;color:red;">click here</A>to sign in</p>
</BODY>
</html>

