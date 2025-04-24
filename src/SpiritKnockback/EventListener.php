<?php

namespace SpiritKnockback;

use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\Listener;
use SpiritKnockback\Main;

class EventListener implements Listener
{
    public function kb(EntityDamageByEntityEvent $event): void
    {
        $event->setAttackCooldown(Main::$config->get("attack-cooldown"));
        $event->setKnockBack(Main::$config->get("knockback"));
    }
}