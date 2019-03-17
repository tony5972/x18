<?php
    $a=array('one'=>'aa','two'=>'bb','three'=>'cc','four'=>'dd','five'=>'ee');
    $opt=$_POST['opt1'];
   
if($opt=='o1')
{
     echo"<br>Element with keys";
       print_r($a);
}
else if($opt=='o2')
{
    $size=count($a);
     echo" the size of element is $size";
}

?>
