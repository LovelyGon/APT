<?php
namespace App\Enumeration;

use MyCLabs\Enum\Enum;

class starRating extends Enum
{

    const NA = 'NA';

    const NA1S = '1S';

    const NA2S = '2S';
    
    const NA3S = '3S';
    
    const NA4S = '4S';
    
    const NA5S = '5S';

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
