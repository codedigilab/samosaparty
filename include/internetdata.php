<?php

$six="6 Month";
$four="4 Month";
$three="3 Month";
$month="Monthly";

$i = 0;
$date=date("d/m/Y");
$datemonth=date("m");

$dt2 = new DateTime('+1 month');
$nextdue = $dt2->format('m');
$addonemonth=date("m");

$addonemonth=date("d");

$sushantlokbill= $date >= "12/$datemonth/2025" ? "<span class='badge bg-success'>Bill Generate</span>" : "12/$datemonth/2025";
$sector141= $date >= "12/$datemonth/2025" ? "<span class='badge bg-success'>Bill Generate</span>" : "12/$datemonth/2025";
$centralkitchengurgaon= $date >= "12/$datemonth/2025" ? "<span class='badge bg-success'>Bill Generate</span>" : "12/$datemonth/2025";
$janakpuri= $date >= "12/$datemonth/2025" ? "<span class='badge bg-success'>Bill Generate</span>" : "12/$datemonth/2025";
$defencecolony= $date >= "24/$datemonth/2025" ? "<span class='badge bg-success'>Bill Generate</span>" : "24/$datemonth/2025";




//check every month
$indirapuram= $date <= "27/$datemonth/2025" ? "<span class='badge bg-success'>Bill Generate</span>" : "27/$datemonth/2025";
$saritavihar= $date <= "27/$datemonth/2025" ? "<span class='badge bg-success'>Bill Generate</span>" : "27/$datemonth/2025";


?>