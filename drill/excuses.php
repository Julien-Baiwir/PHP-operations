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
echo "réponse";
?>