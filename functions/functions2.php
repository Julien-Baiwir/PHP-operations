<?php
function feedback($message, $cssClass = "info") {
    $validClass = ['info','warning', 'error'];

    if (!in_array($cssClass, $validClass)) {
        $cssClass = 'info'; 
    }

    $formatMessage = "<div class='$cssClass'>$cssClass: $message</div>";

    return $formatMessage;
}

echo feedback("Incorrect email address", "error");
?>



<br>
<br>
<?php
$chaine = strtolower("STOP YELLING I CAN'T HEAR MYSELF THINKING!!");
echo $chaine;
 ?>


<br>
<br>
<?php
function calculate_cone_volume($rayon, $hauteur){
    $volume = (1/3) * 3.14 * $rayon * $rayon * $hauteur;
    $formattedVolume = number_format($volume, 2);
    return $volume = 'The volume of a cone which ray is  ' . $hauteur. ' and height is ' . $rayon .'= ' . $formattedVolume . ' cm<sup>3</sup><br />'; 
};
echo calculate_cone_volume(5,2);
 ?>
<br>
<br>


<br>
<br>
<?php
function generateRandomWord($minLength, $maxLength) {
    $allLetters = array_merge(range('a', 'z'), range('A', 'Z'));
    shuffle($allLetters);

    $length = rand($minLength, $maxLength);
    $randomWord = substr(implode('', $allLetters), 0, $length);

    return $randomWord;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $word1 = generateRandomWord(1, 5);
    $word2 = generateRandomWord(7, 15);
} else {
    $word1 = '';
    $word2 = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate a New Word</title>
</head>
<body>
    <h1>Generate a New Word</h1>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <p>Generated Words:</p>
        <p><?php echo $word1; ?></p>
        <p><?php echo $word2; ?></p>
    <?php endif; ?>

    <form method="post">
        <button type="submit">Generate</button>
    </form>
</body>
</html>


<br>
<br>