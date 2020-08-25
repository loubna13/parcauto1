<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;
use Faker\Factory;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{  

    private $encoder;
    private $faker;

       public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
        $this->faker = Factory::create();
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
        
        for($i=0; $i<10; $i++){

            $user2 = new User();
            $user2->setEmail($this->faker->email);
            $user2->setRoles(['']);
            $user2->setPrenom($this->faker->firstName);
            $user2->setNom($this->faker->name);
            $user2->setTelephone($this->faker->phoneNumber);
    
            $password = $this->encoder->encodePassword($user2, 'pass_1234');
            $user2->setPassword($password);
            $manager->persist($user2); 

        }
        for($i=0; $i<10; $i++){

            $individu = new User();
            $individu->setNomIndividu($this->faker->name);
            $individu->setPrenomIndividu($this->faker->firstName);
            $individu->setTelIndividu($this->faker->phoneNumber);
            $individu->setCinIndividu($this->faker->name);
            $individu->setPathphotoIndividu($this->faker->phoneNumber);

            $password = $this->encoder->encodePassword($individu, 'pass_1234');
            $individu->setPassword($password);
            $manager->persist($individu); 

        }

        $manager->persist($user1);
        
        $manager->flush();
       
    }
}
