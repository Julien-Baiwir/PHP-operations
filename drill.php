<?php
// 1.1 Clean your room Exercise 

$room_is_filthy = true;

if( $room_is_filthy){
	echo "Yuk, Room is dirty : let's clean it up !";
	
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
};

// 1.2 Clean your room Exercise, improved

$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

$room_filthiness = $possible_states[0]; 

if($room_filthiness == "filthy"){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if($room_filthiness == "dirty"){
	echo "Yuk, Room is dirty : let's clean it up !";
} else if ($room_filthiness == "health hazard"){
	echo "Yuk, Room is a danger for your life: let's clean it up !";
} else {
	echo "Nothing to do, room is neat.";
}

echo '<br>';
// 2. Different greeting according to time 
date_default_timezone_set("Europe/Brussels");
$now = date("H:i");
echo $now , ' → ' ;

if ($now > "5:00 "and $now < "9:00"){
    echo 'Good morning !';
} else if ($now > "9:01" and $now < "12:00"){
    echo 'Good day !';
} else if ($now > "12:01" and $now < "16:00"){
    echo 'Good afternoon !';
} else if ($now > "16:01" and $now < "21:00"){
    echo 'Good evening !';
} else {
    echo 'Good night !';
};

echo '<br>';
echo '<br>';
// 3. Affichez un message d'accueil différent en fonction de l'âge de l'utilisateur.

if (isset($_GET['age'])){
    $gender = $_GET['gender'];
    $mothertongue = $_GET['mothertongue'];

    if ($_GET['age'] < 12){
        echo 'Hello kiddo!';

    } elseif ($_GET['age'] >= 12 and $_GET['age'] < 18){
        if ($gender == 'woman'){
            if($mothertongue == "yes") {
                echo 'Hello miss teenager!';
            } else {
                echo 'Bonjour Madame!';
            }
        } else{ 
			if ($mothertongue == "yes"){
                echo 'Hello mister teenager!';
            } else {
                echo 'Bonjour mister teenager!';
            }
        } 
    }
 
	elseif ($_GET['age'] >= 18 and $_GET['age'] < 115){
        if ($gender == "woman"){
            if($mothertongue == "yes") {
                echo 'Hello miss adult!';
            } else {
                echo 'Bonjour miss adult!';
            }
        } else {
            if ($mothertongue == "yes"){
                echo 'Hello mister adult!';
            } else {
                echo 'Bonjour mister adult!';
            }
        } 
    } elseif ($_GET['age'] >= 115){
        echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';
    }
};

echo '<br>';
?>

<form method="get">
	<label for="age">Age : </label> <input type="number" name="age">
    <br>
    <label for="gender">Gender → </label> man :<input type="radio" name="gender" value="man"> woman :<input type="radio" name="gender" value="woman">
    <br>
    <label for="mothertongue">Do you speek English? : </label>yes <input type="radio" name="mothertongue" value="yes">no<input type="radio" name="mothertongue" value="no">
    <br>
	<input type="submit" name="submit" value="Validate">
</form>
<br>





