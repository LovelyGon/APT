<?php
namespace App\Enumeration;

use MyCLabs\Enum\Enum;

class PopularType extends Enum
{

    const ACN = 'ACN';

    const Elev = 'Elev';

    const DLHK = 'DLHK';
    
    const FLR = 'FLR';
    
    const APS = 'APS';
    
    const NSR = 'NSR';
    const APSAC = 'APSAC';

    const GRO = 'GRO';

    const Beach = 'Beach';
    
    const OUTDOOR = 'OUTDOOR';
    
    const Bar = 'Bar';
    
    const Mssage = 'Mssage';
    const RWNM = 'RWNM';

    const Spa = 'Spa';

    const Suit = 'Suit';
    
    const Restaurant = 'Restaurant';
    
    const ODPAY = 'ODPAY';
    
    const BGSE = 'BGSE';
    const ANSPAP = 'ANSPAP';

    const HFD = 'HFD';

    const GCW2M = 'GCW2M';
    
    const BBQFLT = 'BBQFLT';
    
    const TNC = 'TNC';
    
    const GRDL = 'GRDL';
    const PRBA = 'PRBA';

    const FNC = 'FNC';

    const FCFDG = 'FCFDG';
    
    const PLMSYFCWLR = 'PLMSYFCWLR';
    
    const WSFOS = 'WSFOS';
    
    const Sauna = 'Sauna';
    const Windsurfing = 'Windsurfing';

    const BAF = 'BAF';

    const Shoeshine = 'Shoeshine';
    
    const Canoeing = 'Canoeing';
    
    const Hiking = 'Hiking';
    
    const NA5S = 'Diving';
    const Fishing = 'Fishing';

    const OPseasonal = 'OPseasonal';


    public static function toArray()
    {
        $translatedItem = array();
        
        $class = get_called_class();        
        $reflection = new \ReflectionClass($class);
        $items = $reflection->getConstants();
        
        foreach ($items as $key => $value) {
            $translatedItem[$key] = __('Popular.Popular_type.' . $items[$key]);
        }
        return $translatedItem;
    }
}
