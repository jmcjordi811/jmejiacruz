<?php

    $cards = array("ace", "one", 2);
    //print_r($cards); //for debugging purposes, shows all elements in the array
    
    //echo $cards[0];
    
    $cards[] = "jack"; //adds new element at the end of the array
    array_push($cards, "queen", "king");
    
    $cards[2] = "ten";
    
    //print_r($cards);
    
    print_r($cards);
    echo "<hr>";
    $lastCard = array_pop($cards); //retrieves and REMOVES the last element in the array
    displayCards($lastCard);
    echo "<hr>";
    print_r($cards);
    
    unset($cards[1]); //removes element in array
    echo "<hr>";
    print_r($cards);
    
    
    $cards = array_values($cards); //re-indexes array
    echo "<hr>";
    print_r($cards);
    
    shuffle($cards);
    echo "<hr>";
    print_r($cards);
    echo "<hr>";
    
    $randomIndex = rand(0, count($cards)-1);
    displayCards($cards[$randomIndex]);
    echo "<hr>";
    
    function displayCards() {
        global $cards; //uses variable that is outside of the function
        
        echo "<img src='../challenge/challenge2/img/cards/clubs/$cards[2].png' alt='Ace card'/>";
    }
    
    displayCards();
   

?>


<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

    </body>
</html>