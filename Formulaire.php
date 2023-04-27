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
        <div class="formulaire">
            <form action="formulairep2.php" method='post'>
                <div class="field">
                    <label for="Prénom" class="label">Prénom</label>
                    <div class="control">
                        <input id="Prénom" name="Prenom" class="input" type="text">
                    </div>
                </div>
                <div class="field">
                    <label for="Nom" class="label">Nom</label>
                    <div class="control">
                        <input id="Nom" name="Nom" class="input" type="text">
                    </div>
                </div>
                <div class="field">
                    <label for="mail" class="label">Mail</label>
                    <div class="control">
                        <input id="mail" name="mail" class="input" type="text">
                    </div>
                </div>
                <div class="field">
                    <label for="Habitation " class="label">Habitation</label>
                    <div class="control">
                        <textarea id="Habitation" name="Habitation" class="textarea"></textarea>
                    </div>
                </div>
                <div class="field">
                    <label for="age" class="label">Age</label>
                    <div class="control">
                        <textarea id="age" name="age" class="textarea"></textarea>
                    </div>
                </div>  
                <div class="field">
                    <label for="Couleur">Couleur préférée:</label>
                    
            
                    <select name="couleur" id="couleur">

                        <option value="orange">orange</option>
                        <option value="vert">vert</option>
                        <option value="rouge">rouge</option>
                        <option value="violet">violet</option>
                        <option value="bleue">bleue</option>
                        <option value="noir">noir</option>
                        <option value="blanc">blanc</option>
                        <option value="jaune">jaune</option>
                    </select>

                </div>


                <div class="field">
                    <label for="message" class="label">Message</label>
                    <div class="control">
                        <textarea id="message" name="message" class="textarea"></textarea>
                    </div>


                </div>
                <div class="field">
                    <div class="control has-text-centered">
                        <button class="button is-link has-background-alt">Submit</button>
                    </div>
                </div>
            </form>
        </div>

    <?php include ("footer.php"); ?>        
    </body>
</html>