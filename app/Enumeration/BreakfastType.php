<?php
namespace App\Enumeration;

use MyCLabs\Enum\Enum;

class BreakfastType extends Enum
{


    const YESAP = 'YESAP';
    const YESBO = 'YESBO';

    const NO = 'NO';

    public static function toArray()
    {
        $translatedItem = array();
        
        $class = get_called_class();        
        $reflection = new \ReflectionClass($class);
        $items = $reflection->getConstants();
        
        foreach ($items as $key => $value) {
            $translatedItem[$key] = __('features.BreakFast_type.' . $items[$key]);
        }
        return $translatedItem;
    }
}
