<?php

namespace App\DataFixtures;

use App\Entity\Blog;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class BlogFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $publication = new blog();
        $publication->setTitle('Ouverture de mon site !!!');
        $publication->setSubtitles('Mon premier article');
        $publication->setPublication('Voici mon tout premier article sur cette section blog toute neuve.');
        $manager->persist($publication);

        $manager->flush();
    }
}
