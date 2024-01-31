<?php
$family = array( 'Julien', 'Fanny', 'Pierre', 'Betty' ); 
print_r($family);
echo "$family[0]";
?>  
<br> 
<?php
$family = array( 'Julien', 'Fanny', 'Pierre', 'Betty' ); 
echo '<pre>';
print_r($family);
echo '</pre>';
var_dump($family);
array_push($family, 'England');
$family[] = 'England';

$me = array(
    'firstname' => ['Julien','freddy' ],
    'lastname' => array('Baiwir', 'Salomon'),
    'adress' => 'rue du champ',
    'city' => 'Charleroi',
);

$me ['hobbies'] = ['football', 'playsation'];


$mother = array(
    'firstname' => 'Betty',
    'lastname' => 'Baiwir',
    'adress' => 'rue du champ',
    'city' => 'Marseille',
    'hobbies' => array('baseball','rugby'),
);

$me ['mother'] = $mother;
$me ['hobbies'][] ='Taxidermie';

echo '<pre>';
print_r($me);
echo '</pre>';

$hobbiescount = count($me['hobbies']);
$totalhobcount = count($me['hobbies']) + count($mother['hobbies']);
echo $hobbiescount;
echo $totalhobcount;

$mother ['firstname'] = 'Durant';



$my = array('baseball','rugby','tennis');
$soulmate = array( 'baseball','rugby', 'ping-pong');


$possible_hobbies_via_intersection = array_intersect($my, $soulmate);
$possible_hobbies_via_merge = array_merge($my, $soulmate);

echo '<pre>';
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';
?>