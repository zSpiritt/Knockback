<?php

namespace Knockback;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

class Main extends PluginBase
{
    public static Config $config;
    protected function onEnable(): void
    {
        $this->saveResource("config.yml");
        self::$config = new Config($this->getDataFolder() . 'config.yml', Config::YAML);
        $this->getServer()->getPluginManager()->registerEvents(new EventListener(), $this);
    }
}