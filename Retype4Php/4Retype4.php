<?php 
if (isset($_POST['submit'])) {
    echo "Welcome ". $_POST['name']. "<br />";
    echo "You are ". $_POST['age']. " Years Old.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>no 4</title>
</head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="POST">
    Name: <input type="text" name="name" />
    Age:   <input type="text" name="age" />
    <input type="submit" name="submit" />
</form>
</body>
</html>