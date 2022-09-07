<!DOCTYPE html>
<html>

<head>
	<title>User</title>
	<link rel="stylesheet" type="text/css" href="styles/user.css">
	<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/62ee39e354f06e12d88d3b80/1g9p94qba';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

</head>

<body>

	<div class="nav-container" id="nav-container">

		<div class="nav-image">
			<img src="images/logo.png" class="logo">
		</div>

		<div class="responsive-nav" id="rbtn">
			<button type="button" onclick="opennav();"><i class="fa fa-bars"></i> </button>
		</div>

		<div class="nav-items" id="nav-items">
			<a href="index.html">HOME</a>
			<a href="contact.html">CONTACT</a>
			<a href="#about">ABOUT</a>
			<!-- <a href="#products">PRODUCTS</a> -->
			<!-- <a class="btn" href="signup.php">SIGN UP</a> -->
			<a class="btn" href="index.html">LOG OUT</a>
		</div>

	</div>

	<div class="form">
    <div class="row">
    <div class="column">
        <img src="images/downfall.png" class="img">
        <p>Continue Fall in Extra Expense on Fuel</p>
    </div>
    <div class="column">


      <form method="POST" action="amount.php">
    <div class="main-container">
        <div>
            <input type="email" name="mail" placeholder="Enter Your Email" >
        </div>
        <div>
            <input type="text" name="amount" placeholder="Amount(in Rs.)" >
        </div>
        <div>

            <button type="submit" class="button" id="button">Click to Charge <img src="images/volt.png" /></button>
        </div>
       </div>
            

</form>



</div>
</div>
</div>

<!--     <form method="POST" action="amount.php" class="column">
    <div class="main-container">
        <div>
            <input type="text" name="name" placeholder="Enter Your Name" >
        </div>  
        <div>
            <input type="email" name="mail" placeholder="Enter Your Email" >
        </div>
        <div>
            <input type="text" width="50px" height="50px" name="amount" placeholder="Amount(in Rs.)" >
        </div>
        <div>

            <button type="submit" class="button" id="button">Click to Charge <img src="images/volt.png" /></button>
        </div>
            

</form>
</div>
</div> -->

	<div class="footer">
		<div class="icon-bar">
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-instagram"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-envelope"></i></a>
		</div>

		<div class="navbar">
			<a href="#">HOME</a>
			<a href="#">CONTACT</a>
			<a href="#">ABOUT</a>
			<a href="#">PRODUCTS</a>
			<a href="login.php">LOGIN</a>
		</div>

		<div class="lastline">
			<p>Disclaimer: This site is for educational purposes only!!
				<br>Thanks for all the resources that have
				helped throughtout the making of this project.<br>
				Echargers &copy; 2022</p>
		</div>
	</div>

	<script>
		function opennav() {

			var x = document.getElementById("nav-container");
			var y = document.getElementById("nav-items");
			var z = document.getElementById("rbtn");
			if (x.className === "nav-container") {
				x.className += " responsive";
				y.className += " responsive";
				z.className += " responsive";

				console.log(x);
				console.log(y);

			} else {
				x.className = "nav-container";
				y.className = "nav-items";
				z.className = "responsive-nav";
			}
		}
	</script>

</body>

</html>