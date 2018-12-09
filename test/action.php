<?php
  include_once 'mohkan1.github.io/test/testphp.php';
?>



<?php

if(isset($_POST['open'])){
  $sql = "UPDATE openclosedoor SET action='1' WHERE command='command1'";
  mysqli_query($conn, $sql);
}


if(isset($_POST['close'])){
  $sql = "UPDATE openclosedoor SET action='2' WHERE command='command1'";
  mysqli_query($conn, $sql);
}

?>
