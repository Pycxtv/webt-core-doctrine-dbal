<?php
require_once '../vendor/autoload.php';
require_once '../src/bootstrap.php';

$gameround = $entityManager->find(Onphpoint\WebtCoreDoctrineDbal\Models\Gameround::class, $_POST['gameround_id']);

$entityManager->remove($gameround);
$entityManager->flush();

header('Location: /');
