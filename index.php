<?php
session_start();
require 'db.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Solidity Academy</title>
    <link rel="stylesheet" href="css/styles.css">    
</head>
<body>
    <header>
        <nav class="headernav">
            <a href="index.html"><img src="img/Logo.jpg" alt="" width="52px" height="52px"></a>
            <div class="block">
                <ul>
                    <li>
                    <li><a href="profile.php" class="hover-underline-animation">Edition</a></li>
                    <li><a href="login.php" class="hover-underline-animation">Connexion</a></li>
                    <li><a href="inscription.php" class="hover-underline-animation">Inscription</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="text-typing"><h1 class="h1head">SOLIDITY ACADEMY</h1></div>
        <h1><pre><span class="fade hover-underline-animation"><a href="#gratuit">GRATUIT</a></span>  <span class="fade hover-underline-animation"><a href="#francophone">FRANCOPHONE</a></span>  <span class="fade hover-underline-animation"><a href="#accessible">ACCESSIBLE</span></a></pre></h1>
        <video type="video/mp4" autoplay muted loop width="930px" height="523,13px">
            <source src="video/background.mp4">
        </video>
        <div class="presentationsection section"><h2>PRESENTATION</h2>
            <p class="sectionp">Solidity Academy est un projet permettant à chacun de se lancer dans le monde de la programmation smart contract.
            <br>Nous fournissons de la documentation, des presentations, des cours, <u>en français</u>.<br>
            Nous avons des grandes ambitions, avec vous.
            </p>
            <img src="video/Albert-Einstein.gif" alt="">
        </div>
        <div class="gratuitsection section" id="gratuit"><h2>GRATUIT</h2>
            <p>L'accès aux serveurs et aux différents événements est completement gratuit.
                <br>Plus proche de Wikipedia que de Facebook, vous ne serez pas le produit mais les concepteurs et les utilisateurs.
            </p>
        </div>
        <div class="francophonesection section" id="francophone">
            <h2>FRANCOPHONE</h2>
            <p class="sectionp">Tous, unis sous la même banniere<br>
            L'anglais est indispensable dans le dev, mais pourquoi pas faciliter la vie de nos francophones non bilingue ?<br>
            Le rendre accesibilite au plus grand nombre.
            </p>
            <img src="video/francophone.gif" alt="">
    </div>
        <div class="accessiblesection section" id="accessible">
            <h1>ACCESSIBLE</h1>
            <p>Que vous soyez Ingénieur en IA ou patissier vous pouvez accéder au Discord.<br>
                La principale condition est la motivation. Se construire un reseau et faire des projets en communs dans le partie privé du Discord.<br>
                Pour accéder à cette partie, il suffit de soumettre sa candidature.
            </p>
            <img src="video/world.gif" alt="" width="50%" height="50%" >
        </div>
    </main>
    <footer>
        <ul>
            <li class="">Twitter : <a href="https://twitter.com/SolidityAcademy" target="_blank" class="hover-underline-animation">@SolidityAcademy</a></li>
            <li>Discord : <a href="" class="hover-underline-animation">Nous rejoindre</a></li>
            <li>Google Form :<a href="" class="hover-underline-animation">Postuler</a></li>
        </ul>
        <?php
        if(isset($_SESSION['login'])){
            echo "<p>";
            echo 'Connecté en tant que '.$_SESSION['login'];
            echo "</p>"; }
            else{
                echo "<p>";
                echo "vous n'etes pas co";
                echo "</p>"; 
            }
             ?>
    </footer>
</body>
</html>