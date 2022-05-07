# InformaticaPHP
## Welcome to my php project

For this project i needed to make a website based on PHP. So, I made a simple hangman game.

#### What needed to be in the game:
1. Creativiteit – Je hebt een unieke webpagina met een duidelijk doel
2. Gebruik van verschillende afbeeldingen binnen een functie
3. Gebruik van formulieren, radio buttons of andere invoer velden
4. Verschillende stappen op basis van gebruiker invoer (keuze functie)
5. Het gebruik van verschillende berekeningen/logische operatoren
6. Het gebruik van herhaalopdrachten
7 Het gebruik van een sessie
8 Commentaar en logische codering
9 Extra functionaliteit eigen keuze
10 Compleetheid documentatie/bestanden

So, i broke up the project in multiple folders. First you have /html/ in witch you can find all the html files but these do not have mutch in them. For most of the files you will have to go to /php/ because here i do all the functions. I even echo some stuff to the html to display. Lastly you have /css/. Here i put some simple styling for the html to make it look a bit more acceptable.

#### Lets go over the code.
First you start in index.php. This by itself is useless but i added it for structural reasons. This makes it more clear when the website grows. Further in the index.html you can see some stuff but it is only a front page that is meant to redirect you to the other pages.

Next you go to the chosenWord.php or randomWord.php. The randomWord.php contains an array of words of witch it selects one and breaks it into a sepperate array. The chosenWord.php waits for you to input a word and press submit then it makes sure your letter don't contain a capital and then break it up into an array.

After this you will get sent to the actual game (theGame.php). Here you can find a lot of code and it may look confusing but it is actually fairly simple. It starts with the 2 main functions. The first one starts the game and resets all the variables. The next one checks if the letter you selected is correct and makes appropriate changes. (add 1 to mistakes or show the letter in the correct possitions). Then we display the image and word (* or letters based on correct guesses). And lastly we check if you have won or lost and display this if nessesary. 
