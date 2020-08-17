<html>
<head>
    <title>Patient Details</title>
    <link rel="icon" href="../image/img.png" type="image" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="../css/display.css">
</head>

<body>

<h1>INFORMATION ABOUT PATIENT</h1>

<form name="form" method="get"> 
  
  <input type="text" name="inputfld" value="">  
  
  <input type="submit" name="Submit">

</form>

<table id="tabletag">
    
        <tr style="">
            <th>PATIENT NAME</th>
            <th>MOBILE NUMBER</th>
            <th>HOSPITAL NAME</th>
            <th>HOSPITAL NUMBER</th>
            <th>BLOOD GROUP</th>
            <th>E-MAIL ID</th>
            <th>AGE</th>
            <th>ADDRESS</th>
            <th>PIN CODE</th>
        </tr>
        
        <?php 

            $invar = 'A+';
            if(isset($_GET['inputfld'])){
            $invar = $_GET['inputfld'];
            }
            $host="localhost";
            $dbusername="root";
            $dbpassword="";
            $dbname="lifeline";

            $conn =mysqli_connect($host,$dbusername,$dbpassword,$dbname);


            if(!$conn){
                echo"error";
            }

        $sql = "SELECT name,num1,hname,num2,bg,email,age,ad,pin FROM blood_need WHERE bg = '$invar'";
        $result = $conn->query($sql);
        while($resultRow = $result->fetch_row()){
            echo "<tr>";
            for($i = 0; $i < $result->field_count; $i++){
                echo "<td>$resultRow[$i]</td>";
    }
    echo "</tr>";
    }
    echo "</table>";
    $conn-> close();
    ?>

<form action="../index.php" >
<input type="submit" VALUE="NEXT">

</form>
</body>
</head>
</html>