<?php
session_start();
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["t3"];
$d=$_POST["t4"];
$e=$_POST["t5"];
$f=$_POST["t6"]; 
	     
	echo"<table border=2><tr><h1>MARKSHEET OF THE STUDENT IS</tr>";
	echo"<tr><th><b>NAME:</b>    ".$_SESSION["name"]."CLASS:</b>      ".$_SESSION["class"]."</th></tr>";
	echo"<tr><th> <b>ADDRESS:</b>    ".$_SESSION["add"]."</th></tr>";
 	echo"<tr> <th> SUBJECT NAME</th> <th>    MARKS       </th></tr>";
 	echo"<tr> <th> PHY </th> <th>    $a      </th></tr>";
 	echo"<tr> <th> Chem </th> <th>    $b      </th></tr>";
 	echo"<tr> <th> Bio </th> <th>    $c      </th></tr>";
 	echo"<tr> <th> Maths </th> <th>    $d      </th></tr>";
 	echo"<tr> <th> Marathi </th> <th>    $e      </th></tr>";
	echo"<tr> <th> English </th> <th>    $f     </th></tr>";
	$total=$a+$b+$c+$d+$e+$f;
	$Per=$total/6;
 	echo"<tr> <th> TOTAL </th> <th>    $total      </th></tr>";
	echo"<tr> <th> Percentage </th> <th>    $Per   </th></tr>";

?>
