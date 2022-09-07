<?php
session_start();
$server="localhost";
$user="root";
$pswrd="root";
$dbname="echargers";

$conn= mysqli_connect($server,$user,$pswrd,$dbname, "3306");
if(!$conn){
	echo "connection failure";
}
// echo "connection Established";

if($_SERVER['REQUEST_METHOD']='POST');
{
	$a=$b='';
  $a=$_POST['mail'];
	$b=$_POST['amount'];
   // echo $a;
  // echo $b;
}

$temp= "INSERT INTO amount (mail, amount) VALUES('$a', '$b')";
  mysqli_query($conn, $temp);
  // $b=$b*100;

  $_SESSION['amount']=$b;
  

  // echo $_SESSION['amount'];

  header("Refresh:1; url=payment.php");
 echo '<script language="javascript">alert("You are redirected to the Payment Gateway");</script>';
mysqli_close($conn);

?>