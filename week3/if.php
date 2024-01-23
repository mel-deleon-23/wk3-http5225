<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>PHP If Statements</h1> 

        <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

        <?php

        // **************************************************
        // Do not edit this code

        // Generate a random number (1, 2, or 3)
        $randomNumber = ceil(rand(1,3));

        // Display the random number
        echo '<p>The random number is '.$randomNumber.'.</p>';

        // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
        
        // The random number is 1, so use Codecademy
        if ($randomNumber == 1)
        {

            $linkName = 'Codecademy';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = '';
            $linkCTA = 'Codecademy';
            $linkDescription = 'Learn to code interactively, for free.';

        }

        // The random number is 2, so use W3Schools
        elseif ($randomNumber == 2)
        {

            $linkName = '';
            $linkURL = 'https://www.w3schools.com/';
            $linkImage = 'w3schools.png';
            $linkCTA = 'W3Schools';
            $linkDescription = 'W3Schools is optimized for learning, testing, and training.';

        }

        // The random number is 3, so use MDN
        else
        {

            $linkName = 'Mozilla Developer Network';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = 'mozilla.png';
            $linkCTA = 'Mozilla';
            $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';

        }

        // **************************************************

        // Beginning of the exercise, place all of your PHP code here
        // Upload this page (or use your localhost) and refresh the page, the h2 below will change
        echo '<h2>'.$linkName.'</h2>';
        // echo '<a href="' .$linkURL. '">' .$linkCTA. '</a>';
        
        if($linkURL === ''){
            echo '<p>' .$linkCTA. '</p>';
        }
        else {
            echo '<a href="' .$linkURL. '">' .$linkCTA. '</a>';
        }

        // echo '<img src="' .$linkCTA. '"/>';
        echo '<img src="' . $linkImage .'"width="200"/>';
        // echo '<img src="' . $linkImage .'" width="200"/>';
        echo '<p>' . $linkDescription .'</p>';
        ?>



        <!-- PHP IF Statements - Grading System -->
        
        <h1>PHP If Grading System</h1>
        
        <?php
        // Generate a random grade (60, 80 or 100)
        $randomGrade = ceil(rand(1,100));

        // Display a grade
        echo '<p>Your grade is '.$randomGrade.'.</p>';

        if ($randomGrade < 60)
        {
            $gradeLetter = 'F';
            $gradeFeedback = 'Sorry, you did not pass the class';
        }
        elseif ($randomGrade > 61 && $randomGrade < 65){
            $gradeLetter = 'D';
        }
        elseif ($randomGrade > 66 && $randomGrade < 70){
            $gradeLetter = 'D+';
        }
        elseif ($randomGrade > 71 && $randomGrade < 75){
            $gradeLetter = 'C';
        }
        elseif ($randomGrade > 76 && $randomGrade < 80){
            $gradeLetter = 'C+';
        }
        elseif ($randomGrade > 81 && $randomGrade < 85){
            $gradeLetter = 'B';
        }
        elseif ($randomGrade > 86 && $randomGrade < 90){
            $gradeLetter = 'B+';
        }
        elseif ($randomGrade > 91){
            $gradeLetter = 'A';
        }
        else{

        }
        
        echo $gradeLetter;
        
        ?>


        <!-- PHP IF Statements - Day of the Week -->
        
        <h1>PHP Switch - Day of the Week</h1>

        <?php

        $day = ceil(rand(1,7));

        switch ($day) 
        {
        case 1:
            echo "Why is it Monday...";
            break;
        case 2:
            echo "Tuesday...yay";
            break;
        case 3:
            echo "I do not wear pink on Wednesdays";
            break;
        case 4:
            echo "Thursday, so close";
            break;
        case 5:
            echo "FRIDAY! FINALLY";
            break;
        case 6:
            echo "TURN UP ON SATURDAY!";
            break;
        case 7:
            echo "It's Sunday....*cries*";
            break;
        default:
            echo "Have a great day!";
            break;
        }

        echo $day;
        ?>
        

    </body>
</html>
