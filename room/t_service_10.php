<?php
$t_net_revenue = 26777;
$percent = 10;

function percent($percent){
    $dec = $percent / 100.00;
    return $dec;
}

$t_service_percent = percent($percent);

function t_service($t_net_revenue, $t_service_percent){
    $t_service = ($t_net_revenue * $t_service_percent);
    return $t_service;
}

$result = t_service($t_net_revenue, $t_service_percent);

echo "hasilnya adalah $result";
?>
