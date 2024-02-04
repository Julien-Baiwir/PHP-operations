<?php 

$name = 'émile';
function firstLetter($name) {
    return mb_convert_case($name, MB_CASE_TITLE, 'UTF-8');
}
$result = firstLetter($name);
echo $result;
?>


<?php 
echo 'Exercice 2';
echo "</br>";
echo "</br>";
echo date("Y");
echo "</br>";
echo date("d M Y H:i:s");
echo "</br>";
?>
<br>
<br>
<?php 
echo 'Exercice 3';
echo "</br>";
function sum($number1,$number2 ){
    $result= $number1 + $number2;
    return $result;
};
echo sum(6,4);
?>

<br>
<br>
<?php 
echo 'Exercice 5';
echo "</br>";

function sumy($number1, $number2) {
    if (is_numeric($number1) && is_numeric($number2)) {
        return $number1 + $number2;
    } else {
        return "Veuillez entrer des nombres valides.";
    }
}
?>
<br>
<br>

<br>
<br>
<?php 
echo 'Exercice 5';
echo "</br>";
// $string = 'In code we trust';
// function clean($string){
//     $string2=  str_split($string);// ici on prend chaque lettre et on fait un array
//     return $string2;
// }
// $resultArray = clean($string);
// print_r($resultArray);  

// function separateWords($string) {
//     $words = preg_split('/[\s\p{P}]+/', $string, -1, PREG_SPLIT_NO_EMPTY);
//     return $words;
// }
// $resultArray = separateWords($string);
// echo '<pre>';
// print_r($resultArray);
// echo '</pre>';


function genererAcronyme($chaine) {
    $mots = explode(' ', $chaine);
    $acronyme = '';
foreach ($mots as $mot) {

    $lettre = preg_replace('/[^A-Za-z]/', '', $mot);
    if (!empty($lettre)) {
        $acronyme .= strtoupper($lettre[0]);
    }
}
return $acronyme;
}
$chaine = "La vie est belle !";
echo genererAcronyme($chaine);
?>
<br>
<br>



<br>
<br>
<?php 
// echo 'Exercice 6 replace($words)';
// echo "</br>";
// echo 'hello';

$words = ["caecotrophie", "chaenichthys", "microsphaera", "sphaerotheca"];

function replace($words){
    for ($i = 0; $i < count($words); $i++){
        $words[$i] = str_replace("ae", "æ", $words[$i]);
    }
    return $words;  
}

echo '<pre>';
print_r(replace($words));
echo '</pre>';


?>
<br>
<br>

<br>
<br>
<?php 
echo 'Exercice 7 notice / warning';
echo feedback("Incorrect email address", "error");
$userAgent = $_SERVER['HTTP_USER_AGENT'];

echo "User Agent: $userAgent";
?>
<br>
<br>