<?php
namespace App\Enumeration;

use MyCLabs\Enum\Enum;

class ChildrenType extends Enum
{



    const YES = 'YES';

    const NO = 'NO';

    public static function toArray()
    {
        $translatedItem = array();
        
        $class = get_called_class();        
        $reflection = new \ReflectionClass($class);
        $items = $reflection->getConstants();
        
        foreach ($items as $key => $value) {
            $translatedItem[$key] = __('features.Children_type.' . $items[$key]);
        }
        return $translatedItem;
    }
}
