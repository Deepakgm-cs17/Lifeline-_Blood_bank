<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="lifeline";

$conn =mysqli_connect($host,$dbusername,$dbpassword,$dbname);

if(!$conn){
	echo"error";
}

$username=filter_input(INPUT_POST,'username');
$num1=filter_input(INPUT_POST,'num1');
$num2=filter_input(INPUT_POST,'num2');
$email=filter_input(INPUT_POST,'email');
$bg=filter_input(INPUT_POST,'bg');
$age=filter_input(INPUT_POST,'age');
$pass=filter_input(INPUT_POST,'pass');
$ad=filter_input(INPUT_POST,'ad');
$pin=filter_input(INPUT_POST,'pin');

$sql="INSERT INTO `register`(`username`,`num1`,`num2`, `email`,`bg`, 'age',`pass`,`ad`,`pin`) VALUES ('$username','$num1','$num2','$email','$bg','$age','$pass','$ad','$pin')";

$x=mysqli_query($conn,$sql);

if(!$x){
    echo "error".mysqli_error($conn);
}
else {
    header("location:../html/choice.html");
}

?>