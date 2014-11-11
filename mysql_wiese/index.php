 <html>
    <head>
        <title>Registrierung</title>
    </head>
    <body>
        <h1>Registrieren</h1>
        <form action="" method="POST">
            <table>

                <tr><td>Vorname:</td><td><input type="text" name="vorname"></td></tr>
            
                <tr><td><input type="submit" name="registrieren" value="Registrieren"></td></tr>
            </table>
        </form>
<?php
error_reporting(E_ALL);

if (isset($_POST ['registrieren'])) {

 $vorname = $_POST ['vorname'];
 $punkte = 0;
 
 echo $vorname;
 }
 ?>


 </body>
</html>
