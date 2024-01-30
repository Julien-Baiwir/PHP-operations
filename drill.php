<?php
// 1.1 Clean your room Exercise 

// $room_is_filthy = true;

// if( $room_is_filthy){
// 	echo "Yuk, Room is dirty : let's clean it up !";
// 	cleanup_room();
// 	echo "<br>Room is now clean!";
// 	$room_is_filthy = false;
// } else {
// 	echo "<br>Nothing to do, room is neat.";
// }

// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = ['filthy', 'clean', 'okay'];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[0]; 

if( $room_filthiness[0] ){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if( $possible_states[2]){
	echo "Yuk, Room is dirty : let's clean it up !";
// ...
} else {
	echo "<br>Nothing to do, room is neat.";
};
