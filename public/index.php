<?php
require_once '../vendor/autoload.php';
require_once '../src/bootstrap.php';

use Onphpoint\WebtCoreDoctrineDbal\Project_Twig_Extension;

// former query
// $queryBuilder
	// ->select('gameround_id', 'rounddate', 'player1_name', 'player1_symbol', 'player2_name', 'player2_symbol')
	// ->from('gameround')
	// ->orderBy('rounddate', 'DESC');

// $result = $queryBuilder->executeQuery();

// now as DQL
$dql = "SELECT g FROM Onphpoint\WebtCoreDoctrineDbal\Models\Gameround g ORDER BY g.rounddate DESC";
$query = $entityManager->createQuery($dql);
$result = $query->getResult();

$loader = new \Twig\Loader\FilesystemLoader('../templates');
$twig = new \Twig\Environment($loader);
$twig->addExtension(new Project_Twig_Extension());
$template = $twig->load('index.html.twig');

echo $template->render(["gamerounds" => $result]);