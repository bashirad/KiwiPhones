<!-- Benjamin Fiore  Display Manufacturers Table - Kiwi Smartphone Serive.php -->
<!-- 10/30/2021 BF Original Program -->

<!DOCTYPE html>
<html lang="en">
<?php
	session_start();
?>
<head>
    <title> Display Manufactuer Information - Kiwi Smartphone Service </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css" /> 
</head>

<body>
    <header> 
        <h1 style="text-align: center;"> List of KiWi Manufacturer Information </h1>
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
            define ("FILE_AUTHOR", "Benjamin Fiore");

            if (isset($_POST['sort']))
			{
                $sort_type = " ORDER BY " . $_POST['sort'];
            }
            else 
			{
                $sort_type = "";
            }
            

            echo "<hr> <br><br>";        
            display_t2_manufacturers($sort_type);



            function display_t2_manufacturers($sort_type) 
			{
                require("../connect_db.php");
                $q = "SELECT * FROM t2_manufacturers" . $sort_type;
                
                $r = mysqli_query($dbc, $q);
                
                echo "<table border = '2', class = 'center'>";
                echo "<th> Manufacturer_ID </th>";
                echo "<th> Manufacturer_Name </th>";
                echo "<th> Shipping Address </th>";
                echo "<th> Contact First Name </th>";
                echo "<th> Contact Last Name </th>";
                echo "<th> Contact Email </th>";
                echo "<th> Last Shipment Sent </th>";

                if ($r) 
				{
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
                                . $row[5] . " </td><td>" 
                                . $row[6] . " </td><td>"
                                . $row[7] . " </td><td>"
                                . $row[10] . " </td><td>"
								. "<a href='deleteManufact.php?Manufacturer_ID=$row[0]&Active=N' style= 'color: red';> Delete </a>" . "</td>";  
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
                            . $row[5] . " </td><td>" 
                            . $row[6] . " </td><td>"
                            . $row[7] . " </td><td>"
                            . $row[10] . " </td>";
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


            if($_SESSION['login_status'] == "Logged in as employee")
			{
				echo "<form action='" . $_SERVER['SCRIPT_NAME'] . "' method='POST'>";
				echo "<input type='radio' name='sort' value='manufact_id'> Manufacturer_ID";
				echo "<input type='radio' name='sort' value='manufacturer_name'> Manufacturer_Name";
				echo "<input type='radio' name='sort' value='shipping_address'> Shipping_Address";
				echo "<input type='radio' name='sort' value='contact_first_name'> Contact_First_Name";
				echo "<input type='radio' name='sort' value='contact_last_name'> Contact_Last_Name";
				echo "<input type='radio' name='sort' value='contact_email'> Contact_Email";
				echo "<input type='radio' name='sort' value='contact_phone'> Contact_Phone";
				echo "<input type='radio' name='sort' value='last_shipment_sent'> Last_Shipment_Sent";
				echo "<input type='radio' name='sort' value='Active'> Active";
				
				echo "<br><br> <input type='submit' value='Sort' style='color: white; background: blue;'>";
				echo "</form>";
			
				echo "<br><button><a href='addRowManufact.php'>ADD NEW</a></button>";
			}
			
            echo "<hr>";
            include("footer.php");
        ?>
        </main>

</body>
</html>