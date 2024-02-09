<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Bureau; // Assurez-vous que le chemin est correct pour votre entité Bureau

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create("fr_FR");

        for ($i = 0; $i < 20; $i++) {
            $bureau = new Bureau();
            $bureau->setNom($faker->lastName)
                ->setPrenom($faker->firstName)
                ->setemail($faker->email)
                ->setAnnee($faker->year)
                ->setPole($faker->word)
                ->setLinkedin($faker->url)
                ->setImage($faker->imageUrl(200, 200, 'business', true));

            $manager->persist($bureau);
        }

        $manager->flush();
    }
}
