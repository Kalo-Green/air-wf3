<?php

namespace App\DataFixtures;

use App\Entity\Ville;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();

        // np: on créer un objet de class Ville (+clic droit, import class)

        $ville = new Ville();

        // $ville->setNom('Paris')->setDepartement('75')->setPopulation(2161000);
        $ville
            ->setNom('Paris')
            ->setDepartement('75')
            ->setPopulation(2161000);
        



        // $manager->persist($product);

        $manager->persist($ville);

        $manager->flush();
    }
}
