<?php
function bankCardCheck($card='', $irCard=true)
{
    $card = (string) preg_replace('/\D/','',$card);
    $strlen = strlen($card);
    if($irCard==true and $strlen!=16)
        return false;
    if($irCard!=true and ($strlen<13 or $strlen>19))
        return false;
    if(!in_array($card[0],[2,4,5,6,9]))
        return false;
    
    for($i=0; $i<$strlen; $i++)
    {
        $res[$i] = $card[$i];
        if(($strlen%2)==($i%2))
        {
            $res[$i] *= 2;
            if($res[$i]>9)
                $res[$i] -= 9;        
        }
    }
    return array_sum($res)%10==0?true:false;    
}


$card = 'cardnumber';
if(bankCardCheck($card))
    echo 'ok';
else
    echo 'err';  
