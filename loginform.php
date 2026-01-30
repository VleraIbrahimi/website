<?php
session_start();
include_once 'Database.php';
include_once 'User.php';

if($_SERVER ['REQUEST_METHOD']=='POST'){
  $db=new Database();
  $connection=$db->getConnection();
  $useri= new User(db: $connection);

  $name=$_POST['name'];
  $surname=$_POST['surname'];
  $email=$_POST['email'];
  $password=$_POST['password'];


  if($useri->loginform(email: $email,password: $password)){
    header(header: "Location: homepage.php");
    exit;

  }else{
    echo "Invalid credentials";
  }

}




?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign In</title>
  <link rel="stylesheet" href="loginform.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
</head>
<body>

    <header>
    <div class="container header-inner">
      <div class="logo">
        <a href="#"><img src="LOGO.png" alt="Materné Logo" /></a>
      </div>

      <nav class="nav-menu">
        <ul>
          <li><a href="#"><b>Home</b></a></li>
          <li><a href="dermakozmetike.php"><b>DermaKozmetike</b></a></li>
          <li><a href="mombliss.php"><b>Mom&Baby</b></a></li>
          <li><a href="aboutus.php"><b>About Us</b></a></li>
        </ul>
      </nav>
      <div class="header-icons">
        <i id="ikona-kerkimit" class="fa-solid fa-magnifying-glass"></i>
        <a href="loginform.php"><i class="fa-solid fa-user"></i></a>
        <i class="fa-solid fa-cart-shopping"></i>
      </div>
    </div>
  </header>
  
  <div class="login-wrapper">
  <div class="login-box">
    <h2>Kyçu</h2>

    <form action="loginform.php" method="POST">
    <input id="email" name="email" type="text" placeholder="Adresa e emailit ">
    <input id="password" name="password" type="password" placeholder="Fjalëkalimi">

    <button id="submitBtn">Kyçu</button>
    </form>

    <div class="links">
      <a href="forgot.php">Ke harruar fjalëkalimi?</a>
       <a href="signup.php">Regjistrohu</a>
 
 </div>
  </div>
   </div>


<footer id="main-footer">
  <div class="footer">
    <div class="footer-inner">
      <p>© 2024 MaternéPharma. All rights reserved.</p>
    </div>

    <div id="footer-inn">
          <div class="pjesa1">
      <ul>
        <li type="none"> <b>Adresa dhe Orari</b></li>
        <br>
        <li type="none">Prishtine,Kosova</li>
        <li type="none">E hene-E Dielle</li>
        <li type="none">08:00-22:00</li>
      </ul>
    </div>

    <div class="pjesa1">
      <ul>
        <li type="none"> <b>Kontakti</b></li>
        <br>
        <li type="none">+383 44123456</li>
        <li type="none">Info@maternepharama.ks</li>
      </ul>
    </div>

    <div class="pjesa1">
      <ul>
        <li type="none"><b>Rrjetet sociale</b></li>
        <br>
        <li type="none"><a href="https://www.instagram.com/ubt_official/?hl=en">Instagram</a></li>
        <li type="none"><a href="https://www.tiktok.com/@ubt.official">TikTok</a></li>
      </ul>
    </div>
    </div>
  </div>
</footer>

<script>
  document.getElementById('submitBtn').addEventListener('click', function(e) {
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();


    if (!username) {
      alert('Ju lutem shkruani adresën e emailit.');
      e.preventDefault();
      return;
    }

    if (username.length < 3) {
      alert('Adresa e email duhet të ketë të paktën 3 karaktere.');
      e.preventDefault();
      return;
    }
    if (!password) {
      alert('Ju lutem shkruani fjalëkalimin.');
      e.preventDefault();
      return;
    }
    if (password.length < 6) {
      alert('Fjalëkalimi duhet të ketë të paktën 6 karaktere.');
      e.preventDefault();
      return;
    }

  });
</script>
</body>
</html>
