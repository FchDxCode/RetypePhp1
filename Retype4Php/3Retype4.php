<?php 
    if(isset($_POST['submit']))
    {
        $location = $_POST["location"];
        header("Location:$location");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>no 3</title>
</head>
<body>
    <p>Choose a site to visit :</p>
    <form action="<?php $_PHP_SELF ?>" method="POST">
        <select name="location">
            <option value="http://w3c.org">
                World Wise Web Consortium
            </option>
            <option value="http://google.com">
                Google Search Page
            </option>
        </select>
        <input type="submit" name="submit"/>
    </form>
</body>
</html>