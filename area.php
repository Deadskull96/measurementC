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
  
  $to_value = convert_area($from_value, $from_unit, $to_unit);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Area</title>
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

      <h1>Convert Area</h1>
  
      <form action="" method="post">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="number" name="from_value" value="<?php echo $from_value; ?>" />&nbsp;
          <select name="from_unit">
            <option value="square_inches"<?php if($from_unit == 'square_inches') { echo " selected"; } ?>>Square Inches</option>
            <option value="square_feet"<?php if($from_unit == 'square_feet') { echo " selected"; } ?>>Square Feet</option>
            <option value="square_yards"<?php if($from_unit == 'square_yards') { echo " selected"; } ?>>Square Yards</option>
            <option value="square_miles"<?php if($from_unit == 'square_miles') { echo " selected"; } ?>>Square Miles</option>
            <option value="square_millimeters"<?php if($from_unit == 'square_millimeters') { echo " selected"; } ?>>Square Millimeters</option>
            <option value="square_centimeters"<?php if($from_unit == 'square_centimeters') { echo " selected"; } ?>>Square Centimeters</option>
            <option value="square_meters"<?php if($from_unit == 'square_meters') { echo " selected"; } ?>>Square meters</option>
            <option value="square_kilometers"<?php if($from_unit == 'square_kilometers') { echo " selected"; } ?>>Square Kilometers</option>
            <option value="acres"<?php if($from_unit == 'acres') { echo " selected"; } ?>>Acres</option>
            <option value="hectares"<?php if($from_unit == 'hectares') { echo " selected"; } ?>>Hectares</option>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="to_value" value="<?php echo float_to_string($to_value); ?>" />&nbsp;
          <select name="to_unit">
            <option value="square_inches"<?php if($to_unit == 'square_inches') { echo " selected"; } ?>>Square Inches</option>
            <option value="square_feet"<?php if($to_unit == 'square_feet') { echo " selected"; } ?>>Square Ieet</option>
            <option value="square_yards"<?php if($to_unit == 'square_yards') { echo " selected"; } ?>>Square Yards</option>
            <option value="square_miles"<?php if($to_unit == 'square_miles') { echo " selected"; } ?>>Square Miles</option>
            <option value="square_millimeters"<?php if($to_unit == 'square_millimeters') { echo " selected"; } ?>>Square Millimeters</option>
            <option value="square_centimeters"<?php if($to_unit == 'square_centimeters') { echo " selected"; } ?>>Square Centimeters</option>
            <option value="square_meters"<?php if($to_unit == 'square_meters') { echo " selected"; } ?>>Square Meters</option>
            <option value="square_kilometers"<?php if($to_unit == 'square_kilometers') { echo " selected"; } ?>>Square Kilometers</option>
            <option value="acres"<?php if($to_unit == 'acres') { echo " selected"; } ?>>Acres</option>
            <option value="hectares"<?php if($to_unit == 'hectares') { echo " selected"; } ?>>Hectares</option>
          </select>
          
        </div>
        
        <input  type="submit" name="submit" value="Submit" />
      </form>
  
      <br />
      <a href="index.php" class="return">Return</a>
      
    </div>
  </body>
</html>
