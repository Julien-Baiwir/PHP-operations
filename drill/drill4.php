<?php
// 8. "L'école, c'est nul !" Exercice

if (isset($_GET['note'])) {
    $note = $_GET['note'];

    switch ($note) {
        case $note < 5:
            echo "Trop beau pour être vrai : affrontez le tricheur !";
            break;
        case $note > 5:
            echo "Bravo, bravissimo jeremy est insupportable!";
            break;
        default:
            echo "Note égale à 5";
    }
}
// switch (true){}
?>

<form method="GET" action="">
  <label for="note">Entrez la note de l'élève :</label>
  <input type="number" name="note" id="note" min="0" max="20" required>

  <input type="submit" name="submit" value="Noter">
</form>





