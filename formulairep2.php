<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Formulaire</title>
    
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
<?php
include ("header.php");
?>
<div class="fonddepage">
<?php

    echo 'Hello ' . $_POST['Prenom'] . '<br>';
    echo 'Madame ' . $_POST['Nom'] . '<br>'; 
    echo '' . $_POST['mail']. '<br>';
    echo 'Elle habite à ' . $_POST['Habitation']. '<br>';
    echo  $_POST['age'] . ' ans ';

    if($_POST['age']>=0 &&  $_POST['age']<19 ){
      echo 'Tu es mineure'. '<br>';
    }
    if($_POST['age']>=19 &&  $_POST['age']<25 ){
            echo 'Profite le temps passe'. '<br>';
    }
    if($_POST['age']==25){
        echo '1/4 de siècle ça fait mal '. '<br>';
    }
    if($_POST['age']>=26 &&  $_POST['age']<58 ){
        echo "Tu te rapproche dangereuse de l'âge de Myriam" . '<br>';
    }
    if($_POST['age']==58){
        echo "Myriam c'est toi ". '<br>';
    }
    if($_POST['age']>=59 &&  $_POST['age']<120 ){
        echo 'Mort iminente.'. '<br>';
    }


    echo 'Message: ' . $_POST['message']. '<br>';
?>

</div>
<?php
   include ("footer.php");
?>
</body>
</html>
