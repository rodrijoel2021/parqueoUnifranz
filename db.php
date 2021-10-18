<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'parqueo'
) or die(mysqli_erro($mysqli));

?>
