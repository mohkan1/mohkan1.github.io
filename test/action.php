<?php
  include_once 'mohkan1.github.io/test/testphp.php';




$open = filter_input(INPUT_POST, "open", FILTER_SANITIZE_NUMBER_INT);

if($open == 1) {
  $sql = "UPDATE openclosedoor SET action='1' WHERE command='command1'";
  mysqli_query($conn, $sql);
}

if($open == 2) {
  $sql = "UPDATE openclosedoor SET action='2' WHERE command='command1'";
  mysqli_query($conn, $sql);
}

?>
