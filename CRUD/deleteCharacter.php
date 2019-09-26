<?php
    require '../.env.php';
    require './class/Character.php';
    Character::deleteCharacter($_POST['id']);
    header("Location: " . HOME);
?>