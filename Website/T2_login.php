<!DOCTYPE html>

<html lang = "en">

	<?php
		session_start();
        define("FILE_AUTHOR", "Christopher Courts");
    ?>

<head>
	<title> Kiwi Login </title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="style.css" /> 
</head>

<body>
	<header>
		<?php
			if($login_status == "Logged in")
			{
				echo "<h1> Welcome $username </h1>";
			}
			else
			{
				echo "<h1> Login </h1>";
			}
		?>
	</header>
	
	<div class="the_menu">
        <ul>
                <li><a href="Team2.php">Home</a></li>
                <li><a href="DashPro.php">Dash Pro</a></li> 
                <li><a href="DashSlim.php">Dash Slim</a></li> 
                <li><a href="Display Manufacturers Table - Kiwi Smartphone Service.php"> Manufacturers</a></li>
                <li><a href="Display Products Table - Kiwi Smartphone Service.php">Store</a></li>
                <li><a href="Disclaimers - Kiwi Smartphone Service.php">Disclaimers </a></li>
                <li><a href="mailto:Christopher.Courts1@marist.edu; Bashir.Dashir1@marist.edu; Benjamin.Fiore1@marist.edu">Contact</a> </li>
                <?php
					if($_SESSION['login_status'] == "Logged in as admin")
					{
				?>
						<li><a style="color: forestgreen; background-color: forestgreen;" href ="">_________________________________________________________</li>
						<li><a href="t2_logout.php">Logout </a></li>
						<li><a href="Admin Links - Kiwi Smartphone Service.php">ADMIN </a></li>
				<?php
					}
					else
					{
						if($_SESSION['login_status'] == "Logged in as employee")
						{
						?>
							<li><a style="color: forestgreen; background-color: forestgreen;" href ="">_________________________________________________________________</li>
							<li><a href="t2_logout.php">Logout </a></li>
						<?php
						}
						else
							{
						?>
								<li><a style="color: forestgreen; background-color: forestgreen;" href ="">_________________________________________________________________</li>
								<li><a href="t2_login.php">Login </a></li>
						<?php
							}
						
					}
						?>
            </ul> <hr>
        <br />
    </div>
	
	<main>
	
<?php
	define ("FILE_AUTHOR", "Christopher Courts");

	include "ErrorHandler.php";
	
	require("../connect_db.php");
	
	$error_message = "";
	
	if(isset($_POST['username']))
	{
		$username = $_POST['username'];
	}
	else
	{
		$username = "";
	}
	
	if(isset($_POST['password']))
	{
		$password = $_POST['password'];
	}
	else
	{
		$password = "";
	}
	
	if(isset($_SESSION['login_status']))
	{
		$login_status = $_SESSION['login_status'];
	}
	else
	{
		$login_status = "Not logged in";
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		if(trim($username) == "")
		{
			$error_message = "Enter a username!";
		}
		else
		{
			if(ctype_alnum($username) == false)
			{
				$error_message = "Enter a valid username!";
			}
			else
			{
				if(trim($password) == "")
				{
					$error_message = "Enter a password!";
				}
				else
				{
					if(ctype_alnum($password) == false)
					{
						$error_message = "Enter a valid password!";
					}
				}
			}
		}
		if($error_message == "")
		{
			$q = "select * from t2_users where username = '$username' and password = '$password'";
			
			$r = mysqli_query($dbc, $q);
			
			if($r)
			{
				if(mysqli_num_rows($r) == 0)
				{
					$error_message = "Invalid username/password combination";
				}
			}
			else
			{	
				$error_message = "Invalid username/password combination";
			}
			$q2 = "select role from t2_users where username = '$username'";
			$r2 = mysqli_query($dbc, $q2);
			
			$row = mysqli_fetch_array($r2);
			$role = $row[0];
		}
	}
	
	echo "<br> " . $login_status;
	
	if($error_message != "")
	{
		echo "<form action = '" . $_SERVER['SCRIPT_NAME'] . "' method = 'POST'>";
		echo "<br> Enter your username <input type = 'text' name = 'username'>";
		echo "<br> Enter your password <input type = 'password' name = 'password'>";
		
		echo "<br> <input type = 'submit' value = 'Submit'>";
		echo "</form>";
	}
	
	if(isset($error_message))
	{
		echo "<p style = 'color:red;'> $error_message </p>";
	}
	
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
		echo "<form action = '" . $_SERVER['SCRIPT_NAME'] . "' method = 'POST'>";
		echo "<br> Enter your username <input type = 'text' name = 'username'>";
		echo "<br> Enter your password <input type = 'password' name = 'password'>";
		
		echo "<br> <input type = 'submit' value = 'Submit'>";
		echo "</form>";
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" && $error_message == "")
	{
		$_SESSION['login_status'] = "Logged in as $role";
		
		echo "<br><p><b> Welcome, $username!</b></p>";
		echo "<h1> Press Home button to return to homepage";
		
		date_default_timezone_set("America/New_York");
		echo "<p><em>";
		echo "<br> You logged in on " . date("D n/j/Y");
		echo "<br> at " . date("h:i:sa");
		echo "</em></p>";
	}
	
	echo "<hr>";
	
	include "footer.php";