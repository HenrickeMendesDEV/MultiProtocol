<?php


namespace Multi;


use pocketmine\event\Listener;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\network\mcpe\protocol\LoginPacket;
use pocketmine\network\mcpe\protocol\ProtocolInfo;

class ClientTreatment implements Listener
{

    /**
     * ClientTreatment constructor.
     * @param Loader $param
     */
    public function __construct(\Multi\Loader $param)
    {

        $this->plugin = $param;

    }

    public function ClientReceived(DataPacketReceiveEvent $event)
    {

        $pk = $event->getPacket();

        $player = $event->getPlayer();

        if ($pk instanceof LoginPacket){

        $protocol = ProtocolInfo::CURRENT_PROTOCOL;

        if ($pk->protocol < $protocol){


            $pk->protocol = $protocol;

        }

        }





    }
    
    
    
    
}