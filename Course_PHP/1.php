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
        <?php 
            class Chef {

                function makeChicken(){
                    echo "The chef makes chicken <br>";
                }
                function makeSalad(){
                    echo "The chef makes salad <br>";
                }
                function makeSpecialDish(){
                    echo "The chef makes bbq ribs <br>";
                }
            }

            class ItalianChef extends Chef{ 
                function makePasta(){
                    echo "The italianChef makes pasta";
                }
                function makeSpecialDish(){
                    echo "The chef makes pepperoni pizza hot jalapeno";
                }
            }
        
            $chef = new Chef();
            $chef->makeSpecialDish();

            $italianChef = new italianChef();
            $italianChef->makeSpecialDish();
        ?>
    </body>
</html>