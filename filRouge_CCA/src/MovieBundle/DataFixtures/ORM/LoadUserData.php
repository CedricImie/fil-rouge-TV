//src/MovieBundle/DataFixtures/ORM/LoadUserData.php

namespace MovieBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MovieBundleBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $userAdmin->setPassword('test');

        $manager->persist($userAdmin);
        $manager->flush();
    }
}