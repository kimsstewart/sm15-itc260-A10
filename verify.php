<?php
//verify.php

//start the session to verify Passphrase
session_start();

//Passphrase = 'abc123'
/* Tasks
-See if form is submitted
-Place correct info in passphrase variable
-fire the session up or reload
*/

define ('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//variable passphrase is the submitted Password. Must equal passphrase.
$passphrase = $_POST['passphrase'];
        
        if(isset($passphrase)){
            //make sure form passphrase is set
            
            if(($passphrase=='abc123') && (!isset($_SESSION['login']))){
                $_SESSION['login'] = true;
                echo 'Passphrase Correct';
            }
            elseif (isset($_SESSION['login']) === true){
                //bumps you to index.php
            }
            else{
                echo 'Passphrase Incorrect';
                //Show Form
                echo '<h2>Re-Enter with abc123</h2>
                <form action = "'.THIS_PAGE.'"method="post" id="form">
                <fieldset>
                <legend>LOGIN</legend>
                <label>PASSPHRASE: </label>
                <input type="text" name="passphrase" id="passphrase">
                <input type="submit" id="submit" value="submit">
                </fieldset>
                </form>
                ';
                die();
            }
               }
        else{
            echo '<h2>Enter the Passphrase</h2>
            <form action = "'.THIS_PAGE.'"method="post" id="form">
            <fieldset>
            <legend>LOGIN</legend>
            <label>PASSPHRASE: </label>
            <input type="text" name="passphrase" id="passphrase">
            <input type="submit" id="submit" value="submit">
            </fieldset>
            </form>
            ';
            die(); 
               }//End if(isset($passphrase)) CONDITIONAL
