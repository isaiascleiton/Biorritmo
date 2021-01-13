<?php 
       
    $data =  $_POST['data'];
    $hoje = date('d/m/Y');
    
    $data = explode('/',$data);
    $hoje = explode('/',$hoje);

    $d1 = strtotime("$data[0]-$data[1]-$data[2]");
    $h = strtotime("$hoje[0]-$hoje[1]-$hoje[2]");

    $diasVividos = ($h - $d1) / 86400;

    if($diasVividos < 0){
        echo "<h3>"."Você ainda não nasceu."."</h3>";
    }    
    else{
        echo "<h3>"."Você nasceu, aproximadamente, há ".$diasVividos." dias."."</h3>";
    }   

    $fisico = (sin((2*pi()*$diasVividos)/23))*100 ;
    $emocional = (sin((2*pi()*$diasVividos)/28))*100 ;
    $intelectual = (sin((2*pi()*$diasVividos)/33))*100 ;
    $intuitivo = (sin((2*pi()*$diasVividos)/38))*100 ; 
    
    if($diasVividos>0){
    echo "Físico: " .number_format($fisico,2)."%"."<br>";
    echo "Emocional: " .number_format($emocional,2)."%"."<br>";
    echo "Intelectual: " .number_format($intelectual,2)."%"."<br>";
    echo "Intuitivo: " .number_format($intuitivo,2)."%"."<br>";
    }
?>