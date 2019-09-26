
<?php
require_once('.env.php');

include './elements/layouts/header.php';
?>
<section class="content">
    <?php
    include './elements/form.php';
    include './elements/fight.php';
    ?>
</section>
<?php
include './elements/selectCharacter.php';

include './elements/layouts/footer.php';
?>
