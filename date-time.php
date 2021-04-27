<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  
<div class="container">
<fieldset>
	<div class="row">
		<div class="col-md-7">
	<?php

echo "<h1>Date And Time Formatting With PHP</h1><hr>";
?>
<h5>Current Date</h5>
<?php echo date("d-m-y", time());    echo "<br>";    ?><hr>
<h5>Current Date with Day</h5>
<?php echo date("D j/n/Y", time());  echo "<br>";   ?><hr>
<h5>Current Date</h5>
<?php echo date("jS of F Y", time()); echo "<br>";    ?><hr>
<h5>Current Date</h5>
<?php echo date("d M y", time());     echo "<br>";   ?><hr>
<h5>Current Date</h5>
<?php echo date("l jS of F", time());  echo "<br>";  ?><hr>

<h5>Date format characters’ legend by examples:<br>
d – Represent a day, from 01 to 31.<br>
m – Represent a month, from 01 to 12.<br>
y – Represent a Year , two digits.<br>
D – Textual representation of a day,  Mon through Sun.<br>
j – Numeric representation of a day, without leading zeros 1 through 31.<br>
n – Numeric representation of a month, without leading zeros 1 through 12.<br>
Y – Numeric representation of a year, four digits.<br>
S – English ordinal suffix for the day of the month. Consist of 2 characters st, nd, rd or th.<br>
F – Textual representation of a month, January through December.<br>
M – Textual representation of a month, three letters Jan through Dec.</h5><hr>
</div>
<div class="col-md-5">
<h1>Time Formatting</h1><hr>
<?php
echo date("G:i:s", time());     echo "<br>";       //16:45:58
echo date("H:i:s", time());     echo "<br>";     //16:45:58
echo date("g:i a.", time());    echo "<br>";    //4:45 pm.
echo date("h:i A.", time());    echo "<br>";  //04:45 PM.



echo date("l jS of F g:i A.", time()); echo "<br>";    // Thursday 7th of February 4:45 PM.
echo date("D M j G:i:s T Y", time());     // Thu Feb 7 16:45:58 EET 2008

?>
<hr>
<h2>Get Current Indian time in PHP</h2>


<?php
date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'd-m-Y h:i:s A', time () );
echo $currentTime;
?>

<hr>
<h3>Syntax for getting yesterday using php</h3>
<?php
echo "Yesterday Date : ";
echo date("Y-m-d",strtotime("yesterday"));
?>


<hr>
<h3>Syntax for getting tomorrow using php</h3>

<?php
echo "Tomorrow date :";
echo date("Y-m-d",strtotime("tomorrow"));
?>
</div>
</div>
</fieldset>
</div>
</body>
</html>