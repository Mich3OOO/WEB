<?php

function addFiltre($NFiltre, $tab ,$setand)
{
    
    $close = true;
    

    $r = "";

    
    for($i = 0 ; $i <count($tab); $i++)
    {
        
        if($setand)
        {
            $r = $r . " and";
            $setand = false;
        }
        if($close)
        {
            $r = $r . " ( ".$NFiltre." LIKE '%".$tab[$i] ."%'" ;
            $close = false;
        }
        else
        {
            $r = $r . " or ".$NFiltre." LIKE '%".$tab[$i] ."%'" ;
        }
        
        
    }

    if(!$close)
    {
        $r = $r . " )";

    }
    
    return $r;
}
?>