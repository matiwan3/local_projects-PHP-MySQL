<?php 

$tablica = array_map(function () {
    return rand(0, 5);
}, array_fill(0, 10, 0));

$new_tab = array_diff($tablica, [0]); 
$result = array_product($new_tab);
 
echo 'Tablica: ' . join(', ', $tablica) . PHP_EOL;
echo 'Iloczyn wszystkich niezerowych elementów tablicy to: ' . $result . PHP_EOL;

?>

<!DOCTYPE html>
<html>

    <?php include('templates/header.php'); 
    echo("Hello world");
    ?>
    
    <?php include('templates/foooter.php'); ?>

</html>

<!-- PHP -->
<!-- Popular WordPress, drupal, magneto -->
<!-- Very easy to pick up and run with -->
<!-- Huge & active community for support -->
<!-- Still a shed-load of PHP jobs on the market -->
<!-- PHP is a server-side scripting language -->
<!-- PHP is Hypertext preprocessor for dynamical website -->
<!-- PHP RUNS IN THE SERVER -->
<!--  -->

<!-- link: https://www.youtube.com/watch?v=sVbEyFZKgqk&list=PLr3d3QYzkw2xabQRUpcZ_IBk9W50M9pe-&ab_channel=ProgramWithGio -->
<!-- link: https://www.youtube.com/watch?v=OK_JCtrrv-c&ab_channel=freeCodeCamp.org -->
