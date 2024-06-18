<!-------------------------------------------------------    
----    
----    10a-Bashir.html
----    10/30/2021 BD Original Program
-------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">

<?php
	session_start();
?>

<head>
    <title> KiWi User Information </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css" /> 
</head>

<body>
    <header> 
        <h1 style="text-align: center;"> List of KiWi User Information </h1>
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
        define ("FILE_AUTHOR", "Bashir Dahir");

        //Get the passed sort type from input form 
        if ( isset($_POST['sort'])){
            $sort_type = " ORDER BY " . $_POST['sort'];
        }
        
        else {
            $sort_type = "";
        }

/*******ALL PROGRAM EXECUTION**************************************************************************************************/
        echo "<hr> <br><br>";        
        display_t2_users($sort_type);

/*******Creating a function that selects all from t2_users*********************************************************************/
        function display_t2_users($sort_type) {
            require("../connect_db.php");
            $q = "select * from t2_users ". $sort_type; //We put command in q
        
            $r = mysqli_query($dbc, $q);    // We run the command
            
            echo "<table border = '2', class = 'center'>";
            echo "<th> User_ID </th>";
            echo "<th> Role </th>";
            echo "<th> Username </th>";
            echo "<th> Password </th>";
            echo "<th> First_Name </th>";
            echo "<th> Last_Name </th>";
            echo "<th> Email </th>";
            echo "<th> Phone </th>";
            echo "<th> Account_Locked_Change_Date </th>";
            echo "<th> Active </th>";

            if ($r ) {
                while ($row = mysqli_fetch_array($r , MYSQLI_NUM)) {
                    if ($row[1] <> 'N') {
                        echo "<tr>";
                        echo "<td> " 
                        . $row[0] . "</td><td>" 
                        . $row[2] . " </td><td>" 
                        . $row[3] . " </td><td>" 
                        . $row[4] . " </td><td>" 
                        . $row[6] . " </td><td>"
                        . $row[7] . " </td><td>"
                        . $row[8] . " </td><td>"
                        . $row[9] . " </td><td>"
                        . $row[10] . " </td><td>"
                        . "<a href='deleteUsers.php?User_ID=$row[0]&Active=N' style= 'color: red';> Delete </a>" . "</td>";  
                        echo "</tr>";
                    }
                }
            }
            else {
                echo "<li>" . mysqli_error($dbc) . "</li>";
            }
            echo "</table>";
            echo "<br><br>";
    }
            //Form to process differnet sort options 
            echo "<form action='" . $_SERVER['SCRIPT_NAME'] . "' method='POST'>";

            echo "<input type='radio' name='sort' value='User_ID'>     User_ID";
            echo "<input type='radio' name='sort' value='Role'>     Role";
            echo "<input type='radio' name='sort' value='Username'>   Username";
            echo "<input type='radio' name='sort' value='Password'>    Password";
            echo "<input type='radio' name='sort' value='First_Name'>    First_Name";
            echo "<input type='radio' name='sort' value='Last_Name'>    Last_Name";
            echo "<input type='radio' name='sort' value='Email'>    Email";
            echo "<input type='radio' name='sort' value='Phone'>    Phone";
            echo "<input type='radio' name='sort' value='Account_Locked_Change_Date'>    Account_Locked_Change_Date";
            echo "<input type='radio' name='sort' value='Active'>    Active";
            
            echo     "<br><br> <input type='submit' value='Sort it!' style='color: white; background: blue;'>";
            echo "</form>";
        
            echo "<br><button><a href='addRowUsers.php'>ADD NEW</a></button>";
        echo "<hr>";
        include("footer.php");
    ?>

    </main>
</body>
</html>
