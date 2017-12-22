<?php
$personnes = require 'assets/php/personnes.php';
?>

<h3>La sage-femme</h3>
<p>Notre sage-femme est à l’écoute, prodigue des soins et conseils tout au long de la grossesse ainsi qu’après l’arrivée du bébé. Elle apporte un soutien à la parentalité et à l’allaitement. Elle vous reçoit sur rendez-vous à la Maison Médicale ou à votre domicile.</p>

<div class="row">
<?php
foreach ($personnes as $personne) {
    if($personne->type == 'SageFemme') {
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
        <p class="card-user-profile-status">Une vignette de mutuelle est nécessaire à chaque prestation.</p>
        <p class="card-user-profile-info">
            <p>
            La grande majorité des prestations sont entièrement payées par votre mutuelle (tiers-payant). Seuls les frais de déplacements et un supplément pour les préparations à la naissance vous seront facturés.
            </p>
            <p>
            Le secrétariat et les prestataires peuvent vous renseigner précisément.
            </p>
        </p>
      </div>
      <div class="card-user-profile-actions">
        <a href="#" class="card-user-profile-button button hollow">Demande de renseignements</a>
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
        <p class="card-user-profile-status">Pour les prestations sage-femme, il vous est possible, si vous le souhaitez, de prendre rendez-vous soit à la Maison Médicale soit à votre domicile.</p>
        <p class="card-user-profile-info">
            <h4>Horaires de travail</h4>
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
            
            <h4>Prise de rendez-vous</h4>
			<p>
			Par téléphone via le secrétariat au <a href="tel:<?php echo $config['tel']; ?>"><?php echo $config['tel']; ?></a> ou via la sage-femme au <a href="tel:<?php echo $personne->gsm; ?>"><?php echo $personne->gsm; ?></a>.
			</p>
        </p>
      </div>
    </div>
</div>

<?php
    }
}
?>

</div>