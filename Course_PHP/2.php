<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course cd</title>
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
        <!-- 6 Getting the input -->
        <!-- <form action="1.php" method="get">
            Name: <input type="text" name="firs_name">
            <br>
            Age: <input type="number" name="age">
            email: <input type="text" name="email">
            password: <input type="text" name="password">
            <input type="submit">
        </form>
        <br>
        <?php 
        // echo "<br>";
        // echo $_GET["email"];
        // echo "<br>";
        // echo $_GET["password"];
        ?>
        Your name is <?php echo $_GET["firs_name"]; ?> and your age is <?php echo $_GET["age"] ?> -->

        <!-- 7 Building basic calculator -->

        <!-- <form action="1.php" method="get">
            <input type="number" name="num1">
            <br>
            <input type="number" name="num2">
            <input type="submit">
            
        </form>
        Addition Answer: <?php echo $_GET["num1"] + $_GET["num2"]?>
        <br>
        Substraction Answer: <?php echo $_GET["num1"] - $_GET["num2"]?>
        <br>
        Multiplication Answer: <?php echo $_GET["num1"] * $_GET["num2"]?>
        <br>
        Division Answer: <?php echo $_GET["num1"] / $_GET["num2"]?> -->

        <!-- 8 Building a Mad Libs Game -->
        <!-- <form action="1.php" method="get">
            Color: <input type="text" name="color"> <br>
            Plural Noun: <input type="text" name="PluralNoun"> <br>
            Celebrity: <input type="text" name="Celebrity"> <br>
        <input type="submit">
        </form>
        <br><br>
         -->
        
        <!-- <?php 
            $color = $_GET["color"];
            $PluralNoun = $_GET["PluralNoun"];
            $Celebrity = $_GET["Celebrity"];

            echo "Roses are $color <br>";
            echo "$PluralNoun are blue <br>";
            echo "I love you $Celebrity <br>";?>
        <form action="1.php" method="get">
            Name: <input type="text" name="name"> <br>
            <input type="submit">
        <br><br>

        <?php 
            error_reporting(E_ERROR | E_PARSE);
            echo $_GET["age"]
        
        ?> -->
        <!-- 9 POST VS GET -->
        <!-- <form action="1.php" method="post">
            Password: <input type="password" name="password"> <br>
            <input type="submit">
        <br><br>
        <?php 
            error_reporting(E_ERROR | E_PARSE);
            echo $_POST["password"];
        ?> -->

        <!-- Arrays -->
        <?php 
        error_reporting(E_ERROR | E_PARSE);
        $friends = array("Kevin",1,false,"Karen","Oscar","Jim");
        // $friends[6] = "Dwight";
        // echo $friends[6];
        echo count($friends)
