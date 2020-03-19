<?php

namespace App\DataFixtures;

use App\Entity\Game;
use App\Entity\Player;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class GameFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $this->newLine($manager, "Culture", "10", "");
        $this->newLine($manager, "Nerd", "", "");


        $manager->flush();
    }

    public function newLine(ObjectManager $manager, string $name, int $maxPlayer, Player $player)
    {
        $game = new Game();
        $game->setName($name);
        $game->setMaxPlayer($maxPlayer);
        $game->addPlayer($player);
        $manager->persist($game);
    }
}
