<?php
    require "Fisico.php";
    $f = new Fisico(1, "J", "E", "", "", "", "F", " " ,13661552627, "MG-19161286" );
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
    
    echo "<br>" . ($f->getNome());
    echo "<br>" . ($f->setNome("John"));
    
    $f->imprimir();
    echo "\n" . $f
    
    
    
?>