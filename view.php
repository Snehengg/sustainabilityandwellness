<?php   
    $con = mysqli_connect("localhost","root","","user") or die("unable to connect");
    $weather=$error=$weather1=$error1="";
    if(isset($_GET['username'])){
      $username = $_GET['username']; 
 }else{
      $username = " ";
 }  
    if(isset($_GET['username'])){      
     $query = "SELECT * FROM sustain WHERE id = (SELECT MAX(id)FROM sustain WHERE username = '$username')";
 if ($result = $con->query($query)) {
    while ($row = $result->fetch_assoc()) {                  
        if ($result) { 
            if($row['email']==''){
     $error="The medical details of this employee could not be found.";
 }
            $weather = "<h3>Health Report : </h3>"."<br> Body Temperature - ".$row['temp']." F <br> Blood pressure - "
                    .$row['sbp']."/".$row['dbp']." mmHg <br> ";
            $weather .= " Respiratory rate - ".$row['res']." breaths per minute <br>Blood Sugar level- ".$row['glu']." mg/dL <br>";
            if($row['resp']=='bronchi'){
                $weather.="You have symptoms like persistent cough and frequent infections. You may be suffering from Bronchiectasis. "
                        . "Please consult the concerned doctor.<br>";
            }
            $weather .= " Heart rate - ".$row['hr']." beats per minute <br> Cholestrol level - ".$row['chol'] ." mg/dL "
                    . "<br> Oxygen Saturation - ".$row['os']." %.";
            $weather.= "<br> ECG reading - ".$row['ec']." mm per sec. ";                
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
            }
 }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Sustainability and Wellness</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
      <style type="text/css">  
      html { 
          background: url(background.jpeg) no-repeat center center fixed; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
          }    
          body {           
              background: none;           
          }    
          .container {      
              text-align: center;
              margin-top: 100px;
              width: 550px;       
          }   
          input {       
              margin: 20px 0;        
          }  
          #weather {       
              margin-top:15px;      
          }  
      </style>  
  </head>
  <body>
      <div class="container"> 
          <h1>Check your Health Record</h1>    
          <form>
  <fieldset class="form-group">
    <label for="username">Enter your username.</label>
    <input type="varchar" class="form-control" name="username" id="username" placeholder="Eg. Employee1" >
  </fieldset>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
          <div id="weather"><?php       
              if ($weather) {              
                  echo '<div class="alert alert-success" role="alert">
  '.$weather.'
</div>';          
              } else if ($error) {           
                  echo '<div class="alert alert-danger" role="alert">
  '.$error.'
</div>';         
              }      
              ?></div>
          <div id="weather"><?php         
              if ($weather1) {            
                  echo '<div class="alert alert-success" role="alert">
  '.$weather1.'
</div>';              
              } else if ($error1) {            
                  echo '<div class="alert alert-danger" role="alert">
  '.$error1.'
</div>';          
              }     
              ?></div>
      </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>