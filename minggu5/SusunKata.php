<?php 

    function urut(&$Name){
        sort($Name);
    }


    $Name = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
    echo "Susunan Sebelum : <br>";
    $i = 0;
    foreach($Name as $name){
        if($i < count($Name)-1){
            echo $name."  ";
        }else{
            echo $name;
        }
        $i++;
    }

    echo "<br><br>";
    echo "Susunan Sesudah : <br>";
    urut($Name);

    $i = 0;
    foreach($Name as $name){
        if($i < count($Name)-1){
            echo $name."  ";
        }else{
            echo $name;
        }
        $i++;
    }
?>