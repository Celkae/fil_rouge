<?php

namespace FilRougeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use FilRougeBundle\Entity\User;

class LoadUserData implements FixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
      //creation of an admin
        $super_admin = new User();
        $super_admin->setUsername('superadmin');
        $super_admin->setSalt(md5(uniqid()));
      //creation of an admin
        $admin = new User();
        $admin->setUsername('admin');
        $admin->setSalt(md5(uniqid()));
      // Creation of an simple user
        $user = new User();
        $user->setUsername('user');
        $user->setSalt(md5(uniqid()));

      // Setting the passwords
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($superadmin, 'superadmin');
        $super_admin->setPassword($password);

        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($admin, 'admin');
        $admin->setPassword($password);

        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($user, 'user');
        $user->setPassword($password);
      // Setting the roles
        $role = array('ROLE_SUPER_ADMIN');
        $super_admin->setRoles($role);

        $role = array('ROLE_ADMIN');
        $admin->setRoles($role);

      // Persist the users
        $manager->persist($super_admin);
        $manager->persist($admin);
        $manager->persist($user);

      // Creation of the serie

        $manager->flush();
    }
}
