<?php
function array_xor ($array_a, $array_b)
{
    $union_array = array_merge($array_a, $array_b);
    $intersect_array = array_intersect($array_a, $array_b);
    return array_diff($union_array, $intersect_array);
}