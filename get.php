<?php 

$connect=mysqli_connect("localhost","root","","chess");

$result=mysqli_query($connect,"SELECT * FROM chess");
$data=mysqli_fetch_assoc($result);
$str=$data['chessboard'].";".$data['id'].";".$data['email_first'].";".$data['email_second'].";".$data['turn'].";".$data['dead_black'].";".$data['dead_white'].";".$data['pawn_black'].";".$data['pawn_white'].";".$data['winner'] ;
print_r($str);
?>