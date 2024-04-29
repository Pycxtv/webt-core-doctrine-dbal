<?php
// use Doctrine\DBAL\DriverManager;

require_once '../vendor/autoload.php';

use Doctrine\DBAL\Tools\DsnParser;


use Doctrine\DBAL\DriverManager;

$dsnParser = new DsnParser();
$connectionParams = $dsnParser
->parse('pdo-sqlite:///../usarps.sqlite');

$conn = DriverManager::getConnection($connectionParams);


$queryBuilder = $conn->createQueryBuilder();


$queryBuilder
    ->select('gameround_id', 'rounddate', 'player1_name', 'player1_symbol', 'player2_name', 'player2_symbol')
    ->from('gameround');

$result = $queryBuilder->executeQuery();

// while ($row = $result->fetchAssociative()) {
    // echo sprintf("Round %d: %s played %s against %s played %s\n", $row['gameround_id'], $row['player1_name'], $row['player1_symbol'], $row['player2_name'], $row['player2_symbol']);
// }

// TBD: Twig for displaying the rounds,
// Create + Delete