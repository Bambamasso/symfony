<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use EsperoSoft\Faker\Faker;
use App\Entity\User;
use App\Entity\Adress;
use App\Entity\Profile;
use App\Entity\Article;
use App\Entity\Categiry;

class BlogFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $faker=new Faker();
        
         $users=[];
         for($i=0 ; $i < 100; $i++ ){
            $user = (new User())->setFullName($faker->full_name())
            ->setEmail($faker->email())
            ->setPasword(sha1("dfsfsdferfger"))
            ->setCreatedAt($faker->dateTimeImmutable())
            ->setUpdatedAt($faker->dateTimeImmutable())
;
$address = (new Adress())->setStreep($faker->streetAddress())
                  ->setCodePostale($faker->codepostal())
                  ->setCity($faker->city())
                  ->setCountry($faker->country())
                  ->setCreatedAt($faker->dateTimeImmutable())
                  ->setUpdatedAt($faker->dateTimeImmutable())
;
$profile = (new Profile())->setPicture($faker->image())
                  ->setCoverPicture($faker->image())
                  ->setDescription($faker->description(60))
                  ->setCreatedAt($faker->dateTimeImmutable())
                  ->setUpdatedAt($faker->dateTimeImmutable())
;
$user->addAdress($address);
$user->setProfile($profile);
$users[] = $user;
$manager->persist($address);
$manager->persist($profile);
$manager->persist($user);
         }

 $categories=[];
// $faker=new Faker();
for($i=0 ;$i < 10; $i++){
$categorie=(new Categiry())->setName($faker->description(30))
                           ->setDescription($faker->description())
                           ->setImageUrl($faker->image())
                           ->setCreatedAt($faker->dateTimeImmutable())
                           ->setUpdatedAt($faker->dateTimeImmutable())
                         
;

$categories[]=$categorie;
$manager->persist($categorie);
}            

for($i=0 ;$i < 300; $i++){
  $article=(new Article())->setTitle($faker->description(30))
                             ->setContent($faker->text(5,10))
                             ->setImageUrl($faker->image())
                             ->setCreatedAt($faker->dateTimeImmutable())
                             ->setUpdatedAt($faker->dateTimeImmutable())
                             ->setAuthor($users[rand(0, count($users)-1)])
                             ->addCategiry($categories[rand(0, count($categories)-1)])
                            

  ;
  
  $manager->persist($article);
  }   

        $manager->flush();
    }
}
