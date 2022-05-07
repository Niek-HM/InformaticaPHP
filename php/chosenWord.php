<?php

include('../html/chooseWord.html');

session_start();
session_unset();

if (isset($_POST['wordToUse'])) {
    $_SESSION['wordToUse'] = str_split(strtolower($_POST['wordToUse']), 1);
    header('Location: theGame.php');
}

?>
