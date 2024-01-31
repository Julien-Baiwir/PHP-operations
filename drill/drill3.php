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

<?php
// 8. "L'école, c'est nul !" Exercice

  if (isset($_GET['note'])) {
    $note = $_GET['note'];

    if($note >= 19 && $note <= 20) {
      $message = "Trop beau pour être vrai : affrontez le tricheur !";
    }elseif($note >= 15){
      $message = "Bravo, bravissimo !";
    }elseif($note >= 11){
      $message = "Pas mal !";
    }elseif($note == 10){
      $message = "À peine assez !";
    }elseif($note >= 5){
      $message = "Ceci n'est pas suffisant. Il faut étudier davantage.";
    }else{
      $message = "Ce travail est vraiment mauvais. Quel gamin idiot !";
    }
    echo $message;
  }

?>


<form method="GET" action="">
  <label for="note">Entrez la note de l'élève :</label>
  <input type="number" name="note" min="0" max="20" required>

  <input type="submit" name="submit" value="Noter">
</form>