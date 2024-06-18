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
		<h1> Logout </h1>
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
	echo "<form action='t2_logoutAction.php' method = 'POST'>";
		echo "<br> " . $_SESSION['login_status'];
		echo "<br> <input type = 'submit' value = 'Submit'>";	
		echo "<h1> click Submit button to logout </h1>";
	echo "</form>";
?>
	</main> <br>


        <footer>
            <?php
                include("footer.php");
            ?>
        </footer>
    </body>

    </html>