<?php

require_once('includes/functions.php');

$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';

if(isset($_POST['submit'])) {
  $from_value = $_POST['from_value'];
  $from_unit = $_POST['from_unit'];
  $to_unit = $_POST['to_unit'];
  
  $to_value = convert_length($from_value, $from_unit, $to_unit);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Length</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <style>
     .main-content1{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    opacity: 0.9;
   }
   .main-content1 h1{
     background-color: rgb(255, 255, 255);
     height: auto;
     font-size: 40px;
     padding: 10px;
     border-radius: 5px;
   }
   .main-content1 form{
     display: flex;
     flex-direction: column;
     align-items: center;
     justify-content: center;
     background-color: rgb(255, 255, 255);
     padding: 20px;
     border-radius: 10px;
   }
   .entry{
     padding: 20px;
     
     
   }
   .entry label{
     font-size: 28px;
     border-radius: 5px;
     
   }
   .entry input{
    height: 30px;
    font-size: 18px;
    border-radius: 5px;
    box-shadow: 2px 2px 5px gray;
   
   }
   .entry select{
     height: 35px;
     border-radius: 5px; 
   }
   .return{
    background-color: white;
    padding: 8px; 
    font-size: 18px; 
    border-radius: 4px;
    color: black;
   }
    </style>

    <div id="main-content" class="main-content1">

      <h1>Convert Length</h1>
  
      <form action="" method="post">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="from_value" value="<?php echo $from_value; ?>" />&nbsp;
          <select name="from_unit">
            <option value="inches"<?php if($from_unit == 'inches') { echo " selected"; } ?>>Inches</option>
            <option value="feet"<?php if($from_unit == 'feet') { echo " selected"; } ?>>Feet</option>
            <option value="yards"<?php if($from_unit == 'yards') { echo " selected"; } ?>>Yards</option>
            <option value="miles"<?php if($from_unit == 'miles') { echo " selected"; } ?>>Miles</option>
            <option value="millimeters"<?php if($from_unit == 'millimeters') { echo " selected"; } ?>>Millimeters</option>
            <option value="centimeters"<?php if($from_unit == 'centimeters') { echo " selected"; } ?>>Centimeters</option>
            <option value="meters"<?php if($from_unit == 'meters') { echo " selected"; } ?>>meters</option>
            <option value="kilometers"<?php if($from_unit == 'kilometers') { echo " selected"; } ?>>Kilometers</option>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="to_value" value="<?php echo float_to_string($to_value); ?>" />&nbsp;
          <select name="to_unit">
            <option value="inches"<?php if($to_unit == 'inches') { echo " selected"; } ?>>inches</option>
            <option value="feet"<?php if($to_unit == 'feet') { echo " selected"; } ?>>feet</option>
            <option value="yards"<?php if($to_unit == 'yards') { echo " selected"; } ?>>yards</option>
            <option value="miles"<?php if($to_unit == 'miles') { echo " selected"; } ?>>miles</option>
            <option value="millimeters"<?php if($to_unit == 'millimeters') { echo " selected"; } ?>>millimeters</option>
            <option value="centimeters"<?php if($to_unit == 'centimeters') { echo " selected"; } ?>>centimeters</option>
            <option value="meters"<?php if($to_unit == 'meters') { echo " selected"; } ?>>meters</option>
            <option value="kilometers"<?php if($to_unit == 'kilometers') { echo " selected"; } ?>>kilometers</option>
          </select>
          
        </div>
        
        <input type="submit" name="submit" value="Submit" />
      </form>
  
      <br />
      <a href="index.php" class="return">Return</a>
      
    </div>
  </body>
</html>
