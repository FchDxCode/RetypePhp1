<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8 retype 7</title>
</head>
<body>
    <?php 
        $_SESSION["favcolor"] = "yellow";
        print_r($_SESSION);
    ?>
</body>
</html>