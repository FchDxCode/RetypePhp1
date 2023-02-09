<?php 
    $filename = "newfile.txt";
    $file = fopen($filename, "w");
    if ($file == false) {
        echo ("Error in opening new file");
        exit();
    }
    fwrite($file, "Ini isi file\n");
    fclose($file);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 retype 5</title>
</head>
<body>
    <?php 
        if (file_exists($filename)) {
            $filesize = filesize($filename);
            $msg = "File created with name $filename ";
            $msg .= "containing $filesize bytes";
            echo ($msg);
        } else {
            echo ("File $filename does not exit");
        }
    ?>
</body>
</html>