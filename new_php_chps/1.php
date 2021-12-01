<?php
$counter = 0;
$name = array("amarid"=>"500","amashuk"=>"10000","ibigoma"=>"5000","imisego"=>"2000","bedcover"=>"15000");
foreach ($name as $key => $value){

 if($key=="ibigoma")
 {
  echo "Ndetse mwari munazi yuko $key bigura $value<br>";
}
else
 {
     echo" mwari muziyuko  $key agura $value <br>";
 }
    
}



?>