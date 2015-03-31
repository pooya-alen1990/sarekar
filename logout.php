<?php
session_start();
  $_SESSION['active_user_id']=NULL;
  unset($_SESSION['active_user_id']);
  header("Location: index.php");
?>