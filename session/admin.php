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
    $_SESSION["favclub"] = "Chelsea";
    $_SESSION["favlanguage"]= "PHP";
    echo "Session variables are set.";
    session_unset();
    ?>
    </body>
    </html>

