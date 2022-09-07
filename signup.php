<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="styles/myform.css">
</head>

<body>
   <div class="heading-container">
            <a href="index.html"><img src="images/logo.png"></a>
        </div>


    <form method="post" action="insert.php">
        <div class="form-container">
            <h1>SIGNUP</h1>
            <input type="text" placeholder="Enter name" name="name" required>
            <input type="email" placeholder="Enter email" name="email" required>
            <input type="number" placeholder="Enter number" name="phone" required>
            <input type="password" placeholder="Enter password" name="password" required>
            <input type="submit" value="Submit">
           
            <p>Already a user? <a href="login.php">login</a></p>
        </div>
    </form>
</body>

</html>