<?php

session_start();

require_once('includes/config.php');

  mysqli_query($conn,"insert into user (name) values('hello')");

?>
