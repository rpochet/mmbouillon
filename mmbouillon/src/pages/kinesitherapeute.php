<?php
$personnes = require 'assets/php/personnes.php';
?>

<h3>Le kinésithérapeute</h3>
<p>Notre kinésithérapeute assurent un travail de rééducation (ortho-traumatologique, respiratoire, uro-gynécologique, cardiovasculaire, neurologique...). Elle vous reçoit à la Maison Médicale ou effectue des visites à domicile, sur rendez-vous.</p>

<div class="row">
<?php
foreach ($personnes as $personne) {
    if($personne->type == 'Kinésithérapeute') {
?>
<div class="small-4 columns">
<?php include('assets/php/personne.inc.php'); ?>
</div>

<div class="small-4 columns">
    <div class="card-user-profile">
      <img class="card-user-profile-img" src="https://images.pexels.com/photos/5439/earth-space.jpg?h=350&auto=compress&cs=tinysrgb" alt="picture of space" />
      <div class="card-user-profile-content card-section">
        <div class="card-user-profile-avatar">
          <img src="https://pbs.twimg.com/profile_images/422887689612820482/sZtHMJu5.png" alt="picture of yeti" />
        </div>
        <p class="card-user-profile-name">Modalités</p>
        <p class="card-user-profile-status">La prescription médicale de kinésithérapie est obligatoire. Une vignette de mutuelle est nécessaire ainsi que la carte d’identité.</p>
        <p class="card-user-profile-info">
            <h4>Prise de rendez-vous</h4>
            <p>
            Par téléphone via le numéro personnel du thérapeute au <a href="tel:<?php echo $personne->gsm ?>"><?php echo $personne->gsm ?></a>.
            </p>
        </p>
      </div>
      <div class="card-user-profile-actions">
        <a href="#" class="card-user-profile-button button hollow">Rendez-vous</a>
      </div>
    </div>
</div>

<div class="small-4 columns">
    <div class="card-user-profile">
      <img class="card-user-profile-img" src="https://images.pexels.com/photos/5439/earth-space.jpg?h=350&auto=compress&cs=tinysrgb" alt="picture of space" />
      <div class="card-user-profile-content card-section">
        <div class="card-user-profile-avatar">
          <img src="https://pbs.twimg.com/profile_images/422887689612820482/sZtHMJu5.png" alt="picture of yeti" />
        </div>
        <p class="card-user-profile-name">Horaires de travail</p>
        <p class="card-user-profile-status">Toute l’activité a lieu sur rendez-vous tant au cabinet qu’au domicile du patient.</p>
        <p class="card-user-profile-info">
            <p>
			Les consultations se font du lundi au vendredi. Un rôle de garde pour le samedi et le dimanche est disponible pour certaines urgences (respiratoire, soins palliatifs…).
			</p>
            <ul>
            <?php
            foreach ($personne->horaires as $horaire) {
                if($horaire->type == 'travail') {
                    echo '<li>'.$horaire->jour.': '.$horaire->heure_debut.': '.$horaire->heure_fin.'</li>';
                } else if($horaire->type == 'travail') {
                    echo '<li>'.$horaire->jour.': Absente</li>';
                }
            }
            ?>
            </ul>
        </p>
      </div>
    </div>
</div>

<?php
    }
}
?>
</div>

