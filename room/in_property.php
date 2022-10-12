<?php
function in_property($publish_rate, $online_fee){
    $in_property = ($publish_rate * (1-$online_fee));
    return $in_property;
}
?>
