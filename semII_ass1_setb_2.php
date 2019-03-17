<?php
 session_start();
 $_SESSION["name"]=$_POST['nm'];
  $_SESSION["class"]=$_POST['cl'];
  $_SESSION["add"]=$_POST['ad'];
 


echo "STUDENT NAME IS :  ".$_SESSION["name"];

?>

<html>
<body>
<form name="f1" action="semII_ass1_setb_2_1.php" method="post">
<center>

<p>PLEASE ENTER THE MARKS OF FOLLOWING SUBJECT </p>
<br><br>Physics:<input type="text" name="t1">
<br><br>Biology :<input type="text" name="t2">
<br><br>Chemistry :<input type="text" name="t3">
<br><br>Maths:<input type="text" name="t4">
<br><br>Marathi :<input type="text" name="t5">
<br><br>English :<input type="text" name="t6">
<br>
<input type="submit" value="Ok">
</center>
</form>

 


</body>
</html>



