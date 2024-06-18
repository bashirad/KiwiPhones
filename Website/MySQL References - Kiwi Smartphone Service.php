<!DOCTYPE html>
<!-- A06-Dahir.html     Assignment 6 - HTML Reference 
10/10/2021 BD Original Program-->

<html lang="en">

<?php
    define(FILE_AUTHOR, "Christopher Courts, Bashir Dashir, and Benjamin Fiore");
?>

<head>
    <title> Webpage for MySQL Reference </title>
    <meta charset="utf-8">
    <style>
        table 
        {background-color: darkseagreen; color: black;
        border-collapse: collapse; border: 1px;
        font-family: Arial; font-weight: normal; 
        margin-right:auto; margin-left: auto;
        }
        th 
        {background-color: grey;
        font-size: 17px; font-weight: bold;
        }
        td
        {font-size: 15px; padding-left: 5px; padding-right: 5px;
        }
        h1
        {color: red; text-align: center;
        }
        h2 
        {color: red; text-align: center;
        }
        tr:nth-child(even) {background-color: black; color: white;"}
    </style>
</head>
<body style="background-color: black; color: white;">
    <header> 
        <h1> My MYSQL Reference Page </h1>   
    </header>
    <hr>
    <main>
                                            <h2> DATABASE COMMANDS </h2>
        <table border="1"> 
            <tr>
                <th> Commands </th>
                <th> Syntax </th>
                <th> Notes </th>
            </tr>
            <tr>
                <td> Creating database </td>
                <td> CREATE DATABASE [database name]; </td>
                <td> Some times 'if not exists' is added </td>
            </tr>
            <tr>
                <td> Display all databases </td>
                <td> SHOW DATABASES; </td>
                <td> We can see all databases that exist </td>
            </tr>
            <tr>
                <td> Switching between databases </td>
                <td> USE [database name]; </td>
                <td> We can switch to another database </td> 
            </tr>
            <tr>
                <td> Deleting a database </td>
                <td> DROP DATABASE [database name]; </td>
                <td> We can delete a database </td>
            </tr>
        </table>

                                            <h2> TABLE COLUMN COMMANDS </h2>

        <table border="1"> 
            <tr>
                <th> Command </th>
                <th> Syntax </th>
                <th> Notes </th>
            </tr>
            <tr>
                <td> Creating a table with one column </td>
                <td> CREATE TABLE [table name] ( [column1_name data_type]); </td>
                <td> We can just add more columns after the first </td>
            </tr>
            <tr>
                <td> Deleting the table </td>
                <td> DROP TABLE [table_name]; </td>
                <td> We can delete a table </td> 
            </tr>
            <tr>
                <td> Display specific columns </td>
                <td> SHOW COLUMNS FROM [table name]; </td>
                <td> We can view desired columns </td>
            </tr>
            <tr>
                <td> Display specific columns </td>
                <td> SHOW COLUMNS FROM [table name]; </td>
                <td> We can view desired columns </td>
            </tr>
            <tr>
                <td> Delete specific columns </td>
                <td> ALTER TABLE [table name] DROP COLUMN [column_name]; </td>
                <td> We can delete undesired columns </td>
            </tr>
            <tr>
                <td> Add specific columns </td>
                <td> ALTER TABLE [table name] ADD COLUMN [column_name]; </td>
                <td> We can add desired columns </td>
            </tr>
            <tr>
                <td> Creating a table with two columns </td>
                <td> CREATE TABLE [table name] ( [column1_name data_type], <br>
                    [column2_name data_type]); </td>
                <td> We can just add more columns after the first </td>
            </tr>
            <tr>
                <td> Creating a table with three column </td>
                <td> CREATE TABLE [table name] ( [column1_name data_type], <br>
                    [column2_name data_type], [column3_name data_type]); </td>
                <td> We can just add more columns after the first </td>
            </tr>
            <tr>
                <td> Creating a table with four column </td>
                <td> CREATE TABLE [table name] ( [column1_name data_type], <br>
                    [column2_name data_type], [column3_name data_type], <br> 
                    [column4_name data_type]); </td>
                <td> We can just add more columns after the first </td>
            </tr>
            <tr>
                <td> Creating a table with five column </td>
                <td> CREATE TABLE [table name] ( [column1_name data_type], <br>
                    [column2_name data_type], [column3_name data_type], <br> 
                    [column4_name data_type], [column5_name data_type]); </td>
                <td> We can just add more columns after the first </td>
            </tr>
        </table>

                                        <h2> TABLE DATA COMMANDS </h2>
        <table border="1"> 
            <tr>
                <th> Commands </th>
                <th> Syntax </th>
                <th> Notes </th>
            </tr>
            <tr>
                <td> Adding one row to the table </td>
                <td> INSERT INTO [table_name] VALUES (column# value ... ); </td>
                <td> We can add one row to the table </td>
            </tr>
            <tr>
                <td> Adding two rows to the table </td>
                <td> INSERT INTO [table_name] VALUES (column# value ... ); <br>
                    INSERT INTO [table_name] VALUES (column# value ... ); 
                </td>
                <td> We can add two rows to the table </td>
            </tr>
            <tr>
                <td> Counting the rows </td>
                <td> SELECT COUNT(*) FROM [table_name]; </td>
                <td> We can view the number of rows/records </td> 
            </tr>
            <tr>
                <td> Display all content of a table </td>
                <td> UPDATE [table_name] SET [data] WHERE [column_name] = condition; </td>
                <td> We can update the table content </td>
            </tr>
            <tr>
                <td> Update the content of a table </td>
                <td> SELECT * FROM [table_name]; </td>
                <td> We can view the table content </td>
            </tr>
            <tr>
                <td> Delete the content of a table </td>
                <td> DELETE FROM [table_name] WHERE [column_name] = 'data; </td>
                <td> We can delete the table content </td>
            </tr>
        </table>

    </main>

    <footer>
            <?php
                include("footer.php");
            ?>
    </footer>
    
</body>
</html>