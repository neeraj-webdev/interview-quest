<?php
    /*
        Second highest number without using any array function 
    */

    $array = array(0,23,4,89,2,9,10,77,100,3,6);

    $first = $second = $array[0];

    for($i=0; $i < count($array); $i++) {

        if($first < $array[$i]) {
            $second = $first; 
            $first = $array[$i];
        } 
        else if( $second < $array[$i] ) {
            $second = $array[$i];
        }

    }

    printf("First: %d",$first);
    printf(" Second: %d",$second);