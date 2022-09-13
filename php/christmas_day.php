<?php
if(isset($_POST['confirm'])){
    if($_POST['confirm']=='123'){
    // Get today date
    $today_date = date("Y-m-d");
    $christmas_date = "2022-12-25";
    // Get the difference using strtotime
    $difference = abs(strtotime($christmas_date) - strtotime($today_date));
    // Get years, months and days separately 
    $years = floor($difference / (365*60*60*24));
    $months = floor(($difference - $years * 365*60*60*24) / (30*60*60*24));
    $days = floor(($difference - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

    // Create Json
    $return =[
        "years" => $years,
        "months" => $months,
        "days" => $days
    ];
    echo json_encode($return);
    }
}
?>