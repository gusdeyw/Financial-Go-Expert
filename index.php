<?php
function toDecimal($percent){
    $dec = $percent / 100.00;
    return $dec;
}
$room = array(
    "type" => "",
    "sqm" => 0,
    "bed" => 0,
    "name" => "",
    "inventory" => 0,
    "publish_rate" => 0,
    "online_fee" => 0,
    "In-property" => 0,
    "breakfast" => 0,
    "gross_rate" => 0,
    "T-gross_rate" => 0,
    "T-net_revenue" => 0,
    "T-service" => 0,
    "T-tax" => 0,
);

var_dump($room);


$roomisi = array(
    "type" => "Villa",
    "sqm" => 250,
    "bed" => 2,
    "name" => "Beautifull Boutique Villa",
    "inventory" => 19,
    "publish_rate" => 4000,
    "online_fee" => 5%,
    "In-property" => 0,
    "breakfast" => 0,
    "gross_rate" => 0,
    "T-gross_rate" => 0,
    "T-net_revenue" => 0,
    "T-service" => 0,
    "T-tax" => 0,
);

?>