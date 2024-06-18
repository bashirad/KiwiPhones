<!-------------------------------------------------------    
----    
----    10a-Courts.html
----    10/30/2021 CC Original Program
-------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">
<?php
	session_start();
?>
<head>
    <title> KiWi Products Information </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css" /> 
</head>

<body>
    <header> 
        <h1 style="text-align: center;"> List of KiWi Store Products </h1>
    </header>
    <hr>
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
        //Get the passed sort type from input form 
        if ( isset($_POST['sort'])){
            $sort_type = " ORDER BY " . $_POST['sort'];
        }
        
        else {
            $sort_type = "";
        }
/*******ALL PROGRAM EXECUTION**************************************************************************************************/
        echo "<hr> <br><br>";        
        display_t2_products($sort_type);

/*******Creating a function that selects all from t2_users*********************************************************************/
       function display_t2_products($sort_type) {
            require("../connect_db.php");
            $q = "select * from t2_products " . $sort_type; //We put command in q
            $r = mysqli_query($dbc, $q);    // We run the command
            
            echo "<table border = '2', class = 'center'>";
            echo "<th> Product_ID </th>";
            echo "<th> Model </th>";
            echo "<th> Manufacturer ID </th>";
            echo "<th> Minimum Quantity </th>";
            echo "<th> Quantity </th>";
            echo "<th> Last Shipment Date </th>";
            echo "<th> Short Product Description </th>";
            echo "<th> Price </th>";
            
            if($_SESSION['login_status'] == "Logged in as employee")
			{
				echo "<th> Active </th>";
			}
        

            if ($r ) {
                while ($row = mysqli_fetch_array($r , MYSQLI_NUM)) 
				{
                    if($_SESSION['login_status'] == "Logged in as employee")
					{
						if ($row[1] <> 'N') 
						{
							echo "<tr>";
							echo "<td> " 
							. $row[0] . " </td><td>" 
							. $row[2] . " </td><td>" 
							. $row[3] . " </td><td>" 
							. $row[4] . " </td><td>" 
							. $row[5] . " </td><td>" 
							. $row[6] . " </td><td>" 
							. $row[7] . " </td><td>"
							. $row[9] . " </td><td>"
							. "<a href='deleteProducts.php?Product_ID=$row[0]&Active=N' style= 'color: red';> Delete </a>" . "</td>";
							
							echo "</tr>";
						}
					}
					else
					{
						if ($row[1] <> 'N') 
						{
							echo "<tr>";
							echo "<td> " 
							. $row[0] . " </td><td>" 
							. $row[2] . " </td><td>" 
							. $row[3] . " </td><td>" 
							. $row[4] . " </td><td>" 
							. $row[5] . " </td><td>" 
							. $row[6] . " </td><td>" 
							. $row[7] . " </td><td>"
							. $row[9] . " </td>";
							
							echo "</tr>";
						}
					}
                }
            }

            else 
			{
                echo "<li>" . mysqli_error($dbc) . "</li>";
            }
            echo "</table>";
            echo "<br><br>";
    }
    //Form to process differnet sort options 
    if($_SESSION['login_status'] == "Logged in as employee")
	{
		echo "<form action='" . $_SERVER['SCRIPT_NAME'] . "' method='POST'>";

		echo "<input type='radio' name='sort' value='Product_ID'>     Product_ID";
		echo "<input type='radio' name='sort' value='Model'>     Model";
		echo "<input type='radio' name='sort' value='Manufacturer_ID'>   Manufacturer_ID";
		echo "<input type='radio' name='sort' value='Min_Quantity'>    Min_Quantity";
		echo "<input type='radio' name='sort' value='Quantity'>    Quantity";
		echo "<input type='radio' name='sort' value='Last_Shipment_Date'>    Last_Shipment_Date";
		echo "<input type='radio' name='sort' value='Price'>    Price";
		echo "<input type='radio' name='sort' value='Active'>    Active";
		
		echo     "<br><br> <input type='submit' value='Sort it!' style='color: white; background: blue;'>";
		echo "</form>";

		echo "<br><button ><a href='addRowProducts.php'>Add a New Manufacturer</a></button>";	
	}
	
    echo "<hr>";
    include("footer.php");
    ?>

    </main>
</body>
</html>