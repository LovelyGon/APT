<?php
namespace App\Enumeration;

use MyCLabs\Enum\Enum;

class starRating extends Enum
{

    const NA = '0';

    const 1S = '1';

    const 2S = '2';
    
    const 3S = '3';
    
    const 4S = '4';
    
    const S5 = '5';

    public static function toArray()
    {
        $translatedItem = array();
        
        $class = get_called_class();        
        $reflection = new \ReflectionClass($class);
        $items = $reflection->getConstants();
        
        foreach ($items as $key => $value) {
            $translatedItem[$key] = __('features.starRating.' . $items[$key]);
        }
        return $translatedItem;
    }
}
