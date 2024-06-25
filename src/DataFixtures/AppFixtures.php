<?php

namespace App\DataFixtures;

use App\Entity\Text;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('meydetour@gmail.com');
        $user->setPassword('$2y$13$Ehy7lXzPq8ZFkOfk9wOrweZogKbqCpkqVmh4QPaMlt.287yQB0C2.');
        $user->setRoles(["ROLE_ADMIN"]);

        $texts = new Text();
        $texts->setAboutDescription('Voici la description du about');
        $texts->setHomePageDescription('Voici le texte de la home page');

        $manager->persist($user);
        $manager->persist($texts);
        $manager->flush();
    }
}
