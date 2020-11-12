<?php
  include('conectar.php');
  session_start();
 
  $email    = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT user,password FROM users WHERE user = '$email'";
  $query = $mysqli->query($sql);

  $row         = $query->fetch_assoc();
  $user_bd     = $row['user'];
  $password_bd = $row['password'];
   
  if($email == $user_bd && md5($password) == $password_bd){
    $_SESSION['email'] = $email;
    
    header("Location: menu.php"); 
  }else{
    echo 'El email o password es incorrecto, <a href="index.html">vuelva a intenarlo</a>.<br/>';
  }
 
?>