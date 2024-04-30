<?php
require_once '../vendor/autoload.php';

use Doctrine\DBAL\Tools\DsnParser;


use Doctrine\DBAL\DriverManager;

$dsnParser = new DsnParser();
$connectionParams = $dsnParser
    ->parse('pdo-sqlite:///../usarps.sqlite');

$conn = DriverManager::getConnection($connectionParams);

$queryBuilder = $conn->createQueryBuilder();

$date = strtotime($_POST['rounddate']);

$queryBuilder
    ->delete('gameround')
    ->where('gameround_id = :gameround_id')
    ->setParameter('gameround_id', $_POST['gameround_id']);

$queryBuilder->executeQuery();

header('Location: /');
