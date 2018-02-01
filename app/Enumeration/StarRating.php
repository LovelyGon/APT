<?php
namespace App\Enumeration;

use MyCLabs\Enum\Enum;

class starRating extends Enum
{

    const NA = '0';
    const S1 = '1';

    const S2 = '2';
    
    const S3 = '3';
    
    const S4 = '4';
    
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
