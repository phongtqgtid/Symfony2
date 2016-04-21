<?php
/**
 * Created by PhpStorm.
 * User: quatt_000
 * Date: 4/5/16
 * Time: 7:55 PM
 */

namespace Ens\JobeetBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ens\JobeetBundle\Entity\Job;
use Symfony\Component\Validator\Constraints\DateTime;

class LoadJobData extends AbstractFixture implements OrderedFixtureInterface
{
  /**
     * Load data fixtures with the passed EntityManager
    *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $em)
    {
        for($i = 100; $i <= 130; $i++)
        {
            $job = new Job();
            $job->setCategory($em->merge($this->getReference('category-programming')));
            $job->setType('full-time');
            $job->setCompany('Company '.$i);
            $job->setPosition('Web Developer');
            $job->setLocation('Paris, France');
            $job->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit.');
            $job->setHowToApply('Send your resume to lorem.ipsum [at] dolor.sit');
            $job->setIsPublic(true);
            $job->setIsActivated(true);
            $job->setToken('job_'.$i);
            $job->setEmail('job@example.com');
            $job->setExpiresAt(new \DateTime('2016-12-12'));

            $em->persist($job);
        }

        $em->flush();
    }
    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
     return 2;// the order in which fixtures will be loaded
    }
}