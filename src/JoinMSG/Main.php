<?php

declare(strict_types=1);

namespace JoinMSG\Main;

use pocketmine\plugin\PluginBase;
use pocketmine\Utils\TextFormat;
use pocketmine\Player;
use pocketmine\event\player\PlayerJoinEvent;


class Main extends PluginBase
{

    public function onLoad(): void
    {
        $this->getLogger()->info(TextFormat::BLUE . "JoinMSG successfully loaded!");
    }

    public function onEnable(): void
    {
        $this->getLogger()->info(TextFormat::GREEN . "JoinMSG successfully enabled! Author: a-a-ron!");
    }

    public function onDisable(): void
    {
        $this->getLogger()->info(TextFormat::RED . "JoinMSG successfully disabled! Have a nice day!");
    }

    public function onPlayerJoin(PlayerJoinEvent $event);
    {
        $player = $event->getName();
        $event->sendMessage("Hello " . $event->getName . "!");
    }
}
