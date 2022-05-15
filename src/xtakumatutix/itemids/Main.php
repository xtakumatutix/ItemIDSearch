<?php

namespace xtakumatutix\itemids;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\player\Player;

Class Main extends PluginBase
{
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        if(!($sender instanceof Player)) {
            return true;
        }
        $item = $sender->getInventory()->getItemInHand();
        $id = $item->getId();
        $meta = $item->getMeta();
        $name = $item->getName();
        $count = $item->getCount();
        $sender->sendMessage($id .':'. $meta .':'.$count.' §7('.$name.')');
        return true;
    }
}