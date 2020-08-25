<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{  

    private $encoder;

       public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager)
    {

        

        // $product = new Product();
        // $manager->persist($product);

        // $admin = new User();
        // $admin->setNom('barkat');
        // $admin->setPrenom('loubna');
        // $admin->setEmail('loubnabarkat@outlook.fr');
        // $admin->setRoles(['ROLE_ADMIN']);
        // $admin->setTelephone('0.6.61.05.46.94');
        
        // $password = $this->encoder->encodePassword($admin, '1111');
        // $admin->setPassword($password);
      

        // $manager->persist($admin);

        
        
        $user1 = new User();
        $user1->setEmail('test1@test.com');
        $user1->setRoles(['ROLE_ADMIN']);
        $user1->setPrenom('loubna');
        $user1->setNom('barkat');
        $user1->setTelephone('0661056494');

        $password = $this->encoder->encodePassword($user1, 'pass_1234');
        $user1->setPassword($password);
        

        $user2 = new User();
        $user2->setEmail('test2@test.com');
        $user2->setRoles(['ROLE_USER']);
        $user2->setPrenom('');
        $user2->setNom('');
        $user2->setTelephone('');

        $password = $this->encoder->encodePassword($user2, 'pass_1234');
        $user2->setPassword($password);


        $manager->persist($user1);
        $manager->persist($user2); 
        $manager->flush();
       
    }
}
