<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\EnsiegnantFactoryFactory;
use App\Factory\EtudiantFactory;
use App\Factory\FilierFactory;
use App\Factory\ModuleFactory;
use App\Factory\NoteFactory;
use App\Factory\aaa; #Semester
use App\Factory\no; #user
use App\Factory\App\FFactory;
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        FiliereFactory::createMany(10);
        $manager->flush();
    }
}
