<?php
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

foreach($pronouns as $key){
    $verbe = ($key == 'He/She') ? 'codes' : 'code';

    echo $key.' '.$verbe.'<br>';
}

while ($number <= 120){;
$number ++ ;
echo $number. ' ';
// echo $number.' <br>';
};

for ($number = 1; $number <=120; $number++){
    echo $number. ' ';
}


$prenom = array('Julien', 'Alice', 'Hanen', 'Winona', 'Jeremy', 'Cassidy' );
foreach($prenom as $key){
    echo $key. ' '.'<br>';
}

$countries = array('France', 'Belgium', 'England');

if (isset($_GET['countries'])) {
    $selectedCountry = $_GET['countries'];
    echo "You chose $selectedCountry";
}
?>

<form action="" method="GET">
    <label for="countries">Select a country:</label>

    <select name="countries" id="countries">
        <?php foreach ($countries as $country) : ?>
            <option value="<?php echo $country; ?>"><?php echo $country; ?></option>
        <?php endforeach; ?>
    </select>

    <br>
    <input type="submit" value="Validate">
</form>



<?php
$pays = array(
    'BE' => 'Belgique',
    'FR' => 'France',
    'DE' => 'Allemagne',
    'IT' => 'Italie',
    'ES' => 'Espagne',
    'GB' => 'Royaume-Uni',
    'GB-SCT' => 'Écosse',
    'PT' => 'Portugal',
    'IE' => 'Irlande',
    'GR' => 'Grèce'
);
if (isset($_GET['pays'])) {
    $paysSelectionne = $_GET['pays'];
    echo "Vous avez sélectionné le pays : $paysSelectionne";
}
?>
<form action="" method="get">
    <label for="pays">Choisissez un pays :</label>

    <select name="pays" id="pays">

        <?php foreach ($pays as $diminutif => $complet) : ?>
            <option value="<?php echo $diminutif; ?>"> <?php echo $complet; ?></option>
        <?php endforeach; ?>
    </select>

    <br>

    <input type="submit" value="Soumettre">
</form>


