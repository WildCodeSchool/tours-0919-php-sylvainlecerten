<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Content;

class ContentFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $content1 = new Content();
        $content1->setType('title');
        $content1->setValue('Qui c\'est ce mec ?');
        $content1->setCategory('whoami');
        $content1->setOrdering('10');
        $manager->persist($content1);

        $content2 = new Content();
        $content2->setType('subtitle');
        $content2->setValue('Qui est donc ce French Copywriter que personne ne connaît vraiment ?');
        $content2->setCategory('whoami');
        $content2->setOrdering('20');
        $manager->persist($content2);

        $content3 = new Content();
        $content3->setType('paragraph');
        $content3->setValue('Est-ce vraiment un mec?');
        $content3->setCategory('whoami');
        $content3->setOrdering('30');
        $manager->persist($content3);

        $content4 = new Content();
        $content4->setType('paragraph');
        $content4->setValue('Il semblerait que oui.');
        $content4->setCategory('whoami');
        $content4->setOrdering('40');
        $manager->persist($content4);

        $content5 = new Content();
        $content5->setType('paragraph');
        $content5->setValue('Tout ce que nous savons sur lui, c’est qu’il est Français.');
        $content5->setCategory('whoami');
        $content5->setOrdering('50');
        $manager->persist($content5);

        $content13 = new Content();
        $content13->setType('title');
        $content13->setValue('Je suis né écrivain.');
        $content13->setCategory('presentation');
        $content13->setOrdering('10');
        $manager->persist($content13);

        $content14 = new Content();
        $content14->setType('subtitle');
        $content14->setValue('Le premier mot qui est sorti de ma bouche fut “bibliothèque”.');
        $content14->setCategory('presentation');
        $content14->setOrdering('20');
        $manager->persist($content14);

        $content15 = new Content();
        $content15->setType('paragraph');
        $content15->setValue('J’ai appris à lire avant de savoir parler.');
        $content15->setCategory('presentation');
        $content15->setOrdering('30');
        $manager->persist($content15);

        $content16 = new Content();
        $content16->setType('paragraph');
        $content16->setValue('J’ai appris à écrire avant de commencer à marcher.');
        $content16->setCategory('presentation');
        $content16->setOrdering('40');
        $manager->persist($content16);

        $content17 = new Content();
        $content17->setType('paragraph');
        $content17->setValue('J’ai appris à taper au clavier avant de savoir me servir de ma fourchette.');
        $content17->setCategory('presentation');
        $content17->setOrdering('50');
        $manager->persist($content17);



        $manager->flush();
    }
}
