<?php
namespace App\Enumeration;

use MyCLabs\Enum\Enum;

class ServcieType extends Enum
{

    const ALMCL = 'ALMCL';

    const WAKESERVICE = 'WAKESERVICE';

    const TOWELS = 'TOWELS';
    
    const EXTRA = 'EXTRA';

    public static function toArray()
    {
        $translatedItem = array();
        
        $class = get_called_class();        
        $reflection = new \ReflectionClass($class);
        $items = $reflection->getConstants();
        
        foreach ($items as $key => $value) {
            $translatedItem[$key] = __('facilities.Servcie_and_Extras.' . $items[$key]);
        }
        return $translatedItem;
    }
}
