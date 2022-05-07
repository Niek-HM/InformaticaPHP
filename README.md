# InformaticaPHP
## Welcome to my php project

For this project I needed to make a website based on PHP. So, I made a simple hangman game.

#### What needed to be in the game:
1. Creativiteit – Je hebt een unieke webpagina met een duidelijk doel
2. Gebruik van verschillende afbeeldingen binnen een functie
3. Gebruik van formulieren, radio buttons of andere invoer velden
4. Verschillende stappen op basis van gebruiker invoer (keuze functie)
5. Het gebruik van verschillende berekeningen/logische operatoren
6. Het gebruik van herhaalopdrachten
7. Het gebruik van een sessie
8. Commentaar en logische codering
9. Extra functionaliteit eigen keuze
10. Compleetheid documentatie/bestanden

So, I broke up the project in multiple folders. First you have /html/ in witch you can find all the html files but these do not have mutch in them. For most of the files you will have to go to /php/ because here I do all the functions. I even echo some stuff to the html to display. Lastly you have /css/. Here I put some simple styling for the html to make it look a bit more acceptable.

#### Lets go over the code.
First you start in index.php. This by itself is useless but I added it for structural reasons. This makes it more clear when the website grows. Further in the index.html you can see some stuff but it is only a front page that is meant to redirect you to the other pages.

Next you go to the chosenWord.php or randomWord.php. The randomWord.php contains an array of words of witch it selects one and breaks it into a sepperate array. The chosenWord.php waits for you to input a word and press submit then it makes sure your letter don't contain a capital and then break it up into an array.

After this you will get sent to the actual game (theGame.php). Here you can find a lot of code and it may look confusing but it is actually fairly simple. It starts with the 2 main functions. The first one starts the game and resets all the variables. The next one checks if the letter you selected is correct and makes appropriate changes. (add 1 to mistakes or show the letter in the correct possitions). Then we display the image and word (* or letters based on correct guesses). And lastly we check if you have won or lost and display this if nessesary. 

#### Requirements
In order to run on a windows PC you will need:
- xampp (turn on apache).
- make sure you put the files under xampp/htdocs/(their own folders).
- start the browser and go to localhost/(your folders)/php/index.php

#### What I have learned
I never really used php before so I think learned a lot from about user-side programming. I learned a lot ranging from sessions to being able to include html into the php and back with echoing. Furthermore i did already know a lot about how to use logic and structure because it looks a lot like javascript in my opinion. Lastly i think I could improve it a little bit more by merging the randomWord.php and the chosenWord.php into 1 file because it was fairly small and would only need 1 variable more in the session. However I have set it up as a framework so I can add more 'games'. Another chalange was that I asked someone else what I should do and I build it based on these instructions.
