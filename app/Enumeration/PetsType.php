<?php
namespace App\Enumeration;

use MyCLabs\Enum\Enum;

class PetsType extends Enum
{


    const yesap = 'yesap';
    const yesbo = 'yesbo';

    const no = 'no';

    public static function toArray()
    {
        $translatedItem = array();
        
        $class = get_called_class();        
        $reflection = new \ReflectionClass($class);
        $items = $reflection->getConstants();
        
        foreach ($items as $key => $value) {
            $translatedItem[$key] = __('features.Pets_type.' . $items[$key]);
        }
        return $translatedItem;
    }
}
