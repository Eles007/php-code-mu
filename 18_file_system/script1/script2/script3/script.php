<?php
function generateDaySelect($name = 'name', $days)
{
    $html = "<select name=\"$name\">";
    foreach ($days as $key => $day) {
        $html .= "<option value=\"$key\">$day</option>";
    }
    $html .= "</select>";
    return $html;
}

?>