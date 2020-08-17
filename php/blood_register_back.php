<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="lifeline";

$conn =mysqli_connect($host,$dbusername,$dbpassword,$dbname);

if(!$conn){
	echo"error";
}

$name=filter_input(INPUT_POST,'name');
$num1=filter_input(INPUT_POST,'num1');
$hname=filter_input(INPUT_POST,'hname');
$num2=filter_input(INPUT_POST,'num2');
$email=filter_input(INPUT_POST,'email');
$bg=filter_input(INPUT_POST,'bg');
$age=filter_input(INPUT_POST,'age');
$ad=filter_input(INPUT_POST,'ad');
$pin=filter_input(INPUT_POST,'pin');

$sql="INSERT INTO `blood_need`(`name`,`num1`,`hname`,`num2`, `email`,`bg`, `age`,`ad`,`pin`) VALUES ('$name','$num1','$hname','$num2','$email','$bg','$age','$ad','$pin')";

$x=mysqli_query($conn,$sql);

if(!$x){
    echo "error".mysqli_error($conn);
}
else {
    header("location:donar_display.php");
}

?>