<?php


if ((isset($_POST['a']))and(isset($_POST['c']))){

 $var1=$_POST['a']+$_POST['c'];
 echo json_encode(array('data1' => $var1));

}



?>
