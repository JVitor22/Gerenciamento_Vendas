<?php
    
    echo "Hello world";
    
    $i = 0;
    
    
    while($i < 10){
        echo $i;
        $i++;
    }
    
    $arr = array(1,2,3);
    foreach($arr as $j){
        echo "<br>" . $j;
    }
?>