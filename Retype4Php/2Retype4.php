<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>no 2</title>
</head>
<body>
    <?php 
        srand((double)microtime() * 1000000);
        $num = rand(1, 4);
        
        switch($num)
        {
            case 1: $image_file = "/images/faa.jpg";
                break;
            case 2: $image_file = "/images/hajun.jpg";
                break;
            case 3: $image_file = "/images/scarletKing.jpg";
                break;  
            case 4: $image_file = "/images/scp-3812.jpg";
                break;
        }
        echo "Random Image : <br><img src=$image_file />";
    ?>
</body>
</html>