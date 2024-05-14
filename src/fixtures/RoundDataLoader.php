<?php
namespace Onphpoint\WebtCoreDoctrineDbal\fixtures;
require_once __DIR__.'/../../vendor/autoload.php';

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Onphpoint\WebtCoreDoctrineDbal\Models\Gameround;


class RoundDataLoader implements FixtureInterface {
	public function load(ObjectManager $manager): void {
		$faker = \Faker\Factory::create();
		for ($i = 0; $i < 10; $i++) {
			$gameRound = new Gameround($faker->name, $faker->name,
				$faker->randomElement(['R', 'P', 'S']), $faker->randomElement(['R', 'P', 'S']),
				$faker->unixTime());
			$manager->persist($gameRound);
		}

		$manager->flush();
	}
}