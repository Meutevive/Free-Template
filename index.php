<?php
session_start();
require './database.php';

echo 'acceuil.php';


if (isset($_POST) && !empty($_POST)) {
  if (isset($_POST['register']) && !empty($_POST['register'])) {
    # code...
  } else if (isset($_POST['login']) && !empty($_POST['login'])) {
    # code...
  } else {
    # code...
  }
} else {
  header('Location: ./acceuil.php');
}
