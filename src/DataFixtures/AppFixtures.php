<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Ville;
use App\Entity\Aeroport;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        $faker = Factory::create('fr_FR');
        // $product = new Product();

        // np: on créer un objet de class Ville (+clic droit, import class)

        // $ville = new Ville();

        // // $ville->setNom('Paris')->setDepartement('75')->setPopulation(2161000);
        // // ou
        // $ville
        //     ->setNom('Paris')
        //     ->setDepartement('75')
        //     ->setPopulation(2161000);



        // // $manager->persist($product);

        // $manager->persist($ville);

    
        // boucle pour créer des objets de class aeroport et ville
        for($i=1; $i<=5; $i++) {

            $aeroport = new Aeroport();
            $aeroport
                ->setNom("Aéroport $i")
                ->setNbPistes($i);
            $manager->persist($aeroport);


            $ville = new Ville();
            $ville
                ->setNom($faker->city())
                ->setDepartement($faker->departmentName())
                ->setPopulation($faker->randomNumber(6))
                ->addAeroport($aeroport);

            $manager->persist($ville);
            if($i % 2 == 0 ) {

                $aeroport = new Aeroport();
                $aeroport
                    ->setNom("Aéroport $i bis")
                    ->setNbPistes($i);
                $manager->persist($aeroport);
                $ville->addAeroport($aeroport);
            }



        }
        $manager->flush();
    }
}
