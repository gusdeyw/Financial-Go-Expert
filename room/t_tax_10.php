<?php
$t_net_revenue = 26777;
$t_service = 2678;
$percent_tax = 10;

function percent($percent_tax){
    $dec = $percent_tax / 100.00;
    return $dec;
}

$t_service_percent = percent($percent_tax);

function t_tax($t_net_revenue, $t_service, $t_service_percent){
    $t_tax = (($t_net_revenue + $t_service ) * $t_service_percent);
    return $t_tax;
}

$result = t_tax($t_net_revenue, $t_service, $t_service_percent);


echo "hasilnya adalah $result";
?>
