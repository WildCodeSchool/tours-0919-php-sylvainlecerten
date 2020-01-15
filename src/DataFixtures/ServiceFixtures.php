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
        $service1->setLanguage('fr');
        $manager->persist($service1);

        $serviceA = new Service();
        $serviceA->setTitle('Mailling campain');
        $serviceA->setDescription('I\'ll find the word to make your messages to hit their aim.');
        $serviceA->setOrdering('10');
        $serviceA->setLanguage('en');
        $manager->persist($serviceA);

        $service2 = new Service();
        $service2->setTitle('Ecriture de contenus');
        $service2->setDescription('Accrochez google et les clients. Je décris votre entreprise et ses moeurs. ');
        $service2->setOrdering('20');
        $manager->persist($service2);

        $serviceB = new Service();
        $serviceB->setTitle('Website contents');
        $serviceB->setDescription('I\'ll make your customers to be addicted to you site.');
        $serviceB->setOrdering('10');
        $serviceB->setLanguage('en');
        $manager->persist($serviceB);

        $service3 = new Service();
        $service3->setTitle('Ecriture de votre histoire.');
        $service3->setDescription('Le background est primordial pour que vos clients se reconnaissent.');
        $service3->setOrdering('30');
        $service3->setLanguage('fr');
        $manager->persist($service3);

        $serviceC = new Service();
        $serviceC->setTitle('Booklets & documents');
        $serviceC->setDescription('I\'ll write for you all booklets and documents you may need.');
        $serviceC->setOrdering('10');
        $serviceC->setLanguage('en');
        $manager->persist($serviceC);

        $manager->flush();
    }
}
