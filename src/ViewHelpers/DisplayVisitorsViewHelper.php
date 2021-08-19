<?php

namespace App\ViewHelpers;

use App\Entities\VisitorEntity;

class DisplayVisitorsViewHelper
{
    public static function displayVisitors($visitors): string
    {
        date_default_timezone_set('Europe/London');
        $count = 1;
        $output = '';
        foreach ($visitors as $visitor) {

            $output .= '<tr class="visitor-details" data-id ="' . $count . '" data-in = "' . $visitor['is_in'] . '">
                <td>' . $visitor['name'] . '</td>
                <td>' . $visitor['company'] . '</td>
                <td>' . date('d/m/Y H:i:s', $visitor['entry_time']) . '</td>';
                if ($visitor['is_in']) {
                    $output .= '<td> &#x2705</td>';}
                else {
                    $output .= '<td>' . date('H:i:s', $visitor['exit_time']) . '</td>';}
                '</tr>';
                $count++;
        }

        return $output;
    }

}