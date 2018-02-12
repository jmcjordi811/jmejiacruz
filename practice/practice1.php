<?php

    function getRandColor() {
        echo "background-color: rgba(".rand(0, 255).", ".rand(0, 255).", ".rand(0, 255).", ".(rand(0, 100)/100).");";
    }


?>


<!DOCTYPE html>
<html>
    <head>
        <title> Random Color </title>
        
        <style>
        
            body {
                
                <?php
                
                    getRandColor();
                
                ?>
                
            }
            
            h1 {
                
                color: <?php getRandColor() ?>;
                background-color: <?= getRandColor() ?>;
                
            }
            
            h1 {
                
                color: <?php getRandColor() ?>;
                background-color: <?= getRandColor() ?>;
                
            }
            
            
        </style>
        
    </head>

    <body>
        <h1>Welcome!</h1>
        
        <h2> Random Background Color</h2>

        <footer>
            
            
        </footer>
        
    </body>

</html>