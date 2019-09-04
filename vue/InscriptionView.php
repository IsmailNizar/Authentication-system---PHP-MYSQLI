
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/Inscription.css">
    <link rel="icon" type="image/png" href="../res/logo.png">
    <title>Inscription</title>
</head>
<body>
   <header>
      <a href="../controleur/login.php"><img src="../res/logo.png" alt=""></a>
   </header>
  <div class="login-container">
     <h3>S'inscrire à Notre site</h3>
     <form action="../controleur/inscription.php" method="POST">
        <input type="text"    placeholder="Pseudo " name="username" required>
        <input type="email"    placeholder="Email " name="email" required>
        <input type="password" placeholder="Mot de passe" name="pwd" required>
        <input type="password" placeholder="Entrez le mot de passe à nouveau" name="pwd_repeat" required>
        <?php verifData(); ?>
        <input type="submit"   value="Enregistrer" id="inscription_btn" name="submit">
     </form>
  </div>
</body>
</html>