<div class="reveal small" data-reveal id="contact-panel-<?php echo $personne->id; ?>" data-toggler=".is-active">
  <form method="POST" action="assets/php/sendMail.php">
    <div class="row">
      <input type="text" name="from" placeholder="Votre nom et prenom">
    </div>
    <div class="row">
      <input type="email" name="email" placeholder="Votre address">
    </div>
    <div class="row">
      <textarea name="message" placeholder="Votre demande..." rows="3"></textarea>
    </div>
    <div class="contact-panel-actions">
      <button class="cancel-button" data-toggle="contact-panel">Annuler</button>
      <input type="submit" class="button submit-button" value="Envoyer" />
      <input type="hidden" name="to" value="<?php echo $personne->id; ?>" />
    </div>
  </form>
</div>
