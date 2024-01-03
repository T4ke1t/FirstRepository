<?php
function n_array_diff ($a1, $a2)
{
    foreach($a1 as $k => $v) {
        $r[$k] = is_array($v) ? n_array_diff($a1[$k], $a2[$k]) : array_diff_key($a1, $a2); }
    return $r;
}