<?php
// permutation
print_r(permute("tpsasurl"));

function permute($arg) {
    $array = is_string($arg) ? str_split($arg) : $arg;
    if(1 === count($array))
        return $array;
    $result = array();
    foreach($array as $key => $item)
        foreach(permute(array_diff_key($array, array($key => $item))) as $p)
            $result[] = $item . $p;
    return $result;
}