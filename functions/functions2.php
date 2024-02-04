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
function generateString($min, $max){
   $min = 1;
   $max1 = rand(2,5);
   $max2 = rand(2,15);


}


 ?>
<br>
<br>