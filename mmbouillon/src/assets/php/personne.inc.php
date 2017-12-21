<div class="card profile-card-action-icons">
  <img class="card-profile-profile-img" src="<?php echo $personne->photo ?>" alt="<?php echo $personne->type ?>" />
  <div class="card-section">
    <div class="profile-card-header">
      <div class="profile-card-avatar">
        <img class="avatar-image" src="<?php echo $personne->avatar ?>" alt="<?php echo $personne->title.' '.$personne->firstName.' '.$personne->lastName ?>">
      </div>
      <div class="profile-card-author">
        <h5 class="author-title"><?php echo $personne->title.' '.$personne->firstName.' '.$personne->lastName ?></h5>
        <p class="author-description">
        <?php echo isset($personne->extra['inami']) ? 'inami : '.$personne->extra['inami'] : $personne->type ?>
        </p>
      </div>
    </div>
    <div class="profile-card-about">
      <h5 class="about-title separator-left">Spécialitées</h5>
      <p class="about-content">
        <?php if(!(isset ($personne->specialites) && count($personne->specialites) > 0)) {
            echo $personne->description;
        } ?>
      </p>
      <div class="row about-skills">
<!--         <div class="small-6 columns"> -->
          <ul class="arrow">
            <?php
            foreach ($personne->specialites as $skill) {
            ?>
            <li><?php echo $skill ?></li>
            <?php
            }
            ?>
          </ul>
<!--         </div> -->
      </div>
    </div>
    <div class="profile-card-action">
      <div class="action-area">
        <a href="vCard.php?id=<?php echo $personne->id ?>" class="action-anchor has-tip bottom" data-tooltip aria-haspopup="true" data-disable-hover="false" tabindex="2" title="Ajouter à mon carnet d'adresse">
          <i class="fas fa-address-card" aria-hidden="true"></i>
          <span class="show-for-sr">Ajouter à mon carnet d'adresse</span>
        </a>
      </div>
      <div class="action-area">
        <a href="mail.php?id=<?php echo $personne->id ?>" class="action-anchor has-tip bottom" data-tooltip aria-haspopup="true" data-disable-hover="false" tabindex="2" title="Envoyer un message">
          <i class="fas fa-envelope" aria-hidden="true"></i>
          <span class="show-for-sr">Envoyer un message</span>
        </a>
      </div>
      <div class="action-area">
        <a href="facebook.php?id=<?php echo $personne->id ?>" class="action-anchor has-tip bottom" data-tooltip aria-haspopup="true" data-disable-hover="false" tabindex="2" title="Like">
          <i class="fab fa-facebook-square" aria-hidden="true"></i>
          <span class="show-for-sr">Like</span>
        </a>
      </div>
      <div class="action-area">
        <a href="tel:<?php echo $personne->gsm ?>" class="action-anchor has-tip bottom" data-tooltip aria-haspopup="true" data-disable-hover="false" tabindex="2" title="Téléphoner">
          <i class="fas fa-phone" aria-hidden="true"></i>
          <span class="show-for-sr">Téléphoner</span>
        </a>
      </div>
    </div>
  </div>
</div>
