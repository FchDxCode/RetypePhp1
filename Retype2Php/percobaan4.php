<html>
  <body>
    <?php 
    $x = 50;// global scope
    function myTest(){
    echo $x;//local scope
    }
    myTest();
    ?>
  </body>
</html>