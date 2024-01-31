<form method="GET" action="">
    <label for="childName">Child's Name: </label> 
    <input type="text" id="childName" name="childName">
    <br>
    <label for="gender">Gender :</label>
    <input type="radio" id="male" name="gender" value="male"> 
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender"value="female" >
    <label for="female">Female</label>
    <br>
    <label for="teacherName">Teacher's Name :</label> 
    <input type="text" id="teacherName" name="teacherName">
    <br>
    <label for="date">Date :</label> 
    <br>
    <input type="date" id="date" name="date">
    <br>
    <label for="excuse">Reason for Absence:</label><br>
    <input type="radio" name="excuse" value="illness"> Illness <br>
    <input type="radio" name="excuse" value="bereavement"> Bereavement <br>
    <input type="radio" name="excuse" value="extracurricular"> Important extracurricular activity<br>
    <input type="radio" name="excuse" value="family_issue"> Family issues<br>
    <input type="radio" name="excuse" value="car_breakdown"> Car breakdown<br>
    <br>
    <br>
    <input type="submit" value="submit" >

</form>

<?php
if(isset($_GET["childName"])){
    $childName = $_GET["childName"];
    $gender = $_GET['gender'];
    $teacherName = $_GET['teacherName'];
    $date = $_GET['date'];
    $date = date("l, j F Y");
    $excuse = $_GET['excuse'];

    switch ($excuse){
        case "illness":
            $excuse = "illness";
            break;
        case "bereavement":
            $excuse = "bereavement";
            break;
        case "extracurricular activity":
             $excuse = "extracurricular activity";
             break;
        case "family issues":
             $excuse = "family issues";
             break;
        case "car breakdown":
            $excuse = "car breakdown";
             break;
    }

    switch ($gender){
        case "male":
            $gender = "my boy";
            break;
        case "female":
            $gender = "my girl";
            break;
        }

echo "Dear $teacherName, $gender $childName will not be there $date,for the reason of $excuse, be well.";
 
}

?>

