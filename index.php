<?php
session_start();
require './database.php';

// echo 'index.php';


if (isset($_POST) && !empty($_POST)) {
  if (isset($_POST['register']) && !empty($_POST['register'])) {
    // Enregistrement
    if (isset($_POST['lastname']) && !empty($_POST['lastname']) && isset($_POST['firstname']) && !empty($_POST['firstname']) && isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['confirm_password']) && !empty($_POST['confirm_password'])) {
      $nom = $_POST['lastname'];
      $nom = filter_var($nom);
      $prenom = $_POST['firstname'];
      $prenom = filter_var($prenom);
      $identifiant = $_POST['username'];
      $pass = md5($_POST['password']);
      $pass = filter_var($pass,);
      $cpass = md5($_POST['confirm_password']);
      $cpass = filter_var($cpass);



      $select = $pdo->prepare("SELECT * FROM `user` WHERE username = ?");
      $select->execute([$username]);


      if ($select->rowCount() > 0) {
        $message = ' username existant !';
      } else {
        if ($pass != $cpass) {
          $message = 'mauvaise confirmation du mot de password!';
        } else {
          $insert = $pdo->prepare("INSERT INTO `user`(firstname,lastname,username,password) VALUES(?,?,?,?)");
          $insert->execute([$nom, $prenom, $identifiant, password_hash($pass, PASSWORD_DEFAULT)]);
          $_SESSION['username'] = $identifiant;
          header('location: ./acceuil.php');
        }
      }
    }
  } else if (isset($_POST['login']) && !empty($_POST['login'])) {
    // Connexion
    if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      echo 'index.php';

      $query = "SELECT * FROM user WHERE username = :username";
      $sql = $pdo->prepare($query);
      $sql->execute([
        'username' => $username
      ]);
      $rowCount = $sql->rowCount();
      if ($rowCount) {
        $user = $sql->fetchAll(PDO::FETCH_ASSOC);
        var_dump($user[0]['password']);
        var_dump(password_verify($password, $user[0]['password']));
        die();
        if (password_verify($password, $user[0]['password'])) {
          $_SESSION['username'] = $user['username'];
        } else {
          header('Location: ./login.php?error=404');
        };
      } else {
        header('Location: ./login.php?error=404');
      }
    } else {
      header('Location: ./login.php?error=missing');
    }
  } else {
    echo 'index.php';

    # code...
  }
} else {
  header('Location: ./acceuil.php');
}
