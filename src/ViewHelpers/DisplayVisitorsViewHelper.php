<?php

namespace App\ViewHelpers;

use App\Entities\VisitorEntity;

class DisplayVisitorsViewHelper
{
    public static function displayVisitors($visitors): string
    {
        date_default_timezone_set('Europe/London');
        $output = '';
        foreach ($visitors as $visitor) {

            $output .= '<tr>
                <td>' . $visitor['name'] . '</td>
                <td>' . $visitor['company'] . '</td>
                <td>' . date('m/d/Y H:i:s', $visitor['entry_time']) . '</td>';
                if ($visitor['is_in']) {
                    $output .= '<td> &#x2705</td>';}
                else {
                    $output .= '<td> - </td>';}

                '</tr>';
        }

        return $output;
    }

    public static function displaySearchVisitors($visitors){
        date_default_timezone_set('Europe/London');
        $output = '';
        foreach ($visitors as $visitor) {

            $output .= '<tr>
                <td>' . $visitor['name'] . '</td>
                <td>' . $visitor['company'] . '</td>
                <td>' . date('m/d/Y H:i:s', $visitor['entry_time']) . '</td>';
        }
            '</tr>';

        return $output;
    }

}