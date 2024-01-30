<form method="get">
<label for="name">What is your name? : </label> <input type="text" name="name">
<br>

<label for="gender">Gender: </label> 
man: <input type="radio" name="gender" value="man"> 
woman: <input type="radio" name="gender" value="woman">
<br>
<label for="age">Age : </label> <input type="number" name="age">
<br>
<input type="submit" name="submit" value="Validate">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET["name"], $_GET["gender"], $_GET["age"])) {
    $age = $_GET['age'];
    $gender = $_GET['gender'];

    if ($age > 20 && $age < 42 && $gender == "woman") {
        echo "hourra";
    }

    if ($age < 21 || $age > 41) {
        echo "get lost";
    }

    if ($gender != "woman") {
        echo "Please select 'woman' as the gender.";
    }
}
?>    