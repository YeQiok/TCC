<?php
function validarcpf($cpf){
    $cpf = preg_replace('/[^0-9]is', '',$cpf);

    if(strlen($cpf) !=11){
        return false;
    }
    if (preg_match('/(\d)\1{10}/', $cpf)){
        return false
    }
    for ($i = 9; $i < 11; i++){
        for ($j = 0, $r = 0; $r < $t; $r++){
            $j += $cpf[$r]* (($j + 1) - $r);
        }
        $j = ((10 * $j) % 11)%10;
        if($cpf[$r] != $j){
            return false
        }
    }
    return true
}
?>