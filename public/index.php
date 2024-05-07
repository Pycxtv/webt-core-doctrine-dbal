<?php
// use Doctrine\DBAL\DriverManager;

require_once '../vendor/autoload.php';

use Doctrine\DBAL\Tools\DsnParser;


use Doctrine\DBAL\DriverManager;
use Onphpoint\WebtCoreDoctrineDbal\Project_Twig_Extension;

$dsnParser = new DsnParser();
$connectionParams = $dsnParser
	->parse('pdo-sqlite:///../usarps.sqlite');

$conn = DriverManager::getConnection($connectionParams);


$queryBuilder = $conn->createQueryBuilder();


$queryBuilder
	->select('gameround_id', 'rounddate', 'player1_name', 'player1_symbol', 'player2_name', 'player2_symbol')
	->from('gameround')
	->orderBy('rounddate', 'DESC');

$result = $queryBuilder->executeQuery();

// while ($row = $result->fetchAssociative()) {
// echo sprintf("Round %d: %s played %s against %s played %s\n", $row['gameround_id'], $row['player1_name'], $row['player1_symbol'], $row['player2_name'], $row['player2_symbol']);
// }


$rounds = array_map(function ($row) {

	// calculate winner
	$winner = null;
	if ($row['player1_symbol'] === $row['player2_symbol']) {
		$winner = null;
	} elseif ($row['player1_symbol'] === 'R' && $row['player2_symbol'] === 'S') {
		$winner = 1;
	} elseif ($row['player1_symbol'] === 'S' && $row['player2_symbol'] === 'P') {
		$winner = 1;
	} elseif ($row['player1_symbol'] === 'P' && $row['player2_symbol'] === 'R') {
		$winner = 1;
	} else {
		$winner = 2;
	}

	$date = new DateTime();
	$date->setTimestamp(intval($row['rounddate']));
	// $date = date_parse($date->format('Y-m-d H:i:s'));

	return [
		'gameround_id' => $row['gameround_id'],
		'rounddate' => $date,
		'player1_name' => $row['player1_name'],
		'player1_symbol' => $row['player1_symbol'],
		'player2_name' => $row['player2_name'],
		'player2_symbol' => $row['player2_symbol'],
		'winner' => $winner
	];

}, $result->fetchAllAssociative());


$loader = new \Twig\Loader\FilesystemLoader('../templates');
$twig = new \Twig\Environment($loader);
$twig->addExtension(new Project_Twig_Extension());
$template = $twig->load('index.html.twig');

echo $template->render(["gamerounds" => $rounds]);