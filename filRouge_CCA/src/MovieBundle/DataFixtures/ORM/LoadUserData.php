<?php
//src/MovieBundle/DataFixtures/ORM/LoadUserData.php

namespace MovieBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MovieBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $userAdmin->setPrenomUtilisateur('admin');
        $userAdmin->setNomUtilisateur('admin');
        $userAdmin->setPassword('test');
        $userAdmin->setEmail('admin@talkseries.fr');

        $manager->persist($userAdmin);
        $manager->flush();
    }
}