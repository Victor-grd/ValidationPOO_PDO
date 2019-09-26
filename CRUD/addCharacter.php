<?php
    require '../.env.php';
    require './class/Character.php';
    Character::addCharacter($_POST['name'],$_POST['health'],$_POST['strength'],$_POST['role']);
    header("Location: " . HOME);
?>