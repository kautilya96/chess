<?php 

$connect=mysqli_connect("localhost","root","","chess");
	
 $q = $_GET["q"];
 $t = $_GET["turn"];
 $db = $_GET["db"];
 $dw = $_GET["dw"];
 $pw = $_GET["pw"];
 $pb = $_GET["pb"];
       

$str="UPDATE `chess` SET `chessboard`='".$q."',`turn`=".$t.",`dead_black`='".$db."',`dead_white`='".$dw."',`pawn_white`= '".$pw."',`pawn_black`='".$pb."' ";

 //print_r($str);
mysqli_query($connect,$str);
?>