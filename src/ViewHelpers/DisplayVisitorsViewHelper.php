<?php

namespace App\ViewHelpers;

use App\Entities\VisitorEntity;

class DisplayVisitorsViewHelper
{
    public static function displayVisitors($visitors): string
    {
        $output = '';
        foreach ($visitors as $visitor) {
            $output .= '<div>
                <p>NAME: ' . $visitor->getName() . '</p>
                <p>COMPANY: ' . $visitor->getCompany() . '</p>
                </div>';
        }

        return $output;
    }

}