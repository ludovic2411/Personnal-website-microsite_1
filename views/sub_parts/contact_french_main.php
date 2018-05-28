<main>
  <section class="contact-main">
    <h1>Contactez moi pour plus d'informations</h1>
    <form class="contact_form" action="contact_french_main.php" method="post">
      <fieldset>
        <legend>Vous pouvez me contacter en remplissant ce formulaire</legend>
        <p>
        <label for="Monsieur">Monsieur</label>
        <input type="radio" name="genre" value="Monsieur">
        <label for="Madame">Madame</label>
        <input type="radio" name=""genre value="Madame">
        </p>
        <p><label for="Sujet">Sujet</label></p>
        <p>
          <select class="select" name="sujet">
          <option value="Renseignements généraux">Renseignements Généraux</option>
          <option value="Maintenance d'un site">Maintenance d'un site</option>
          <option value="Construction d'un site web">Construction d'un site web</option>
          <option value="Offre de stage">Offre de stage</option>
        </select>
      </p>
      <textarea name="contact_description" rows="14" cols="60">Vous pouvez me fournir plus d'informations sur votre demande afin de vous aider plus efficacement</textarea>
      </fieldset>
    </form>
  </section>
  <?php include 'controls-contact.php'; ?>
</main>
