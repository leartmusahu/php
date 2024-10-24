<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        class Chef {

            function makeChicken() {
                echo "The chef makes chicken.\n";
            }

            function makeBeef() {
                echo "The chef makes beef.\n";
            }
        }
        class ItalianChef extends Chef {
            function makePasta() {
                echo "The chef makes pasta.\n";
            }
        }

       

        $chef = new Chef();
        $chef-> makeChicken();
        $italianChef = new ItalianChef();
        $italianChef-> makeChicken();
        
    ?>

</body>
</html>