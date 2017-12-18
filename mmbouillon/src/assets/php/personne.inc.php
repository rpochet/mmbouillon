<div class="card profile-card-action-icons">
  <div class="card-section">
    <div class="profile-card-header">
      <div class="profile-card-avatar">
        <img class="avatar-image" src="<?php echo $personne->photo ?>" alt="<?php echo $personne->title.' '.$personne->firstName.' '.$personne->lastName ?>">
      </div>
      <div class="profile-card-author">
        <h5 class="author-title"><?php echo $personne->title.' '.$personne->firstName.' '.$personne->lastName ?></h5>
        <p class="author-description"><?php echo $personne->type ?></p>
      </div>
    </div>
    <div class="profile-card-about">
      <h5 class="about-title separator-left">Spécialitées</h5>
      <p class="about-content">
        <?php echo $personne->description ?>
      </p>
      <div class="row about-skills">
        <div class="small-6 columns">
          <ul class="arrow">
            <li>Coding</li>
            <li>Cricket</li>
            <li>Enjoying</li>
          </ul>
        </div>
        <div class="small-6 columns">
          <ul class="arrow">
            <li>Maths</li>
            <li>Dancing</li>
            <li>Smiling</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="profile-card-action">
      <div class="action-area">
        <a href="#" class="action-anchor has-tip bottom" data-tooltip aria-haspopup="true" data-disable-hover="false" tabindex="2" title="Like Harry Profile">
          <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
          <span class="show-for-sr">Like Harry Profile</span>
        </a>
      </div>
      <div class="action-area">
        <a href="#" class="action-anchor has-tip bottom" data-tooltip aria-haspopup="true" data-disable-hover="false" tabindex="2" title="Comment on Harry Profile">
          <i class="fa fa-comments-o" aria-hidden="true"></i>
          <span class="show-for-sr">Comment on Harry Profile</span>
        </a>
      </div>
      <div class="action-area">
        <a href="#" class="action-anchor has-tip bottom" data-tooltip aria-haspopup="true" data-disable-hover="false" tabindex="2" title="Add Harry as a Friend">
          <i class="fa fa-user-plus" aria-hidden="true"></i>
          <span class="show-for-sr">Add Harry as a Friend</span>
        </a>
      </div>
      <div class="action-area">
        <a href="#" class="action-anchor has-tip bottom" data-tooltip aria-haspopup="true" data-disable-hover="false" tabindex="2" title="Send Harry a Gift">
          <i class="fa fa-gift" aria-hidden="true"></i>
          <span class="show-for-sr">Send Harry a Gift</span>
        </a>
      </div>
      <div class="action-area">
        <a href="#" class="action-anchor has-tip bottom" data-tooltip aria-haspopup="true" data-disable-hover="false" tabindex="2" title="Block Harry!">
          <i class="fa fa-ban" aria-hidden="true"></i>
          <span class="show-for-sr">Block Harry!</span>
        </a>
      </div>
    </div>
  </div>
</div>
