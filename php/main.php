<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>WomanWize - Sages femmes à votre service</title>
  </head>
  <body>
    <!-- Date de début de création du site : 17 Mai 2024 -->
    <!-- Englobe tout le contenu de la page -->
    <?php require "visitors.php"; ?>
    <div id="main-page">
      <div class="banner">
        <header class="heading">
          <div class="logo">
            <h1><a href="" class="link link-0">MidWives</a></h1>
          </div>
          <nav class="navbar">
            <ul class="sidenav">
                <li><a href="./main.php" class="link link-1 home-link">Accueil</a></li>
                <li><a href="" class="link link-2" id="service-link">Services</a></li>
                <li><a href="" class="link link-3 midwives-link">Sages</a></li>
                <li><a href="" class="link link-3" id="contact-link">Contact</a></li>
            </ul>
          </nav>
          <div class="toggle">
            <img src="../pictures/icons/menu.svg" alt="Le button du menu">
          </div>
        </header>
        <div class="rounded-circle rounded-circle-1"></div>
        <div class="rounded-circle rounded-circle-2"></div>
        <div class="rounded-circle rounded-circle-3"></div>
        <div class="rounded-circle rounded-circle-4"></div>
        <div class="rounded-circle rounded-circle-5"></div>
        <div class="banner-content">
          <div class="content-centered">
            <h2>MidWives</h2>
            <p>Le suivi de votre grossesse et les conseils liés à votre accouchement sont notre spécialité, mais pas que.</p>
            <a href="#services" class="link button" id="service-link">Nous découvrir</a>
          </div>
        </div>
      </div>
      <!-- La section de la page, qui contiendra différents services -->
      <section class="services">
        <h2 class="section-title section-title-1" id="services">Nos <em style="font-style: normal;color:#8673f1;">services</em></h2>
        <div class="cards-list-container">
          <div class="card card-1">
            <div class="card-header">
              <img src="../pictures/icons/pregnant_woman.svg" alt="Icone d'une femme enceinte">
            </div>
            <h3>Suivi de grossesse</h3>
            <p>Nos sages femmes seront là pour suivre votre grossesse et prendront soins de vous.</p>
          </div>
          <div class="card card-2">
            <div class="card-header">
              <img src="../pictures/icons/baby_changing_station.svg" alt="Icone d'une maman qui joue avec son nouveau né">
            </div>
            <h3>Préparation à l'accouchement</h3>
            <p>Vous accoucherez en présence des sages femmes les plus assidues.</p>
          </div>
          <div class="card card-3">
            <div class="card-header">
              <img src="../pictures/icons/stethoscope.svg" alt="Icone d'une stéthoscope">
            </div>
            <h3>Assistance à l'accouchement</h3>
            <p>Vous serez toujours assistés lors de votre accouchement.</p>
          </div>
        </div>
        <a href="" class="link link-4" title="Voir tous nos services">Voir tous nos services</a>
      </section>
      <section class="midwives-list">
        <h2 class="section-title section-title-2">Nos <em style="font-style: normal;color:#8673f1;">sages</em> femmes</h2>
        <div class="midwives-container">
          <div class="card card-4">
            <div class="card-header">
              <img src="../pictures/bg-removed/1.png" alt="Sage femme 1">
            </div>
            <div class="card-content">
              <h3>Emilie Charpantier</h3>
              <p>Sage femme depuis 5 ans déjà, je transforme ma passion en secours.</p>
              <div class="list-networks">
                <img src="../pictures/icons/facebook.svg" alt="Logo Facebook">
                <img src="../pictures/icons/twitter.svg" alt="Logo Twitter">
                <img src="../pictures/icons/instagram.svg" alt="Logo Instagram">
              </div>
            </div>
          </div>
          <div class="card card-5">
            <div class="card-header">
              <img src="../pictures/bg-removed/2.png" alt="Sage femme 2">
            </div>
            <div class="card-content">
              <h3>Samantha Dorothée</h3>
              <p>Prendre soins de la femme dans le but qu'elle conçoive son enfant.</p>
              <div class="list-networks">
                <img src="../pictures/icons/facebook.svg" alt="Logo Facebook">
                <img src="../pictures/icons/twitter.svg" alt="Logo Twitter">
                <img src="../pictures/icons/instagram.svg" alt="Logo Instagram">
              </div>
            </div>
          </div>
          <div class="card card-6">
            <div class="card-header">
              <img src="../pictures/bg-removed/3.png" alt="Sage femme 3">
            </div>
            <div class="card-content">
              <h3>Heléna Harper</h3>
              <p>Laissez-moi prendre soins de vous durant votre grossesse, et votre trésor naîtra.</p>
              <div class="list-networks">
                <img src="../pictures/icons/facebook.svg" alt="Logo Facebook">
                <img src="../pictures/icons/twitter.svg" alt="Logo Twitter">
                <img src="../pictures/icons/instagram.svg" alt="Logo Instagram">
              </div>
            </div>
          </div>
        </div>
        <a href="" class="link link-5">Voir toutes nos sages femmes</a>
      </section>
      <section class="missions">
        <h2 class="section-title section-title-3">Notre <em style="font-style: normal;color:#8673f1;">mission</em></h2>
        <div class="missions-container">
          <div class="left-content">
            <img src="../pictures/4.jpg" alt="Infirmière toute souriante avec une peau noire">
          </div>
          <div class="right-content">
            <h3>Vous êtes très <em style="font-style: normal;color:#8673f1;">important</em> à nos yeux</h3>
            <p>Notre mission est de vous accompagner durant votre grossesse et de vous aider à vous préparer à l'accouchement.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam pariatur debitis nulla sapiente quos qui inventore voluptates non, repudiandae ducimus illum est, minus perferendis error reiciendis alias? Dolorum, totam molestias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat ab officia nemo nisi qui cupiditate blanditiis, alias itaque consequatur architecto dignissimos sequi iste facere dolorum incidunt distinctio? Culpa, harum praesentium.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus voluptas, ad fugiat, a atque quibusdam repellendus iure dignissimos dolorem in dolore ipsam eum numquam totam sunt laudantium nobis, neque hic!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut facere eum corporis iure sint dolor? Provident, perferendis eius. Est quis dolore illum! Laudantium amet laborum cum eum facilis dolores quis.
            </p>
          </div>
        </div>
      </section>
      <section class="contact">
        <h2 class="section-title section-title-4">Nous contacter</h2>
        <div class="contact-container">
          <form action="" method="post">
            <div class="lastname-and-firstname">
              <div class="lastname">
                <label for="lastname">Nom</label>
                <input type="text" name="lastname" id="lastname" class="user-lastname" placeholder="Votre nom" required>
              </div>
              <div class="firstname">
                <label for="firstname">Prénom</label>
                <input type="text" name="firstname" id="firstname" class="user-firstname" placeholder="Votre prénom" required>
              </div>
            </div>
            <div class="email">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" class="user-email" placeholder="Adresse email" required>
            </div>
            <div class="message">
              <label for="message">Message</label>
              <textarea name="message" id="message" cols="30" rows="10" placeholder="Message..." required></textarea>
            </div>
            <div class="errors"></div>
            <div class="submit-button">
              <input type="submit" value="Envoyer" class="submit">
            </div>
          </form>
        </div>
      </section>
      <div class="modal-success">
        <div class="modal-success-content">
          <header>
            <img src="../pictures/icons/done.svg" alt="Icone de succès">
            <h2>Merci <em class="username">{username}</em> !</h2>
          </header>
          <div class="modal-body">
            <p>J'ai bien reçu ton message <em class="username">{username}</em>, je vais t'envoyer un message de remerciement à ton adresse email. Bisou 😘</p>
            <a href="" class="link link-6">Fermer</a>
          </div>
        </div>
      </div>
    </div>
    <script src="../js/main.js"></script>
  </body>
</html>
