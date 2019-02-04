<?php
/**
 * Created by PhpStorm.
 * User: lebonnet5
 * Date: 04/02/19
 * Time: 07:54
 */

namespace AppBundle\DataFixture;


use AppBundle\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername("user");
        $user->setPlainPassword("user");
        $user->setEmail("user@user.fr");
        $user->setEnabled(true);
        $manager->persist($user);

        $admin=new User();
        $admin->setUsername("admin");
        $admin->setPlainPassword("admin");
        $admin->setEmail("admin@admin.fr");
        $admin->setEnabled(true);
        $admin->addRole("ROLE_ADMIN");
        $manager->persist($admin);

        $manager->flush();
    }

}