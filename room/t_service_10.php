<?php
$t_net_revenue = 26777;
$percent_service = 10;

function percent($percent_service){
    $dec = $percent_service / 100.00;
    return $dec;
}

$t_service_percent = percent($percent_service);

function t_service($t_net_revenue, $t_service_percent){
    $t_service = ($t_net_revenue * $t_service_percent);
    return $t_service;
}

$result = t_service($t_net_revenue, $t_service_percent);
$result_ceil = round ($result);

echo "hasilnya adalah $result_ceil";
?>
