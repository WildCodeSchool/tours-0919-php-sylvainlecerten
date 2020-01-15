<?php

namespace App\DataFixtures;

use App\Entity\Service;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ServiceFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $service1 = new Service();
        $service1->setTitle('Ecriture d\'emails clients');
        $service1->setDescription('Fidélisez des cibles captés et enclines à cliquer. Je fais donc du putaclic !');
        $service1->setOrdering('10');
        $manager->persist($service1);

        $service2 = new Service();
        $service2->setTitle('Ecriture de contenus');
        $service2->setDescription('Accrochez google et les clients. Je décris votre entreprise et ses moeurs. ');
        $service2->setOrdering('20');
        $manager->persist($service2);

        $service3 = new Service();
        $service3->setTitle('Ecriture de votre histoire.');
        $service3->setDescription('Le background est primordial que vos clients se reconnaissent.');
        $service3->setOrdering('30');
        $manager->persist($service3);

        $service4 = new Service();
        $service4->setTitle('Écriture de rapports ennuyeux à mourir.');
        $service4->setDescription('Il faut bien que votre dévoué serviteur se tape le sal boulot.');
        $service4->setOrdering('40');
        $manager->persist($service4);

        $manager->flush();
    }
}
