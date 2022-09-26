<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekrutacja 1</title>
</head>
<body>

    <form action="1.php" method="get">
        Name: <input type="text" name="firs_name">
        email: <input type="text" name="email">
        password: <input type="text" name="password">
        <input type="submit">
    </form>

    <?php 
    $name = $_GET("first_name");
    $email = $_GET("email");
    $password = $_GET("password");

    ?>
</body>
</html>