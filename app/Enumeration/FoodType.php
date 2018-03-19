<?php
namespace App\Enumeration;

use MyCLabs\Enum\Enum;

class FoodType extends Enum
{

    const DNA = 'DNA';

    const BAR = 'BAR';

    const OVEN = 'OVEN';
    
    const STVETOP = 'STVETOP';

    const TOAS = 'TOAS';

    const DISH = 'DISH';
    
    const ELECT = 'ELECT';

    const OUTDAR = 'OUTDAR';

    const NO = 'KTC';
    
    const KTCW = 'KTCW';

    const MCWE = 'MCWE';

    const RFGRT = 'RFGRT';
    const COFFMA = 'COFFMA';

    const HGC = 'HGC';


    public static function toArray()
    {
        $translatedItem = array();
        
        $class = get_called_class();        
        $reflection = new \ReflectionClass($class);
        $items = $reflection->getConstants();
        
        foreach ($items as $key => $value) {
            $translatedItem[$key] = __('facilities.Food_and_Drink.' . $items[$key]);
        }
        return $translatedItem;
    }
}
