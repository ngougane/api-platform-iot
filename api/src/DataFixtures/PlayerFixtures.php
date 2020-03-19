<?php

namespace App\DataFixtures;

use App\Entity\Game;
use App\Entity\Player;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PlayerFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }

    public function newLine(ObjectManager $manager, string $macAddr, Game $game)
    {
        $player = new Player();
        $player->setMacAddress($macAddr);
        $player->setGame($game);
        $manager->persist($player);
    }
}
