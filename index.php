<?php
session_start();


if (isset($_POST) && !empty($_POST)) {
  echo 'post';
} else {
  header('Location: ' . $_SERVER['HTTP_REFERER'] . $_SERVER['REQUEST_URI'] . 'accueil.php');
}
