<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Sustainability & Wellness</title>
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
          select {             
              margin: 20px 0;             
          }       
          #weather {        
              margin-top:15px;        
          }  
      </style>    
    </head>
    <body>
        <?php
        // put your code here
        ?>
         <div class="container">    
          <h1>Sustainability & Wellness</h1>      
          <form action="submit.php" method="POST" enctype="mutipart/form-data" >
  <fieldset class="form-group">
      <label for="username">Employee Username</label>
      <input type="text" class="form-control" name="username" id="username" placeholder="Eg. Employee1" required="" >
    <input type="text" class="form-control" name="un" id="un"  value = "Please note down your health's information from the wearable." readonly>
    <label for="email">Email Address</label>
    <input type="varchar" class="form-control" name="email" id="email" placeholder="Eg. employee1@company.com" required="" >
    <input type="text" class="form-control" name="un" id="un"  value = "Please check your mail daily to be updated with your health condition." readonly>
    <label for="temp">Body Temperature ( in F )</label>
    <input type="number" class="form-control" name="temp" id="temp" placeholder="Eg. 98" required="" >
    <label for="sbp">Systolic Blood Pressure ( in mmHg )</label>
    <input type="number" class="form-control" name="sbp" id="sbp" placeholder="Eg. 140" required="" >
    <label for="dbp">Diastolic Blood Pressure ( in mmHg )</label>
    <input type="number" class="form-control" name="dbp" id="dbp" placeholder="Eg. 90" required="" >
    <label for="res">Respiratory Rate ( in breaths per minute / BPM )</label>
    <input type="number" class="form-control" name="res" id="res" placeholder="Eg. 16" required="" >
    <label for="resp">Respiration Condition</label>
    <select id="resp" name="resp" required="" >
  <option value="bronchi">Persistent Cough and frequent infections</option>
  <option value="none">None</option> 
</select>
    <input type="text" class="form-control" name="un" id="un"  value = "Bronchiectasis happens when irreversible damage affects the bronchi." readonly>
    <label for="glu">Glucose or Blood Sugar ( in mg/dL )</label>
    <input type="number" class="form-control" name="glu" id="glu" placeholder="Eg. 140" required="" >
    <label for="hr">Heart Rate ( in beats per minute )</label>
    <input type="number" class="form-control" name="hr" id="hr" placeholder="Eg. 100" required="" >
    <label for="chol">Cholestrol ( in mg/dL )</label>
    <input type="number" class="form-control" name="chol" id="chol" placeholder="Eg. 125" required="" >
    <label for="os">Oxygen Saturation ( in % )</label>
    <input type="number" class="form-control" name="os" id="os" placeholder="Eg. 97" required="" >
    <label for="ec">Electro Cardiogram ( in mm per sec )</label>
    <input type="number" class="form-control" name="ec" id="ec" placeholder="Eg. 200" required="" >
    <label for="username">Any Stress Condition</label>
    <input type="varchar" class="form-control" name="stress" id="stress" placeholder="Eg. none" required="" >    
  </fieldset>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>              
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
    </body>
</html>
