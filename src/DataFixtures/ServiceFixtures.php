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
        $service1->setTitle('Campagne de mailling');
        $service1->setDescription('Je rédigerai pour vous vos communication auprès de vos clients afin de sublimer le message que vous voulez faire passer.');
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
        $service2->setTitle('Contenus Web');
        $service2->setDescription('Je mettrai en valeur votre site web grâce à des textes accrocheurs et pertinents.');
        $service2->setOrdering('10');
        $service2->setLanguage('fr');
        $manager->persist($service2);

        $serviceB = new Service();
        $serviceB->setTitle('Website contents');
        $serviceB->setDescription('I\'ll make your customers to be addicted to you site.');
        $serviceB->setOrdering('10');
        $serviceB->setLanguage('en');
        $manager->persist($serviceB);

        $service3 = new Service();
        $service3->setTitle('Brochure & documents');
        $service3->setDescription('Je rédige pour vous vos brochure et documents institutionnels.');
        $service3->setOrdering('10');
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
