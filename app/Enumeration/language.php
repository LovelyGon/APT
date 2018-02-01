<?php
namespace App\Enumeration;

use MyCLabs\Enum\Enum;

class language extends Enum
{

    
    const vietnam = 'vietnam';
    const nhatban = 'nhatban';
    const campuchia = 'campuchia';

    public static function toArray()
    {
        $translatedItem = array();
        
        $class = get_called_class();        
        $reflection = new \ReflectionClass($class);
        $items = $reflection->getConstants();
        foreach ($items as $key => $value) {
            $translatedItem[$key] = __('features.Language_type' . $items[$key]);
        }
        
        return $translatedItem;
    }
}
