<form method="GET" action="">
    <label for="male">Male</label>
    <input type="radio" name="gender" value="male" id="male">

    <label for="unicorn">Unicorn</label>
    <input type="radio" name="gender" value="unicorn" id="unicorn">

    <label for="cat">Cat</label>
    <input type="radio" name="gender" value="cat" id="cat">

    <br>

    <input type="submit" name="submit" value="Validate">
</form>

<?php


$gifcat = '<div style="width:480px"><iframe allow="fullscreen" frameBorder="0" height="270" src="https://giphy.com/embed/IsDjNQPc4weWPEwhWm/video" width="480"></iframe></div>';

if(isset($_GET['gender'])){
  $result = $_GET['gender'];
  $gender = ($result == 'male') ? "man" : (($result == 'unicorn') ? "unicorn" : $gifcat);
  echo $gender;
}
?>


