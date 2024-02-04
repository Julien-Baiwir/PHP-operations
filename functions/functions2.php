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
// Volume of a cone which ray is 5 and height is 2 
$volume = 5 * 5 * 3.14 * 2 * (1/3);  
echo 'The volume of a cone which ray is 5 and height is 2 = ' . $volume . ' cm<sup>3</sup><br />';  
// Volume of a cone which ray is 3 and height is 4  
$volume = 3 * 3 * 3.14 * 4 * (1/3);  
echo 'The volume of a cone which ray is 3 and height is 4 = ' . $volume . ' cm<sup>3</sup><br />';  
 ?>