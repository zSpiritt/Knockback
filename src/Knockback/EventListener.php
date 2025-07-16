<?php

namespace Knockback;

use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\Listener;

class EventListener implements Listener
{
    public function kb(EntityDamageByEntityEvent $event): void
    {
        $config = Main::$config;
        $event->setAttackCooldown($config->get("attack-cooldown"));
        $event->setKnockback($config->get("force"));
    }
}