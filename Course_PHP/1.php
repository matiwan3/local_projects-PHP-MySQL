<!-- php -S localhost:4000 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP COURSE</title>
    
</head>
    <body>
        
    <!-- http://localhost:4000/Desktop/projekty/sql%20php/Course_PHP/1.php -->
        <!-- // 1
        // echo("<h1>Mateusz W</h1>");
        // echo("<hr>");
        // echo("<p>This is my site</p>");

        // 2 Variables
        // $characterName = 'Tom';
        // $characterAge =  80;
        // echo "<h1>Simple Story</h1>";
        // echo "There once was a man named $characterName <br>";
        // echo "He was $characterAge years old <br>";
        // // $characterName = 'Mike';
        // echo "He really liked the name $characterName <br>";
        // echo "But didn't like being $characterAge <br>";
        
        // 3 Data types
        // $phrase = "To be or not to be";
        // $age = 30;
        // $gpa = 32.54363;
        // $isMale = true;
        // echo $phrase;

        // 4 Working with strings
        // $phrase = "Giraffe Academy";
        // echo str_replace("Giraffe", "Panda", $phrase);
        // echo substr($phrase, 8, 3);
        // echo strlen($phrase);
        // $phrase[0] = 'B';
        // echo $phrase;

        // 5 Working with numbers
        // echo -40.787;
        // echo round(5 / 9);
        // echo 10 % 3;
        // echo "<br>";
        // $equation = 4 + 5 * 10;
        // $equation++;
        // echo $equation;
        // echo abs(-100);
        // echo "<br>";
        // echo pow(99,2);
        // echo "<br>";
        // echo  sqrt(36);
        // echo "<br>";
        // echo max(2,10) //min; round; ceil; floor; ?>-->

        <form action="1.php" method="get">
            Name: <input type="text" name="name"> <br>
            <input type="submit">
        <br><br>

        <?php 
            error_reporting(E_ERROR | E_PARSE);
            echo $_GET["age"]
        
        ?>




    </body>
</html>