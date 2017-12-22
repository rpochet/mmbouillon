<div class="card-user-profile">
  <img class="card-user-profile-img" src="https://images.pexels.com/photos/5439/earth-space.jpg?h=350&auto=compress&cs=tinysrgb" alt="picture of space" />
  <div class="card-user-profile-content card-section">
    <div class="card-user-profile-avatar">
      <img src="<?php echo $personne->avatar; ?>" alt="<?php echo $personne->title.' '.$personne->firstName.' '.$personne->lastName ?>" />
    </div>
    <p class="card-user-profile-name"><?php echo $personne->title.' '.$personne->firstName.' '.$personne->lastName ?></p>
    <p class="card-user-profile-status">Absence</p>
    <p class="card-user-profile-info">
        <ul>
        <?php 
        foreach ($personne->horaires as $horaire) {
            if ($horaire->type == 'absence') {
                if($horaire instanceof JourAgenda) {
        ?>
            	<li><?php echo $horaire->jour ?> : <?php echo $horaire->heure_debut ?? 'Toute la journée' ?> <?php echo isset($horaire->heure_fin) ? ' - '.$horaire->heure_fin : '' ?></li>
        <?php
                } else if ($horaire instanceof PeriodeAgenda) {
        ?>
            	<li>Du <?php echo $horaire->jour_debut ?> au <?php echo $horaire->jour_fin ?></li>
        <?php
                }
            }
        }
        ?>
        </ul>
    </p>
  </div>
</div>