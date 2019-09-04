
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="icon" type="image/png" href="../res/logo.png">
    <title>S'authentifier</title>
</head>
<body>
   <header>
      <a href=""><img src="../res/logo.png" alt=""></a>
   </header>
  <div class="login-container">
     <h3>Se connecter à Notre site</h3>
     <form action="../controleur/login.php" method="POST">
        <input type="text"    placeholder="Pseudo " name="username" required>
        <input type="password" placeholder="Mot de passe" name="pwd" required>
        <input type="submit"   value="Se connecter" id="login_btn" name="login">
        <hr>
        <p>Vous êtes nouveau ? <a href='../controleur/inscription.php' style='text-decoration: none;'><span>Créer votre compte !</span></a></p>
     </form>
  </div>
</body>
</html>