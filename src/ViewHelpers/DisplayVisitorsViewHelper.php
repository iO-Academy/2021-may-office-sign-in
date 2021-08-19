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
                    $output .= '<td>&#x2705</td><td><button 
                         data-name="'. $visitor['name'] .
                        '" type="button" class="signOutButtonAdmin btn btn-secondary
                btn-lg active admin-btn" data-toggle="modal" data-target="#signOutModal">Sign Out</button></td>';}
                else {
                    $output .= '<td> - </td>';}
                '</tr>';
        }
        return $output;
    }

    public static function displaySearchVisitors($visitors){
        date_default_timezone_set('Europe/London');
        $output = '';
        if (count($visitors) === 0) {
            $output .= '<div>No results found</div>';
        } elseif (count($visitors) > 1) {
            $output .= '<div>Multiple names found, please be more specific.</div>';
        } else {
            $output .= '<tr>
                <td>' . $visitors[0]['name'] . '</td>
                <td>' . $visitors[0]['company'] . '</td>
                <td>' . date('m/d/Y H:i:s', $visitors[0]['entry_time']) . '</td>
                <td><button data-name="'. $visitors[0]['name'] . '" type="button" class="closeSearch btn btn-secondary
                btn-lg active admin-btn" data-toggle="modal" data-target="#signOutModal">&#10008</button></td></tr>';
        }
        return $output;
    }

}