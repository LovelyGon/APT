<?php
namespace App\Enumeration;

use MyCLabs\Enum\Enum;

class PropertyType extends Enum
{

    const APT = 'apt';

    const MHR = 'mhr';

    const SSH = 'ssh';

    public static function toArray()
    {
        $translatedItem = array();
        
        $class = get_called_class();        
        $reflection = new \ReflectionClass($class);
        $items = $reflection->getConstants();
        
        foreach ($items as $key => $value) {
            $translatedItem[$key] = __('property.property_type.' . $items[$key]);
        }
        return $translatedItem;
    }
    
    public static function toTranslatedArray()
    {
        $translatedItem = array();
        
        
        $items = PropertyType::toArray();
        
        foreach ($items as $key => $value) {
            $translatedItem[$key] = __('property.property_type.' . $items[$key]);
        }
        
        return $translatedItem;
    }
}
