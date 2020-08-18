<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $admin = new User();
        $admin->setNom('AdminNom');
        $admin->setPrenom('AdminPrenom');
        $admin->setEmail('loubnabarkat@outlook.fr');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setTelephone('0.6.61.05.46.94');
        
        $password = $this->encoder->encodePassword($admin, 'admin');
        $admin->setPassword($password);
      

        $manager->persist($admin);


        
        $user = new User();
        $user->setEmail('test1@test.com');
        $user->setRoles(['ROLE_USER']);
        $user->setPrenom('');
        $user->setNom('');
        $user->setTelephone('');

        $password = $this->encoder->encodePassword($user, 'pass_1234');
        $user->setPassword($password);
        

        $user2 = new User();
        $user2->setEmail('test2@test.com');
        $user2->setRoles(['ROLE_USER']);
        $user2->setPrenom('');
        $user2->setNom('');
        $user2->setAdresse('');
        $user2->setTelephone('');

        $password = $this->encoder->encodePassword($user2, 'pass_1234');
        $user2->setPassword($password);

        
        $manager->persist($user);
        $manager->persist($user2); 

        $manager->flush();
       
    }
}
