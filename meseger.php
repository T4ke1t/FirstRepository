<?php
function mySerialize(&$arr,$pos)
{
    $arr = serialize($arr);
}