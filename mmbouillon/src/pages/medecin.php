<?php
$config = require 'assets/php/config.php';
$personnes = require 'assets/php/personnes.php';
?>

<h3>Les médecins</h3>
<p>Nos médecins assurent la prise en charge, en visite et en consultation, des problèmes de santé quotidiens. Ils préservent aussi la santé des patients via une information sur les risques individuels et un dépistage des signes précurseurs.</p>

<div class="row">
<?php
foreach ($personnes as $personne) {
    if($personne->type == 'Médecin') {
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
        <p class="card-user-profile-name">Modalités et horaires de travail</p>
        <p class="card-user-profile-status">Toute l’activité a lieu sur rendez-vous.</p>
        <p class="card-user-profile-info">
            <h4>Consultations (sur rendez-vous)</h4>
            
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
            <h4>Visites (en dehors de ces heures)</h4>
            
            En cas d’urgence, de problème d’horaire réel, de nécessité de temps de consultation plus long, veuillez contacter le secrétariat et leur en faire part.
            
            Contact pour résultats/avis : veuillez laisser vos coordonnées au secrétariat et je vous contacte dans les plus brefs délais.
            
            <h4>Prise de rendez-vous</h4>
            
            Par téléphone via le secrétariat au <a href="tel:<?php echo $config['tel'] ?>"><?php echo $config['tel'] ?></a>.
        </p>
      </div>
      <div class="card-user-profile-actions">
        <a href="#" class="card-user-profile-button button hollow">Follow</a>
        <a href="#" class="card-user-profile-button button hollow secondary">More Info</a>
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
        <p class="card-user-profile-name">Prescription</p>
        <p class="card-user-profile-info">Pour toute demande d'ordonnance, veuillez vous adresser au secrétariat.
    Attention, ceci n’est accepté que pour les renouvellements des médicaments habituels ! Pas de nouveau traitement par téléphone.</p>
      </div>
    </div>
</div>

</div>

<?php
    }
}
?>
