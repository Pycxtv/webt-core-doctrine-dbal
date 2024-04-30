<?php
require_once '../vendor/autoload.php';

use Doctrine\DBAL\Tools\DsnParser;


use Doctrine\DBAL\DriverManager;

$dsnParser = new DsnParser();
$connectionParams = $dsnParser
->parse('pdo-sqlite:///../usarps.sqlite');

$conn = DriverManager::getConnection($connectionParams);

$queryBuilder = $conn->createQueryBuilder();

$_POST;

$date = strtotime($_POST['rounddate']);

$queryBuilder
    ->insert('gameround')
    ->values([
        'rounddate' => ':rounddate',
        'player1_name' => ':player1_name',
        'player1_symbol' => ':player1_symbol',
        'player2_name' => ':player2_name',
        'player2_symbol' => ':player2_symbol'
    ])
    ->setParameter('rounddate', $date)
    ->setParameter('player1_name', $_POST['player1_name'])
    ->setParameter('player1_symbol', $_POST['player1_symbol'])
    ->setParameter('player2_name', $_POST['player2_name'])
    ->setParameter('player2_symbol', $_POST['player2_symbol']);

$queryBuilder->executeQuery();

header('Location: /');