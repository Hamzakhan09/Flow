<?php 
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
session_unset();
session_destroy();

header("location:http://".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT']."/flow/login.php");
