<?php
$servername = "localhost";
$username= "root";
$dbpassword="root";
$dbname="contact";

$conn=mysqli_connect($servername, $username, $dbpassword, $dbname, "3306");

if(!$conn){
	echo "connection failure";
}
//echo "connection Established";

if($_SERVER['REQUEST_METHOD']='POST');
{
	$a=$b=$c=$d='';
	$a=$_POST['name'];
	$b=$_POST['mail'];
	$c=$_POST['subject'];
	$d=$_POST['message'];
	//echo $a;
	//echo $b;
	//echo $c;
	//echo $d;
}

$temp= "INSERT INTO message (name, email, subject, messages) VALUES('$a', '$b', '$c', '$d')";
  mysqli_query($conn, $temp);

  
 echo '<script language="javascript">alert("Message Recieved Successfully");</script>';
mysqli_close($conn);
header("Refresh:1; url=index.html");

?>