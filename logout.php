<?php
session_start();
if(session_destroy())
{
  header("Location: home1.php");
}
?>