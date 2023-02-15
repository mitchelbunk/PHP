<?php
function search($hooiberg, $speld) {
    foreach ($hooiberg as $arr){
        $arr = array(4, 2, 5, 6, 14, 7, 15, 3);
        echo $arr = array_search(14, $arr);
    }
}
$arr = array(4, 2, 5, 6, 14, 7, 15, 3);

echo search($arr, 14);