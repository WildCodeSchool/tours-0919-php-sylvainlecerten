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
        $content1->setLanguage('fr');
        $manager->persist($content1);

        $contentA = new Content();
        $contentA->setType('title');
        $contentA->setValue('Who\'s this guy ?');
        $contentA->setCategory('whoami');
        $contentA->setOrdering('10');
        $contentA->setLanguage('en');
        $manager->persist($contentA);

        $content2 = new Content();
        $content2->setType('subtitle');
        $content2->setValue('Qui est donc ce French Copywriter que personne ne connaît vraiment ?');
        $content2->setCategory('whoami');
        $content2->setOrdering('20');
        $content2->setLanguage('fr');
        $manager->persist($content2);

        $contentB = new Content();
        $contentB->setType('subtitle');
        $contentB->setValue('Who\'s this French Copywriter nobody really knows ?');
        $contentB->setCategory('whoami');
        $contentB->setOrdering('20');
        $contentB->setLanguage('en');
        $manager->persist($contentB);

        $content3 = new Content();
        $content3->setType('paragraph');
        $content3->setValue('Est-ce vraiment un mec?');
        $content3->setCategory('whoami');
        $content3->setOrdering('30');
        $content3->setLanguage('fr');
        $manager->persist($content3);

        $contentC = new Content();
        $contentC->setType('paragraph');
        $contentC->setValue('Is he really a dude ?');
        $contentC->setCategory('whoami');
        $contentC->setOrdering('30');
        $contentC->setLanguage('en');
        $manager->persist($contentC);

        $content4 = new Content();
        $content4->setType('paragraph');
        $content4->setValue('Il semblerait que oui.');
        $content4->setCategory('whoami');
        $content4->setOrdering('40');
        $content4->setLanguage('fr');
        $manager->persist($content4);

        $contentD = new Content();
        $contentD->setType('paragraph');
        $contentD->setValue('It seems that he\'s a he.');
        $contentD->setCategory('whoami');
        $contentD->setOrdering('40');
        $contentD->setLanguage('en');
        $manager->persist($contentD);

        $content5 = new Content();
        $content5->setType('paragraph');
        $content5->setValue('Tout ce que nous savons sur lui, c’est qu’il est Français.');
        $content5->setCategory('whoami');
        $content5->setOrdering('50');
        $content5->setLanguage('fr');
        $manager->persist($content5);

        $contentE = new Content();
        $contentE->setType('paragraph');
        $contentE->setValue('All that we know about him is that he\'s french.');
        $contentE->setCategory('whoami');
        $contentE->setOrdering('50');
        $contentE->setLanguage('en');
        $manager->persist($contentE);

        $content13 = new Content();
        $content13->setType('title');
        $content13->setValue('Je suis né écrivain.');
        $content13->setCategory('presentation');
        $content13->setOrdering('10');
        $content13->setLanguage('fr');
        $manager->persist($content13);

        $contentF = new Content();
        $contentF->setType('title');
        $contentF->setValue('I was born a writer.');
        $contentF->setCategory('presentation');
        $contentF->setOrdering('10');
        $contentF->setLanguage('en');
        $manager->persist($contentF);

        $content14 = new Content();
        $content14->setType('subtitle');
        $content14->setValue('Le premier mot qui est sorti de ma bouche fut “bibliothèque”.');
        $content14->setCategory('presentation');
        $content14->setOrdering('20');
        $content14->setLanguage('fr');
        $manager->persist($content14);

        $contentG = new Content();
        $contentG->setType('subtitle');
        $contentG->setValue('This first word that came out of my mouth was "library".');
        $contentG->setCategory('presentation');
        $contentG->setOrdering('20');
        $contentG->setLanguage('en');
        $manager->persist($contentG);

        $content15 = new Content();
        $content15->setType('paragraph');
        $content15->setValue('J’ai appris à lire avant de savoir parler.');
        $content15->setCategory('presentation');
        $content15->setOrdering('30');
        $content15->setLanguage('fr');
        $manager->persist($content15);

        $contentH = new Content();
        $contentH->setType('paragraph');
        $contentH->setValue('I learned to read before I was able to speak.');
        $contentH->setCategory('presentation');
        $contentH->setOrdering('30');
        $contentH->setLanguage('en');
        $manager->persist($contentH);

        $content16 = new Content();
        $content16->setType('paragraph');
        $content16->setValue('J’ai appris à écrire avant de commencer à marcher.');
        $content16->setCategory('presentation');
        $content16->setOrdering('40');
        $content16->setLanguage('fr');
        $manager->persist($content16);

        $contentI = new Content();
        $contentI->setType('paragraph');
        $contentI->setValue('I learned to write before I was able to walk.');
        $contentI->setCategory('presentation');
        $contentI->setOrdering('40');
        $contentI->setLanguage('en');
        $manager->persist($contentI);

        $content17 = new Content();
        $content17->setType('paragraph');
        $content17->setValue('J’ai appris à taper au clavier avant de savoir me servir de ma fourchette.');
        $content17->setCategory('presentation');
        $content17->setOrdering('50');
        $content17->setLanguage('fr');
        $manager->persist($content17);

        $contentJ = new Content();
        $contentJ->setType('paragraph');
        $contentJ->setValue('I learned to typewrite before I was able to use a fork.');
        $contentJ->setCategory('presentation');
        $contentJ->setOrdering('50');
        $contentJ->setLanguage('en');
        $manager->persist($contentJ);

        $manager->flush();
    }
}
