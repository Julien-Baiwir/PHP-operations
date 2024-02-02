<?php 
$str = 'This is going to be shuffled !';
$strArray = array('This', 'is', 'going', 'to', 'be', 'shuffled');
foreach ($strArray as &$element){
    $element = str_shuffle($element);
}
$resultStr = implode(' ', $strArray);
echo $resultStr;

//
$str= "According to a researcher (sic) at Cambridge University ";
$str= explode(" ", $str);
foreach ($str as $word){
echo str_shuffle($word)." ";
}
?>