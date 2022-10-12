<?php

function t_gross_rate ($gross_rate, $inventory){
    $t_gross_rate = $gross_rate * $inventory;
    return $t_gross_rate;
}