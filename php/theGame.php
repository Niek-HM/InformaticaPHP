<?php

# Start of session
session_start();

# Setup and start the game
if (!isset($_SESSION['gameHasStarted'])) {
    $_SESSION['gameHasStarted'] = true; # Make sure this function does not run again while playing
    $_SESSION['letters'] = range('A', 'Z'); # Make a list of all possible letters
    $_SESSION['mistakes'] = 1; # Remember the amount of mistakes (its 1 for convenience)
    $_SESSION['lettersVisible'] = array(); # Array which displays the letters of the word (starts with *)
    $_SESSION['lost'] = false; # Remembers if you have lost or are still alive

    foreach ($_SESSION['wordToUse'] as $key => $value) {
        array_push($_SESSION['lettersVisible'], '*');
    }
}

# If one of the buttons is pressed check if it is wrong or right.
if (isset($_POST['submitLetter'])) {
    # Check if the letter is in the word
    if (in_array(strtolower($_POST['submitLetter']), $_SESSION['wordToUse'])) {
        foreach ($_SESSION['wordToUse'] as $key => $value) {
            if ($value == strtolower($_POST['submitLetter'])) { $_SESSION['lettersVisible'][$key] = $value; }
        }

        $_SESSION['correct'] = true;
    }
    # Add 1 if wrong, this also updates the image later
    else {
        if ($_SESSION['mistakes'] !== 7) { $_SESSION['mistakes']++; }
        if ($_SESSION['mistakes'] === 7) { $_SESSION['lost'] = true; }

        $_SESSION['correct'] = false;
    }

    # Removes guessed letters so you can not press them again
    unset($_SESSION['letters'][array_search($_POST['submitLetter'], $_SESSION['letters'])]);
}

# Display the background image
echo '<center><img style="height: 400px; width: 400px;" src="../images/'.$_SESSION['mistakes'].'.png">';

# Display all the guessed/hidden letters
echo "<h2>".implode($_SESSION['lettersVisible'])."</h2><br>";

if (isset($_SESSION['correct'])) {     
    if ($_SESSION['correct']) { echo "<h3>Correct, this letter is in the word!</h3>"; }
    else { echo "<h3>Wrong, this letter is not in the word!</h3>"; }
}  

# Display if you lost, won or still got letters to play
if ($_SESSION['wordToUse'] === $_SESSION['lettersVisible']) {echo '<h1>YOU WON!</h1>';} 
elseif ($_SESSION['lost']) {echo '<h1>You lost!</h1>';} 
else { 
    echo "<form method='POST'>";
    foreach ($_SESSION['letters'] as $char) { echo '<input type="submit" name="submitLetter" value="'.$char.'">'; }
    echo "</form>";
}

include('../html/theGame.html');

?>