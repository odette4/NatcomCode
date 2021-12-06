

<?php
// $date1 = "2016-07-31";
// $date2 = "2016-08-05";

function dateDiff($date1, $date2)
{
    $date1_ts = strtotime($date1);
    $date2_ts = strtotime($date2);
    $diff = $date2_ts - $date1_ts;
    return ceil(abs($diff / 86400));
}
$date1=$_POST['startDate'];
$date2=$_POST['endDate'];
if($date1<$date2){
   $datecount=dateDiff($date1, $date2);
   echo "days is:".$datecount;
}elseif($date1==$date2){

echo "dates are equal";
}else{

    echo "invalid date format";
}


?>