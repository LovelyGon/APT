<?php
namespace App\Enumeration;

use MyCLabs\Enum\Enum;

class StarRating extends Enum
{

    const NA = 'NA';
    const S1 = 'S1';

    const S2 = 'S2';
    
    const S3 = 'S3';
    
    const S4 = 'S4';
    
    const S5 = 'S5';

    public static function toArray()
    {
        $translatedItem = array();
        
        $class = get_called_class();        
        $reflection = new \ReflectionClass($class);
        $items = $reflection->getConstants();
        
        foreach ($items as $key => $value) {
            $translatedItem[$key] = __('star.starRating.' . $items[$key]);
        }
        return $translatedItem;
    }
}
