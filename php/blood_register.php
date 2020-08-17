<html>
<head>
	<title>Blood Need Registration Page</title>
	<link rel="stylesheet" type="text/css" href="../css/register.css">
	<link rel="icon" href="../image/img.png" type="image" sizes="16x16">

	<style>
	#id1{
    	width:500px;
    	height:600px;
    	}  	
	</style>

</head>
<h1>NEED FOR BLOOD?</h1>
<center>
<body>	

<div id="id1">

<form action="blood_register_back.php" method="POST">

<input type="text" name="name" placeholder="Patient Name.." required/><br>

<input type="number" name="num1" placeholder="Moblie Number.." required/><br>

<input type="text" name="hname" placeholder="Hospital Name.." required/><br>

<input type="number" name="num2" placeholder="Hospital Number.." required/><br>

<input type="email" name="email" placeholder="Your E-Mail...." required/><br>

<input type="text" name="bg" placeholder="Blood Group...." required/><br>

<input type="number" name="age" placeholder="Age...." required/><br>

<textarea rows="4" cols="68" name="ad" placeholder="Hospital Address.." required></textarea>

<input type="number" name="pin" placeholder="Pincode...." required/><br>

<input type="submit" value="Submit">

<INPUT type="reset" value="Reset">

</form>

</div>
</form>
</center>
</body>
</html>