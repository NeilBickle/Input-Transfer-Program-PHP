<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Details</title>
    </head>
    <body>
        <?php $FirstName = $SecondName = $Email = ""; ?>
        <?php $Input = $Input1 = $Input2 = ""; ?>
        <form action="index.php" method="get">
            <table>
                <tr>
                    <td><h1>Input Transfer Program</h1></td>
                </tr>
                <tr>
                    <td><b>First Name:</b></td>
                    <td><input id="txtFirstName" type="text" name="FirstName" value="<?php echo $FirstName;?>"></td><br><br>
                </tr>
                <tr>
                    <td><b> Second Name:</b></td>
                    <td><input type="text" name="SecondName" value="<?php echo $SecondName;?>"></td><br><br>
                </tr>
                <tr>
                    <td><b>Email:</b></td>    
                    <td><input type="text" name="Email" value="<?php echo $Email;?>"></td><br><br>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Submit"></td><br><br>
                </tr>
            </table>            
        </form>
        <?php
              if (isset ($_GET['submit'])){
                $Input = $_GET['FirstName'];
                $Input1 = $_GET['SecondName'];    
                $Input2 = $_GET['Email']; 
            }            
        echo "<h2>Your Input:</h2>";
        echo $Input;
        echo "<br>";
        echo $Input1;
        echo "<br>";
        echo $Input2;
        echo "<br>";
        ?>
    </body>
</html>
