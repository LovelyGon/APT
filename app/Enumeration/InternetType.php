<?php
namespace App\Enumeration;

use MyCLabs\Enum\Enum;

class InternetType extends Enum
{

    const ywf = 'ywf';

    const ynwf = 'ynwf';

    const no = 'no';

    public static function toArray()
    {
        $translatedItem = array();
        
        $class = get_called_class();        
        $reflection = new \ReflectionClass($class);
        $items = $reflection->getConstants();
        
        foreach ($items as $key => $value) {
            $translatedItem[$key] = __('internet.interner_type.' . $items[$key]);
        }
        return $translatedItem;
    }
}
