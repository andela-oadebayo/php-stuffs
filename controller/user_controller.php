<?php
iclude_once("User.php");

  if (isset($_POST['submit'])){
    $name = $_POST['user'];
    $name = $_POST['pass'];

    $object = new User();
    $object->Login($name, $pass);
  }
?>