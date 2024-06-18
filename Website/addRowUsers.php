<!DOCTYPE html>
<!--    addRow.php   
    11/10/2021 BD Original Program 
    -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Adding a User</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <header>
        <h1> Add another User to the Users Table </h1>
    </header>
    <hr>

    <main>

<?php
    define ("FILE_AUTHOR", "BASHIR DAHIR");
    include "ErrorHandler.php";
    require "..\connect_db.php";
    
    #---------- Initialize some varibales ---------#

    $error_message="";                         # set this variable during input validation 

    if (isset($_POST['User_ID'])){
        $User_ID = $_POST['User_ID'];
    }
    else {
        $User_ID = "";
    }

    if (isset($_POST['Role'])){
        $Role = $_POST['Role'];
    }
    else {
        $Role = "";
    }
    if (isset($_POST['Username'])){
        $Username = $_POST['Username'];
    }
    else {
        $Username = "";
    }
    if (isset($_POST['Password'])){
        $Password = $_POST['Password'];
    }
    else {
        $Password = "";
    }
    if (isset($_POST['First_Name'])){
        $First_Name = $_POST['First_Name'];
    }
    else {
        $First_Name = "";
    }
    if (isset($_POST['Last_Name'])){
        $Last_Name = $_POST['Last_Name'];
    }
    else {
        $Last_Name = "";
    }
    if (isset($_POST['Email'])){
        $Email = $_POST['Email'];
    }
    else {
        $Email = "";
    }
    if (isset($_POST['Phone'])){
        $Phone = $_POST['Phone'];
    }
    else {
        $Phone = "";
    }

    #-----------Input Validation ------------
    // Input Validation for User name
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        if (trim($Role) == ""){
            $error_message = 'Role must not be blank!';
        }
        else if (trim($Username) == ""){
            $error_message = 'Username must not be blank!';
        }
        else if (trim($Password) == ""){
            $error_message = 'Password must not be blank!';
        }
        else if (trim($First_Name) == ""){
            $error_message = 'First_Name must not be blank!';
        }
        else if (trim($Last_Name) == ""){
            $error_message = 'Last_Name must not be blank!';
        }
        else if (trim($Email) == ""){
            $error_message = 'Email must not be blank!';
        }
        else if (trim($Phone) == ""){
            $error_message = 'Phone must not be blank!';
        }
        

    }

    // error meassages for user name and password 
    echo "<p style='color:red;'> " . $error_message . "</p>";

    
    if ($_SERVER['REQUEST_METHOD'] == "GET" || $error_message != ""){
        //Form to process differnet sort options 
        echo "<h1> Please fill the next form to insert a new user </h1>";
        echo "<form action='" . $_SERVER['SCRIPT_NAME'] . "' method='POST'>";
        //echo "<br> Enter your User_ID (numbers) <input type='text' name='User_ID' value=''>";
        echo "Select your Role <select name = 'Role'>";
            echo "<option value = 'superadmin'> superadmin </option>";
            echo "<option value = 'admin'> admin </option>";
            echo "<option value = 'host'> host </option>";
            echo "<option value = 'employee'> employee </option>";
            echo "<option value = 'no role'> no role </option>";
        echo "</select>";

        echo "<br> Enter your Username (maximum of 35 characters) <input type='text' name='Username' value='' maxlength = '35'>";
        echo "<br> Enter your Password (maximum of 35, mix of letters and numbers) <input type='password' name='Password' value='' maxlength = '35'>";
        echo "<br> Enter your First_Name (maximum of 35 characters)<input type='text' name='First_Name' value='' maxlength = '35'>";
        echo "<br> Enter your Last_Name (maximum of 35 characters)<input type='text' name='Last_Name' value='' maxlength = '35'>";
        echo "<br> Enter your Email (maximum of 60 characters) <input type='text' name='Email' value='' maxlength = '60'>";
        echo "<br> Enter your Phone (maximum of 25 characters)<input type='text' name='Phone' value='' maxlength = '25'>";
            
        

        echo     "<br><br> <input type='submit' value='Submit!' style='color: white; background: blue;'>";

        
            
        echo "</form>";
    } 
    else if ($_SERVER['REQUEST_METHOD'] == "POST" || $error_message == ""){
            $q = "INSERT INTO t2_users (Role, Username, Password, Hash_Password, First_Name, Last_Name, Email, Phone)
                        VALUES ('$Role', '$Username', '$Password', null, '$First_Name', '$Last_Name', '$Email', '$Phone')";
            $r = mysqli_query ($dbc, $q);   
   
            if ($r){
                echo "<br> <h1 style='color: green';> Thank you for inserting the new user information. </h1><br>";
                echo "<a href='Display Users Table - Kiwi Smartphone Service.php'> Display Updated Users Table </a>";
            }
            else {
                if (mysqli_error($dbc) != "") {
                echo "<h1 style='color: red';> Please try again! </h1>";
                echo "<h1 style='color: red';> for more information click on the following link </h1>";
                //echo "<a href = '" . mysqli_error($dbc) . "'> ERROR </a>";
                echo "<a href = 'sqlError.php'> ERROR </a>";
                $sql_error = mysqli_error($dbc);
                }
            }
    }
    

   
    
   
    include "footer.php";

    
?>

    </main>
    
</body>
</html>