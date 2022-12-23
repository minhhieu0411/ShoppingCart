<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Account;

class AccountFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         $account1 = new account();
        $account1->setusername('MinhHieu')
            ->setRoles(["ROLE_ADMIN"])
            ->setPassword(123456);
        $manager->persist($account1);

        $account2 = new account();
        $account2->setusername('Customer1')
            ->setRoles(["ROLE_USER"])
            ->setPassword(111111);
         $manager->persist($account2);

        $manager->flush();
    }
}
