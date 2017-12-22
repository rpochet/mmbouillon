<?php
$personnes = require 'assets/php/personnes.php';
?>

<h3>Diététicienne</h3>
<p>Notre diététicienne conseille un régime alimentaire adapté au patient en tenant compte de ses besoins. Elle vous reçoit à la Maison Médicale sur rendez-vous.</p>

<div class="row">
<?php
foreach ($personnes as $personne) {
    if($personne->type == 'Diététicienne') {
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
        <p class="card-user-profile-status">Les consultations se font sur rendez-vous le lundi de 9h à 20h.</p>
        <p class="card-user-profile-info">
            <h4>Prise de rendez-vous</h4>
            <p>
            Par téléphone via le secrétariat au <a href="tel:<?php echo $config['tel'] ?>"><?php echo $config['tel'] ?></a>.
            </p>
        </p>
      </div>
      <div class="card-user-profile-actions">
        <a href="#" class="card-user-profile-button button hollow">Rendez-vous</a>
      </div>
    </div>
</div>
<?php
    }
}
?>

</div>