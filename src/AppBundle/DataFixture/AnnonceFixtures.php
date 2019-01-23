<?php
namespace AppBundle\DataFixture;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\Annonce;

class AnnonceFixtures extends Fixture implements DependentFixtureInterface {

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager) {
        $annonce1 = new Annonce();
        $annonce1 -> setName("Portable 359 pouces royal de luxe, compatbile Fortnite");
        $annonce1 -> setDescription("Se portabl manifiq, vs prokura dé sensasion innedit qd vs vs rigolé a se je merveiille sur se fantastik je ké Fortnite ");
        $annonce1 -> setPrix(4000);
        $annonce1->setCategory($this->getReference("category1"));
        $manager -> persist($annonce1);

        $annonce2 = new Annonce();
        $annonce2 -> setName("Ordi tro bi1");
        $annonce2 -> setPrix(10247);
        $annonce2->setCategory($this->getReference("category1"));
        $manager -> persist($annonce2);

        $annonce3 = new Annonce();
        $annonce3->setName("Truc pas cher");
        $annonce3->setPrix(3.70);
        $annonce3->setCategory($this->getReference("category2"));
        $manager->persist($annonce3);

        $manager -> flush();
    }

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on
     *
     * @return array
     */
    function getDependencies()
    {
        return array(
          CategoryFixtures::class
        );
    }


}