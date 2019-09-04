
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/accueil.css">
    <link rel="icon" type="image/png" href="../res/logo.png">
    <title>S'authentifier</title>
</head>
<body>
   <header>
      <a href=""><img src="../res/logo.png" alt=""></a>
   </header>
  <div class="login-container">
     <h3>Bienvenue à Notre site <?= $_SESSION["username"] ?></h3>
     
  </div>
  <a href="../controleur/logout.php"><button id="logout_btn">Se déconnecter</button></a>
</body>
</html>