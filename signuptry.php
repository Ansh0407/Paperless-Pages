<!DOCTYPE html>
<html>
  <head>
    <title>Signup Page</title>
    <header>
		<nav>
			<ul>
                    <li><a href="./homepg.html" style = "font-size: 18px;">Home</a></li>
                    <li><a href="./aboutpg.php" style = "font-size: 18px;">About</a></li>
                    <li><a href="./showcase.php" style = "font-size: 18px;">Showcase</a></li>
                    <li><a href="./browse.php" style = "font-size: 18px;">Browse</a></li>
                    <li><a href="./dashboard.php" style = "font-size: 18px;">Dashboard</a></li>
			</ul>
		</nav>
	</header>
    <style>

header {
	background: rgba(144, 119, 119, 0.1);
	padding: 10px;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    /* display: flex;  
    justify-content: space-between;
    align-items: center; */
}

nav ul {
	margin: 0;
	padding: 0;
	list-style: none;
	text-align: right;
}

nav li {
	display: inline-block;
	margin-left: 20px;
}

nav a {
	color: #fff;
	text-decoration: none;
}
nav ul li::after {
        content: '';
        width: 0%;
        height: 2px;
        background: #d38581;
        display: block;
        margin: auto;
        transition: 0.5s;
}
*{
        margin:0;
        padding: 0;
        font-family: 'Luxurious Roman', cursive;
    }

    .bg{
        background-image: url(./background.jpg);
        width:100%;
        height: 100vh;
        background-position:center;
        background-size: cover;
        position: relative;
    }
 .signup-form {
	max-width: 800px;
    margin-top : 25vh;
    height: 500px;
	margin: 0 auto;
	background: #fff;
	padding: 20px;
	border-radius: 5px;
	box-shadow: 0px 0px 10px #ccc;
}

.signup-form h2 {
	text-align: center;
	margin-bottom: 20px;
}

.signup-form form label {
	display: block;
	font-weight: bold;
	margin-bottom: 5px;
}

.signup-form form input {
	width: 50%;
	padding: 10px;
	margin-bottom: 15px;
	border-radius: 5px;
	border: 1px solid #ccc;
}

.signup-form form button {
	display: block;
	margin: 0 auto;
	background: #007bff;
	color: #fff;
	padding: 10px 20px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
}

    </style>
  </head>
<body>
	<div class="signup-form">
		<h2>Signup</h2>
		<form action="signup.php" method="post">
			<label>Name
			<input type="text" name="name" required>
            </label>
			<label>Email
			<input type="email" name="email" required>
            </label>
			<label>Password
			<input type="password" name="password" required>
            </label>
			<button type="submit" name="signup">Signup</button>
		</form>
	</div>
</body>
</html>
<?php
if(isset($_POST['signup'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];

	if($password != $confirm_password) {
		echo "The passwords do not match!";
	} else {
		
		echo "Thank you for signing up!";
	}
}
?>
