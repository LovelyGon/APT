<?php
namespace App\Enumeration;

use MyCLabs\Enum\Enum;

class AccessibilityType extends Enum
{

    const RILOTGF = 'RILOTGF';

    const RICWA = 'RICWA';

    const UFABE = 'UFABE';
    
    const UFABSO = 'UFABSO';

    public static function toArray()
    {
        $translatedItem = array();
        
        $class = get_called_class();        
        $reflection = new \ReflectionClass($class);
        $items = $reflection->getConstants();
        
        foreach ($items as $key => $value) {
            $translatedItem[$key] = __('facilities.Accessibility.' . $items[$key]);
        }
        return $translatedItem;
    }
}
