<?php
    session_start();
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
//   set session variables
    $_SESSION["favcolor"] = "green";
    $_SESSION["favchild"]= "Justin";
    echo "Session variables are set.";
    ?>
    </body>
    </html>

