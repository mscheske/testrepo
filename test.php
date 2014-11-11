<?php
session_start(); //startet die SESSION
?>

<h1> Namen eingeben: </h1>
  <form action="" method="POST">
  Name: <input type="text" name="nachname">
  <input type="submit" name="einchecken" value= "Einchecken">
  </form>


<?php
if (isset($_POST ['einchecken'])) {

$name = $_POST ['name’];

echo $name;
?>
