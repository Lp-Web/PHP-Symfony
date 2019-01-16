<?php
namespace AppBundle\DataFixture;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\Annonce;

class AnnonceFixture extends Fixture {

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager) {
        $annonce = new Annonce();
        $annonce -> setName("Portable 359 pouces royal de luxe, compatbile Fortnite");
        $annonce -> setDescription("Se portabl manifiq, vs prokura dé sensasion innedit qd vs vs rigolé a se je merveiille sur se fantastik je ké Fortnite ");
        $annonce -> setPrix(4000);
        $manager -> persist($annonce);

        $annonce2 = new Annonce();
        $annonce2 -> setName("Ordi tro bi1");
        $annonce2 -> setPrix(10247);
        $manager -> persist($annonce2);

        $manager -> flush();
    }

}