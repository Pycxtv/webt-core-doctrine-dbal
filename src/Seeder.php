<?php
require_once __DIR__.'/../vendor/autoload.php';
require_once 'bootstrap.php';

use Onphpoint\WebtCoreDoctrineDbal\fixtures\RoundDataLoader;

use Doctrine\Common\DataFixtures\Executor\ORMExecutor;
use Doctrine\Common\DataFixtures\Loader;
use Doctrine\Common\DataFixtures\Purger\ORMPurger;

$loader = new Loader();
$loader->addFixture(new RoundDataLoader());

$executor = new ORMExecutor($entityManager, new ORMPurger());
$executor->execute($loader->getFixtures());