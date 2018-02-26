<?php
    
    function displayDice($randomValue) {
        global $dice; //uses variable that is outside of the function
        
        echo "<div id='output'>";
        switch ($randomValue) {
            case 0: $dice = "dice1";
                break;
            case 1: $dice = "dice2";
                break;
            case 2: $dice = "dice3";
                break;
            case 3: $dice = "dice4";
                break;
            case 4: $dice = "dice5";
                break;
            case 5: $dice = "dice6";
                break;
        }
        
        echo "<img class='dice' src='img/$dice.png' width='100px' alt='$dice' />";
    }
    
    function displayPoints($randomValue1, $randomValue2) {
        $txtType = $_REQUEST['txtType'];
        $num = $_REQUEST['num'];
        $numBet = $_REQUEST['numBet'];
        echo "<h3><br/> Betting $numBet point(s) for a $txtType of $num! <br/></h3>";
        $sum = "Sum";
        $double = "Double";
        
        echo "<div id='outcome'>";
        if ($txtType == $sum) {
            $result = $randomValue1 + $randomValue2 + 2;
            
            if ($num == $result) {
                $numBet=$numBet * 2;
                echo "<h2> You won $numBet points! </h2>";
            } else {
                echo "<h2> Try Again!</h2>";
            }
        }
        
        if ($txtType == $double) {
            if ($randomValue1 == $randomValue2) {
                if ($num == $randomValue1 + 1) {
                    $numBet=$numBet * 3;
                    echo "<h2> You won $numBet points! </h2>";
                } else {
                    echo "<h2> Try Again!</h2>";
                }
            } 
        }
    }
    
    function play () {
        echo "<img class='table' src='img/craps_table_clipart.png' width='100px' alt='$dice' />";
        for ($i=1; $i < 3; $i++) {
            ${"randomValue" . $i} = rand(0,5);
            displayDice(${"randomValue" . $i}, $i);
        }
        displayPoints($randomValue1, $randomValue2);
    }

?>