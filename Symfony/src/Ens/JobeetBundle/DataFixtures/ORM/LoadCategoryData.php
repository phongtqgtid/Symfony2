<?php
/**
 * Created by PhpStorm.
 * User: quatt_000
 * Date: 4/5/16
 * Time: 7:53 PM
 */

namespace Ens\JobeetBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ens\JobeetBundle\Entity\Category;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $design = new Category();
        $design->setName('Design');

        $programming = new Category();
        $programming->setName('Programming');

        $manager = new Category();
        $manager->setName('Manager');

        $administrator = new Category();
        $administrator->setName('Administrator');

        $em->persist($design);
        $em->persist($programming);
        $em->persist($manager);
        $em->persist($administrator);

        $em->flush();

        $this->addReference('category-design', $design);
        $this->addReference('category-programming', $programming);
        $this->addReference('category-manager', $manager);
        $this->addReference('category-administrator', $administrator);
    }

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 1;
    }
}