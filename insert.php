<?php
$server="localhost";
$user="root";
$pswrd="root";
$dbname="echargers";

$conn= mysqli_connect($server,$user,$pswrd,$dbname, "3306");

if(!$conn){
    echo"connection failed";
}

    $p=$q=$r=$s=$a="";
    $p=$_POST['name'];
    $q=$_POST['email'];
    $r=$_POST['phone'];
    $s=$_POST['password'];
    $a = password_hash($s, PASSWORD_DEFAULT);

$check = mysqli_query($conn, "SELECT * FROM user where email = '$q' ");

if(mysqli_num_rows($check) > 0){
    echo '<script type="text/JavaScript"> 
     alert("User already exists. Please Login!");
     </script>';
}
else{

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $temp="INSERT INTO user(name, email,phone, password) VALUES ('$p','$q','$r','$a')";

        if(mysqli_query($conn,$temp)){
        header("Location: login.php");   
        }
        else{
            die("Insertion unsuccessful");
        }
}
}

?>
