<?php
    echo "EXERCICE 01 <br>";
    # EXERCICE 1: boucle qui affiche tous les nombres pairs jusqu'à 100
    for($i=0; $i<=100; $i+=2){
        echo($i)."<br><br>";
    };

    # EXERCICE 2: boucle qui affiche tous les nombres impairs jusqu'à 100.
    echo "EXERCICE 02 <br>";
    for($i = 1; $i < 100; $i+=2){
        echo "$i <br><br>";
    };

    #EXERCICE 3:
    
?>

<?php
    #EXERCICE 1:
    $nIndex = 0;
    $tableOf = 9;

    while ($nIndex <= 10) {
        echo "$nIndex * $tableOf = ".($nIndex*$tableOf)."<br>";
        $nIndex++;
    } 

    #EXERCICE 2:
    $userInput = $_GET["numberInput"];
    $sum = 0;
    $i = 1 ; 
    while ($i <= $userInput) {
        $sum += $i;
        $i++;
    }
    echo $sum;
    
    #EXERCICE 4:
    $lineAmount = $_GET[""];sd
?>