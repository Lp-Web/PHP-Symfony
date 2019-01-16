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
        for($i = 0; $i <= 1000; $i++) {
            $annonce = new Annonce();
            $annonce -> setName($i . "Portable 359 pouces royal de luxe, compatbile Fortnite");
            $annonce -> setDescription($i . "Se portabl manifiq, vs prokura dé sensasion innedit qd vs vs rigolé a se je merveiille sur se fantastik je ké Fortnite ");
            $annonce -> setPrix(4000);

            $manager -> persist($annonce);
            $manager -> flush();
        }
    }

}