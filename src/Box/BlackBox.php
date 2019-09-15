<?php

namespace Box;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server ;
use pocketmine\utils\Config;
use captainduck\GappleCooldown\CooldownTask;
use pocketmine\event\Listener;
use pocketmine\block\Block;
use pocketmine\math\Vector3;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\enchantment\EnchantmentInstance;
use pocketmine\item\Item;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\level\sound\AnvilBreakSound;
use pocketmine\level\particle\EnchantmentTableParticle;
use pocketmine\network\mcpe\protocol\AddEntityPacket;
use pocketmine\entity\Entity;
use pocketmine\command\Command;
use pocketmine\command\ConsoleCommandSender;

class BlackBox extends PluginBase implements Listener{

    public function onEnable(){
 $this->getServer()->getPluginManager()->registerEvents($this, $this);
    } 

        public function onInteract(PlayerInteractEvent $event){

 if (($event->getBlock()->getId() == 41) && ($event->getItem()->getId() === 131)){
        
        $player = $event->getPlayer();
        $itemHold = $event->getItem();
        $name = $player->getName();
        $level = $player->getLevel();
		      $target = $event->getBlock();
		      $click = new AnvilBreakSound($player);
			  $block = $event->getBlock();
			  $level = $target->getLevel();

$player->getInventory()->removeItem(Item::get(131, 0, 1));
$player->getInventory()->removeItem(Item::get(131, 1, 1));
$player->getInventory()->removeItem(Item::get(131, 2, 1));
$player->getInventory()->removeItem(Item::get(131, 3, 1));
$player->getInventory()->removeItem(Item::get(131, 4, 1));

			  $num = rand(1,80);
			  if($num >= 26 && $num <= 35){
				 $player->getInventory()->addItem(Item::get(329, 0, 1));
				 Server::getInstance()->broadcastMessage("§9(§e!§9) §9$name §eviens de gagner §91 Heal Stick §edans une box !");

				 $player->getLevel()->addSound($click);
			  }


			 if($num >= 36 && $num <= 55){
				$player->getInventory()->addItem(Item::get(322, 1, 5));
				Server::getInstance()->broadcastMessage("§9(§e!§9) §9$name §eviens de gagner §95 Pommes d'or §edans une box !");

				 $player->getLevel()->addSound($click);
			 }

			  if($num >= 61 && $num <= 70){
				 $eco = Server::getInstance()->getPluginManager()->getPlugin("EconomyAPI");
				 $eco->addMoney($player, 10000);
				 Server::getInstance()->broadcastMessage("§9(§e!§9) §9$name §eviens de gagner §910000€ §edans une box !");

				 $player->getLevel()->addSound($click);
			  }
			  
			 if($num >= 71 && $num <= 75){
				$player->getInventory()->addItem(Item::get(344, 0, 5));
				Server::getInstance()->broadcastMessage("§9(§e!§9) §9$name §eviens de gagner §95 Dynamite §edans une box !");

				 $player->getLevel()->addSound($click);
			 }
			 
			 			 if($num >= 76 && $num <= 80){
				$player->getInventory()->addItem(Item::get(131, 0, 1));
				Server::getInstance()->broadcastMessage("§9(§e!§9) §9$name §eviens de gagner §91 Clé §edans une box !");

				 $player->getLevel()->addSound($click);
			 }
			  
      } else { 
}
		  }
		 } 
