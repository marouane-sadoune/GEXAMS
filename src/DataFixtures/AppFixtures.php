<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\EnsiegnantFactory;
use App\Factory\EtudiantFactory;
use App\Factory\FilierFactory;
use App\Factory\ModuleFactory;
use App\Factory\NoteFactory;
use App\Factory\SemestreFactory; #Semester
use App\Factory\UserFactory; #user
use App\Factory\App\FFactory;
use App\Factory\EtudiantsFactory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        FilierFactory::createMany(10);
        EnsiegnantFactory::createMany(10);
        EtudiantsFactory::createMany(10);
        SemestreFactory::createMany(10);
        ModuleFactory::createMany(10);
        NoteFactory::createMany(10);
        UserFactory::createMany(1);
        $manager->flush();
    }
}
