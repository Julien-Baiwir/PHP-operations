<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli("localhost", "julienbaiwir", "JUlien84$$", "my_database") or die ("Erreur de connexion");
// $conn =mysqli_connect("localhost", "julienbaiwir", "JUlien84$$", "my_database") or die ("Erreur de connexion");
// echo "my_database:<br>";

$sql = "SELECT * FROM names";
$result = $conn->query($sql);

// if ($result === FALSE) {
//     die("Error: " . $conn->error);
// }

while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
}

// $conn->close();
?>



