<?php

$hello = ""; 

if (isset($_POST['gender'])) {
    $gender = $_POST['gender'];
    $hello = ($gender === "M") ? "Hello Sir!" : "Hello Madam!";
    echo $hello;
}

?>

<form method="post" action="">
    <label for="gender">Choose gender:</label>
    <select name="gender" id="gender" required>
        <option value="M">Male</option>
        <option value="F">Female</option>
    </select>
<input type="submit" value="Submit">
</form>