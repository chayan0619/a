<?php

session_start();

require_once('includes/config.php');

if(isset($_POST['sb']))
{
  $name=$_POST['name'];
   
  $run = mysqli_query($conn,"insert into user (name) values('$name')");
  if($run)
  {
    echo" inserted value";
  }
  else
  {
    echo "value not inserted";
  }
  
}
mysqli_close($conn);
?>
