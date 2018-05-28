<?php session_start();

?>

<main>
  <section class="merci-main">
    <h1>Merci <?php echo $_SESSION['genre']; ?>
      <?php echo $_SESSION['nom']; ?> de m'avoir contacté</h1>
    <h2>Voici les informations que vous avez envoyées</h2>
    <p>Nom : <?php echo $_SESSION['nom']; ?></p>
    <p>Prénom: <?php echo $_SESSION['prenom'];  ?></p>
    <p>Adresse email: <?php echo $_SESSION['email']; ?></p>
    <p>Votre demande: <?php echo $_SESSION['sujet']; ?></p>
    <p>Les détails de votre demande: <?php echo $_SESSION['description']; ?></p>
    <form class="return_form" action="#" method="post">
      <input type="submit" name="retour" value="Retourner à la page d'acceuil">
    </form>
  </section>
</main>