?>
        <!-- 10 Using checkboxes -->
        <!-- <form action="1.php" method="post">
            Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
            Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
            Pears: <input type="checkbox" name="fruits[]" value="ears"><br>
            <input type="submit">
        </form>
        
        <?php 
        $fruits = $_POST['fruits'];
        echo $fruits[0];
        ?> -->
        <!-- 11 Associative arrays -->
        <!-- <form action="1.php" method="post">
            <input type="text" name="student">
            <input type="submit">
        </form>
        <?php 
            $grades = array("Jim"=>"A+","Pam"=>"B-", "Oscar"=>"C+");
            // $grades["Jim"] = "F";
            echo $grades[$_POST["student"]];
        ?> -->
        <!-- 12 Functions -->
        <!-- <?php 
            function sayHi($name, $age){

                echo "Hello $name,your age is $age <br>";
            }
            sayHi('Mateusz',40);
            sayHi('Jan',35);
            sayHi('Oscar',12);
            sayHi('Dave',90);
        ?> -->
            <!-- 13 Return function -->
            <?php 
            function cube($num){
                return $num * $num * $num;
            }
            echo cube(4);
        ?>
        <?php 
         $isMale = true;
         $isTall = true;
         if ($isMale && $isTall) {
            echo "You are a tall male";
         } 
         elseif ($isMale && !$isTall){
            echo "You are a short male";
         }
         elseif (!$isMale && $isTall){
            echo "You are not a male but tall";
         }
         else{
            echo "You are not a tall and not a male";
         }
         ?>
        <?php 
        function getMax($num1, $num2,$num3){
            if($num1 >= $num2 && $num1 >= $num3){
                return $num1;
            }
            else if($num2 >= $num1 && $num2 >- $num3){
                return $num2;
            }
            else{
                return $num3;
            }
        }
        echo getMax(300,900,400)
        ?>
        <form action="1.php" method="post">
            First Num: <input type="number" name="num1"><br>
            OP: <input type="textbox" name="op"><br>
            Second Num: <input type="text" name="num2"><br>
            <input type="submit">
        </form>

        <?php 
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];

        if($op == "+"){
            echo $num1 + $num2;
        } 
        elseif($op == "-"){
            echo $num1 - $num2;
        } 
        elseif($op == "*"){
            echo $num1 * $num2;
        } 
        elseif($op == "/"){
            echo $num1 / $num2;
        } 
        else{
            echo "Invalid Operator";
        }
        ?>
            <!-- Switch statement -->
    <form action="1.php" method="post">
        What was your grade?
        <input type="text" name="grade">
        <input type="submit">
    </form>
    <?php 
    $grade = $_POST["grade"];
    switch($grade){
        case "A":
            echo "You did amazing!";
            break;
        case "B":
            echo "You did pretty good!";
            break;
        case "C":
            echo "You did poorly";
            break;
        case "D":
            echo "You did very bad";
            break;
        case "F":
            echo "You Fail!";
            break;
        default:
            echo "invalid grade";
            break;
    }   
    ?>
    <!-- While loops -->
    <?php 
    $index = 6;
    do{
        echo "$index <br>";
        $index++;
    }while($index <=5);
    // reversed loop first do the stuff then check the conditions
    ?>
    <?php 
    $luckyNumbers = array(4, 8, 14, 16, 23, 42);

    for($i = 0; $i < count($luckyNumbers); $i++){
        echo "$luckyNumbers[$i] <br>"; 
    }
    ?>
    <!-- Including HTML-->
    <?php include "header.html" ?>
    <p>Hello</p>
    <?php include "footer.html" ?>

    <?php 
    $wordCount = 400;
    $author = "Mike";
    $title = "My First Post";
    include "article-header.php" 
    ?>
    <!-- Classes and objecst -->
    <?php 
    class Book {
        var $title;
        var $author;
        var $pages;
    } 

    $book1 = new Book; //object instance of a class
    $book1 -> title ="Harry Potter";
    $book1->author =" JK Rowling";
    $book1->pages = 400;

    echo $book1->author;

    $book2 = new Book; //object instance of a class
    $book2 -> title = "Lord Of the Rings";
    $book2->author = "Tolkien";
    $book2->pages = 400;

    echo $book2->author;
    ?>
        <!-- Constructors -->

    <?php 
        class Book {
            var $title;
            var $author;
            var $pages;

            function __construct($aTitle, $aAuthor, $aPages){
                $this-> title = $aTitle;
                $this-> author = $aAuthor;
                $this-> pages = $aPages;
            }
        }
    $book1 = new Book("Harry Potter","JK Rowling",400); //object instance of a class
    $book1-> title = "Hunger Games";
    $book2 = new Book("Lord Of the Rings","Tolkien",400); //object instance of a class

    echo $book1 ->title;
    ?>
        <!-- Object Functions -->
        <?php 
            class Student {
        var $name;
        var $major;
        var $gpa;

        function __construct($name, $major, $gpa){
            $this->name = $name;
            $this->major = $major;
            $this->gpa = $gpa;
        }
        function hasHonors(){
            if($this->gpa >= 3.5){
                return "true";
            }
            return "false";
        }
    }

    $student1 = new Student("Jim", "Buisness", 2.8);
    $student2 = new Student("Pam", "Art", 3.6);
    
    echo $student1->hasHonors();
    echo "<br>";
    echo $student2->hasHonors();
    ?>
    <?php 
        class Movie {
            public $title;
            private $rating;
            
            function __construct($title, $rating){
                $this->title = $title;
                $this->setRating($rating);
            }
            
            function getRating(){
                return $this->rating;
            }

            function setRating($rating){
                if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR"){
                    echo $rating;

                }
                else{
                    $this->rating = "NR";
                }
            }
        }
        
        $avengers = new Movie("Avengers", "Dog");
        // G, PG, PG-13, R, NR

        echo $avengers->getRating();
    ?>
</body>
</html>