<?php
$arr=[1,2,3,4,5,6,7,8,9,10,11,12,13,14];
foreach($arr as $ar){

    if($ar<5)
        continue;

    echo $ar.'<br>';
}
?>
