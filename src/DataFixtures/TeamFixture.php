<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Team;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class TeamFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 20; $i++) {
        $faker = Factory::create();
        $team = new Team();
        $team->setName($faker->words(2, true));
        $manager->persist($team);
        }

        $manager->flush();
    }
}
