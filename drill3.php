<?php

if (isset($_GET['point'])){
    $point = $_GET['point'];
    if ($point<=4){
        echo 'This work is really bad. What a dumb kid! ';
    } else if ($point>=5 and $point<=9){
        echo 'This is not sufficient. More studying is required.';
    } else if ($point==10){
        echo 'Barely enough!';
    } else if ($point>=11 and $point<=14){
        echo 'Not bad!';
    } else if ($point>=15 and $point<=18){
        echo 'Bravo, bravissimo!';
    } else if ($point==19 or $point==20){
        echo 'Too good to be true : confront the cheater!';
    }
}
?>
<form method="get">
    <input type="number" name="point" max="20" min="0">
    <input type="submit" value="result">
</form>

