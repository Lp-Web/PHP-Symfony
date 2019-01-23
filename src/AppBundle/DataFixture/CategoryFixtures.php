<?php
/**
 * Created by PhpStorm.
 * User: leona
 * Date: 23/01/2019
 * Time: 22:17
 */

namespace AppBundle\DataFixture;


use AppBundle\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $category1 = new Category();
        $category1->setName("category 1");
        $category1->setColor("Blue");
        $manager->persist($category1);

        $category2 = new Category();
        $category2->setName("category 2");
        $category2->setColor("Red");
        $manager->persist($category2);

        $manager->flush();

        // To use these fixtures in others fixtures files
        $this->addReference("category1", $category1);
        $this->addReference("category2", $category2);
    }

}