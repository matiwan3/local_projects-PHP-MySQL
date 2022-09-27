<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course cd</title>
</head>
<body>
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
        <!-- Using checkboxes -->
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


</body>
</html>