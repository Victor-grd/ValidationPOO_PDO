<?php

$allCharacters = array();
foreach (Character::getCharacters() as $character) {
  $perso_name = $character['name'];
  $role_name = $character['role'];

  $$perso_name = new $role_name($character['role'], $character['character_id'], $character['name'],$character['role_id'],$character['health'],$character['strength'], $character['image']);
  array_push($allCharacters, $perso_name);
}
?>


<div class="characters swiper-container">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
          <!-- Slides -->
          <?php  foreach ($allCharacters as $key => $character) : ?>
            <div class="card border-dark mb-3 swiper-slide" style="max-width: 20rem;">
              <div class="card-header">
                <?=$$character->getRoleName()?>
                <form method="post" action="./CRUD/deleteCharacter.php">
                  <input type="hidden" name="id" value="<?=$$character->getId()?>">
                  <button type="submit" class="close">&times;</button>
                </form>

              </div>
              <div class="card-body">
                <h4 class="card-title"><?=$$character->getName()?></h4>
                <div class="card-infos">
                  <img class="card-image" src="<?=$$character->getImage()?>" alt="">
                  <div class="card-stats">
                    <span>PV : <?=$$character->getHealth()?></span> <br>
                    <span>ATK : <?=$$character->getStrength()?></span>
                  </div>
                </div>
              </div>
            </div>
          <?php  endforeach ?>

      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- If we need scrollbar -->
      <!-- <div class="swiper-scrollbar"></div> -->
  </div>
