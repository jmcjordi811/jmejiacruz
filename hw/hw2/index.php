<?php
    include 'inc/functions.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Craps Table Game </title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
    </head>
    <body>
        <header>
            <h1> Welcome to Jordi's Craps Table </h1>
            <h2> Step right up! </h2>
        </header>
        
        <hr/>
        
        
        <form method="post">
            <table>
                <tr>
                    <td>"Sum" or "Double":</td>
                    <td><input type="text" id="txtType" name="txtType"/> </td>
                </tr>
                <tr>
                    <td>
                        Number: <br/>
                        (If Sum: Inputs 2-12) <br/>
                        (If Double: Inputs 1-6) <br/>
                        (Else: Error!)
                    </td>
                    <td><input type="number" id="num" name="num"/> </td>
                </tr>
                <tr>
                    <td>Bet Amount:</td>
                    <td><input type="number" id="numBet" name="numBet"/> </td>
                </tr>
                <tr>
                    <td><input type="submit" id="submit" name="submit" value="Submit"/> </td>
                </tr>
                <tr>
                    <?php
                    while (isset($_REQUEST['submit'])) {
                        $txtType = $_REQUEST['txtType'];
                        $num = $_REQUEST['num'];
                        $numBet = $_REQUEST['numBet'];
                        $sum = "Sum";
                        $double = "Double";
                        $num1 = 1;
                        $num2 = 2;
                        $num3 = 3;
                        $num4 = 4;
                        $num5 = 5;
                        $num6 = 6;
                        $num7 = 7;
                        $num8 = 8;
                        $num9 = 9;
                        $num10 = 10;
                        $num11 = 11;
                        $num12 = 12;
        
                        if ($txtType != $sum && $txtType != $double) {
                            echo "<h3>Error: Invalid Request!</h3>";
                            break;
                        } elseif ($txtType == $sum && $num != $num2 && $num != $num3
                            && $num != $num4 && $num != $num5 && $num != $num6
                            && $num != $num7 && $num != $num8 && $num != $num9
                            && $num != $num10 && $num != $num11 && $num != $num12) {
                            echo "<h3>Error: Invalid Request!</h3>";
                            break;
                        } elseif ($txtType == $double && $num != $num2 && $num != $num2 && $num != $num3
                            && $num != $num4 && $num != $num5 && $num != $num6) {
                            echo "<h3>Error: Invalid Request!</h3>";
                            break;
                        } else {
                            play();
                            break;
                        }
                    }
                    
                    ?>
                </tr>
            </table>
        </form>
        
        <footer>
            
            <hr>
            
            <figure id="logo">
                <img src="img/logo.png" alt="California State University Monterey Bay Otter logo" />
            </figure>
            
            CST 336: Internet Programming. 2018&copy; Mejia
            <br/>
            
            <strong>Disclaimer:</strong> This webpage is for academic purposes only.
            
        </footer>
    </body>
</html>