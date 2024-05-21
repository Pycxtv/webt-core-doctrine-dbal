<?php
require_once '../vendor/autoload.php';
require_once '../src/bootstrap.php';

if ($_POST['rounddate'] === '') {
    $date = time();
} else {
    $date = strtotime($_POST['rounddate']);
}

$gameround = new Onphpoint\WebtCoreDoctrineDbal\Models\Gameround(
    $_POST['player1_name'],
    $_POST['player2_name'],
    $_POST['player1_symbol'],
    $_POST['player2_symbol'],
    $date
);

$entityManager->persist($gameround);
$entityManager->flush();

header('Location: /');