<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private UserPasswordEncoderInterface $passwordHasher;

    public function __construct(UserPasswordEncoderInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail("admin@gmail.com");
        $user->setPassword($this->passwordHasher->encodePassword($user,'ando1'));
        $user->setRoles(["ROLE_ADMIN"]);
        $user->setFirstname("admin");
        $user->setLastname("admin");
        $manager->persist($user);
        $manager->flush();
    }
}
