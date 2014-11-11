<?php


$db_link = mysqli_connect (
                     localhost, 
                     root, 
                     Orangina18, 
                     website
                    );

$sql = "SELECT * FROM kunden";
 
$db_erg = mysqli_query( $db_link, $sql );
if ( ! $db_erg )
{
  die('Ungültige Abfrage: ' . mysqli_error());
}
 
echo '<table border="1">';
while ($zeile = mysqli_fetch_array( $db_erg, MYSQL_ASSOC))
{
  echo "<tr>";
  echo "<td>". $zeile['name'] . "</td>";
  echo "<td>". $zeile['vorname'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_free_result( $db_erg );
?>

<form action="" method="POST">
<input type="text" name="name">
<input type="submit" name="registrieren" value="Registrieren">
</form>

Hallo ich heiße <?php echo $_POST["name"] ?> 




<?php

$name = $_POST ["name"];


$sql2 = "SELECT * FROM kunden WHERE name ='".$name."'";

 
$db_erg2 = mysqli_query( $db_link, $sql2 );
if ( ! $db_erg2 )
{
  die('Ungültige Abfrage: ' . mysqli_error());
}
 
echo '<table border="1">';
while ($zeile = mysqli_fetch_array( $db_erg2, MYSQL_ASSOC))
{
  echo "<tr>";
  echo "<td>". $zeile['name'] . "</td>";
  echo "<td>". $zeile['vorname'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_free_result( $db_erg2 );

?>

