<?php

namespace Multi;

use pocketmine\plugin\PluginBase;

class Loader extends PluginBase
{


    public $accepteds = [];

        public function onEnable()
        {

         $this->registerEvent();

        }

   public function registerEvent()
    {

       $this->getServer()->getPluginManager()->registerEvents(new ClientTreatment($this), $this);


        }


}