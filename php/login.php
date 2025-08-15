<?php
try {
 $pdo = new PDO('mysql:host=mysql-xampp.alwaysdata.net;dbname=xampp_user', 'xampp', 'pourmoicestbon');
  // echo "Connexion PDO réussie à la base de données xmpp.";
} catch (PDOException $e) {
  die("Erreur de connexion PDO : " . $e->getMessage());
}


echo "<!DOCTYPE html>
<html lang='fr'>
  <head>
    <meta charset='UTF-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>Règlement</title>
    <link
      href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css'
      rel='stylesheet'
    />
    <link
      href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'
      rel='stylesheet'
      integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH'
      crossorigin='anonymous'
    />
    <link rel='stylesheet' href='style.css' />
    <link
      rel='shortcut icon'
      href='./img/icon/debase.png'
      type='image/x-icon'
    />
  </head>
  <body>
    <div class='imgdehau'>
      <h2>Heart of Leviathan</h2>
      <p>Serveur avec des mise à jour souvent</p>
    </div>
    <div class='sidebar' id='sidebar'>
      <span class='icon'>☰</span>
      <ul>
        <li><a href='index.html'>Accueil</a></li>
        <li><a href='rejoidre.html'>Rejoidre</a></li>
        <li><a href='cotacts.html'>Contact</a></li>
      </ul>
    </div>
    <div class='overlay' id='overlay'></div>
    ";

echo "
<h1>Login :</h1>
<form action='accielll.php' method='get'>
  <div class='mb-3'>
    <label for='psedo' class='form-label'></label>
    <input placeholder='Pseudo' type='text' class='form-control' id='psedo' name='psedo' required>
  </div>
  <button type='submit' class='btn btn-primary'>Se connecter</button>
  </form>
creer un compte <a href='inscription.php'>ici</a>
";




  
  echo  "<footer class='footer'>
      <div class='links'>
        <a href='index.html'>Accueil</a>
        <a href='rejoidre.html'>Rejoidre</a>
        <a href='cotacts.html'>Contact</a>
      </div>
      <div class='social-icons'>
        <a href='#'>&#x1F426;</a>
        <a href='#'>&#x1F310;</a>
        <a href='#'>&#x1F4F1;</a>
      </div>
    
      <p>&copy; Heart of Leviathan. Tous droits réservés.</p>
    </footer>
    <script
      src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'
      integrity='sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz'
      crossorigin='anonymous'
    ></script>
    <script src='main.js'></script>
  </body>
</html>"





?>
