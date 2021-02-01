<?php
$con = mysqli_connect("localhost","root","","user") or die("unable to connect"); 
    $username = $_POST["username"];$email = $_POST["email"];$temp = $_POST["temp"];
    $sbp = $_POST["sbp"];  
    $dbp = $_POST["dbp"];
    $res = $_POST["res"];
    $resp = $_POST["resp"];
    $glu = $_POST["glu"];
    $hr = $_POST["hr"];
         $chol = $_POST["chol"];
    $os = $_POST["os"];
    $ec = $_POST["ec"];
    $stress = $_POST["stress"];  
    $qy = "insert into sustain(username , email , temp, sbp, dbp, res, resp, glu, hr, chol, os, ec, stress) "
            . "values "      . "('$username' , '$email' , '$temp' , '$sbp' , '$dbp', '$res', '$resp', '$glu', '$hr', '$chol',"
            . " '$os', '$ec', '$stress'          )"; 
	if(mysqli_query($con ,$qy)){
		echo "<strong style='font-size:30px;'>Thank You. We have received information provided by you. Please do check your email daily "
            . "to receive suggestions concerned with your health. "
            . "</strong><br><br>"
            . "<strong style='font-size:30px;'><a href='index.php'>Click here</a> to go back</strong>";
	}
	else{
		echo "Not uploaded. Please try again after sometime.";
	}
?>


