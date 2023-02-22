<?php
session_start();
require './database.php';

echo 'index.php';


if (isset($_POST) && !empty($_POST)) {
  if (isset($_POST['register']) && !empty($_POST['register'])) {
    # code...
  } else if (isset($_POST['login']) && !empty($_POST['login'])) {
    if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];

      $query = "SELECT 1 FROM user WHERE username = :username AND password = :password";
      $sql = $pdo->prepare($query);
      $sql->execute([
        'username' => $username,
        'password' => $password
      ]);
      $rowCount = $sql->rowCount();
      if ($rowCount) {
        $user = $sql->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION['username'] = $user['username'];
      } else {
        header('Location: ./login.php?error=404');
      }
    } else {
      header('Location: ./login.php?error=missing');
    }
  } else {
    # code...
  }
} else {
  header('Location: ./acceuil.php');
}
