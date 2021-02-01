<?php   
    $con = mysqli_connect("localhost","root","","user") or die("unable to connect");
    $weather=$error=$weather1=$error1="";
     $query = "SELECT * FROM sustain";
 if ($result = $con->query($query)) {
    while ($row = $result->fetch_assoc()) { 
        if ($result) {        
            $weather = "<h3>Health Report : </h3>"."<br> Body Temperature - ".$row['temp']." F <br> Blood pressure - "
                    .$row['sbp']."/".$row['dbp']." mmHg <br> ";
            $weather .= " Respiratory rate - ".$row['res']." breaths per minute <br>Blood Sugar level- ".$row['glu']." mg/dL <br>";
            if($row['resp']=='bronchi'){
                $weather.="You have symptoms like persistent cough and frequent infections. You may be suffering from Bronchiectasis. "
                        . "Please consult the concerned doctor.<br>";
            }
            $weather .= " Heart rate - ".$row['hr']." beats per minute <br> Cholestrol level - ".$row['chol'] ." mg/dL "
                    . "<br> Oxygen Saturation - ".$row['os']." %.";
            $weather.= " ECG reading - ".$row['ec']." mm per sec. ";                
        } else {        
            $error = "Could not find the record - please try again.";         
        }        
        if ($row['stress'] == 'none') {      
            $weather1 = "It is good to hear for us that you have no stress issues.";            
        } else {         
            $error1 = "As you are suffering from stress problems, please ensure proper rest for your body and do exercise regularly.";        
        }
        if ($row['glu'] > 199) {
            $weather1.=$error1.= "<br>Your blood sugar level indicates Diabetes.Please contact the concerned doctor.";
        }
        else if ($row['glu'] < 141){
            $weather1.=$error1.=  "<br>Your blood sugar level is normal.";
        }
        else{
            $weather1.=$error1.=  "<br>Your blood sugar level indicates Prediabetes.Please contact the concerned doctor.";
        }
        if ($row['resp'] == "bronchi"){
            $weather1.$error1.="<br>It appears that you are suffering from Bronchiectasis.";
        }
        if ($row['sbp'] > 120){
            $weather1.$error1.= "<br>You may be suffering from CHD ( Coronary Heart Disease ).";
        }
        if ($row['sbp']<120){if ($row['dbp'] > 80){
            $weather1.$error1.= "<br>You may be suffering from CHD ( Coronary Heart Disease ).";
        }}
        if ($row['sbp']<120){if ($row['dbp'] < 80){if ($row['hr']>100){
            $weather1.$error1.= "<br>You may be suffering from CHD ( Coronary Heart Disease ).";
        }}}
        if ($row['sbp']<120){if ($row['dbp'] < 80){if ($row['hr']<100){if ($row['chol']>240){
            $weather1.$error1.= "<br>You may be suffering from CHD ( Coronary Heart Disease ).";
        }}}}
        if ($row['os'] > 96){
            $weather1.$error1.= "<br>You may be suffering from Hypoxemia.";
        }
        if($row['os']>91){if($row['os']<96){
            $weather1.$error1.= "<br>You may be suffering from Asthma.";
        }}
        if($row['os']<91){if($row['os']>96){if($row['hr']>99){if($row['hr']<126){  
            $weather1.$error1.= "<br>You may be suffering from Asthma.";
        }}}}
        if($row['os']<91){if($row['os']>96){if($row['hr']>99){if($row['hr']<126){if($row['res']>19){if($row['res']<31){
            $weather1.$error1.= "<br>You may be suffering from Asthma.";
        }}}}}}
            
        $emailTo = $row['email'];
        $subject ="Your Daily Health Report";
        $body = $weather . $weather1 . $error . $error1 ."<a href='enter.php' target='_blank'>Please click here to submit your current health details.</a>";
        
        $header = "From:medical@company.com";
        if(mail($emailTo,$subject,$body,$header)){
            echo "<strong style='font-size:30px;'>The email was sent "
            . "</strong><br><br>"
            . "<strong style='font-size:30px;'><a href='index.php'>Click here</a> to go back</strong>";
        }
        else{
            echo "<strong style='font-size:30px;'>The email could not be sent "
            . "</strong><br><br>"
            . "<strong style='font-size:30px;'><a href='index.php'>Click here</a> to go back</strong>";
        }        
    }
 }