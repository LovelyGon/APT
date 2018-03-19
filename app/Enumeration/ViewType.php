<?php
namespace App\Enumeration;

use MyCLabs\Enum\Enum;

class ViewType extends Enum
{

    const BALCONY = 'BALCONY';

    const Patio = 'PATIO';

    const VIEW = 'VIEW';
     const TERRACE = 'TERRACE';

    const GARDEN = 'GARDEN';

    const LAKE = 'LAKE';
    const LANDMARK = 'LANDMARK';

    const PLV = 'PLV ';

    const RVV = 'RVV';
     const SV = 'SV';

    public static function toArray()
    {
        $translatedItem = array();
        
        $class = get_called_class();        
        $reflection = new \ReflectionClass($class);
        $items = $reflection->getConstants();
        
        foreach ($items as $key => $value) {
            $translatedItem[$key] = __('facilities.View.' . $items[$key]);
        }
        return $translatedItem;
    }
}
