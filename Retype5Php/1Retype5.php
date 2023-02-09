<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No 1 Bab 5</title>
</head>
<body>
    <?php 
        $filename = "baca.txt";
        $file = @fopen($filename, "R");
        if ($file == false) {
            echo ("Error In Opening File");
            exit();
        }
        $filesize = filesize($filename);
        $filetext = fread($file, $filesize);

        fclose($file);

        echo ("File size : $filesize bytes");
        echo ("<pre>$filetext</pre>");
    ?>
</body>
</html>