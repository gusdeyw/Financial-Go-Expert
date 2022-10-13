<?php
$t_gross_rate = 32400;
$cost = 1.21;



function t_net_revenue($t_gross_rate, $cost){
    $t_net_revenue = $t_gross_rate/$cost;
    return $t_net_revenue;
}

$result = t_net_revenue($t_gross_rate, $cost);
$result_ceil = round ($result);

echo "hasilnya adalah $result_ceil";
?>
