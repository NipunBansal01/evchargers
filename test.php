<?php
session_start();
$server="localhost";
$user="root";
$pswrd="root";
$dbname="echargers";

$conn= mysqli_connect($server,$user,$pswrd,$dbname,"3306");

if(!$conn){
    echo"Connection failed";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $p=$q=$a="";
    $p=$_POST['email'];
    $q=$_POST['password'];
    $result= mysqli_query($conn, "SELECT * FROM user WHERE email = '$p'")->fetch_assoc() or die('<script language="javascript">if (confirm(" Incorrect Email !! Login again??")) { document.location = "login.php";} else{document.location = "index.html";};</script>'); 
    $verify= $result['password'];
    $name=$result['name'];
    $contact=$result['phone'];
    // $email=$result['email'];
    // echo $name;

        }
              
        if(password_verify($q, $result['password'] ))
           
            header("Location: user.php"); 
        else
            echo '<script language="javascript">alert("Incorrect Password");</script>';
            mysqli_close($conn);
             $_SESSION['name']=$name;
             $_SESSION['test']=$p;
             $_SESSION['contact']=$contact;

            header("Refresh:0; url=login.php");
            // header("Location:login.php");
    
                // echo '<script type="text/javascript"> 
                // if (confirm("Want to login again?")) { 
                //     document.location = "login.php";
                //   }
                // else{
                //   document.location = "index.html";
                // }
                // </script>';

            // echo '<script type="text/JavaScript"> 
            // document.getElementById('wrong').innerHTML="Wrong id or pasword";</script>';
            
?>
