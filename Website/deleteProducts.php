<!DOCTYPE html>
<!--------------------------------------------------------------------
-----------
----------- PrintSetActive.php - sets active column ------------------
--------------------------------------------------------------------->
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head> 
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
<hr>
<h1> ATTEMPTING TO DELETE A PRODUCT </h1>
<h1> ... </h1>
<?php
    define ("FILE_AUTHOR", "BASHIR DAHIR");
    include ("ErrorHandler.php");

    if (isset($_GET["Product_ID"])){
        $id = $_GET["Product_ID"];
    }
    else {
        echo "No Product_ID specified!";
        Die;
    }

    if (isset($_GET["Active"])){
        $active = $_GET["Active"];
    }
    else {
        echo "No Active value specified!";
        Die;
    }
    
    require("../connect_db.php");
    

    $q = "UPDATE t2_products SET Active='" . $active . "'
                            WHERE Product_ID = $id";
    $r = mysqli_query($dbc, $q);

    if ($r ) {
       echo "<h1 style='color: red';> You successfully deleted a product " . $id . "</h1>";
       echo "<a href='Display Products Table - Kiwi Smartphone Service.php'> Display Updated Prpducts Table </a>";

    }
    else {
        echo "<li>" . mysqli_error( $dbc ) . "</li>";
    }

    
    include "footer.php";
  ?>

    
</main>