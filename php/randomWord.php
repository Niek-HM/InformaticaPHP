<?php

# Start a session
session_start();
session_unset();

# Make a list of possible words to show up in the game.
$_SESSION['Choices'] = [
    "test",
    "school",
    "informatica",
    "html",
    "css",
    "php",
    "combinations",
    "others",
    "vacation",
    "spelling",
    "groningen",
    "working"
];

# Select a random word and split it into an array
$_SESSION['wordToUse'] = $_SESSION['Choices'][array_rand($_SESSION['Choices'])];
$_SESSION['wordToUse'] = str_split($_SESSION['wordToUse'], 1);

# Go to the actual game and start playing :)
header('Location: theGame.php');

?>