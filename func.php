<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27.09.2015
 * Time: 0:07
 */
/**
 * @param $n
 * @param $St
 * @param $Fn
 * @return array
 */
function newarr($n, $St, $Fn){
    $mass = array();
        for ($i=0; $i<$n; $i++){
        $mass[$i] = rand($St, $Fn);
    }
     return($mass);
}

/**
 * @param array $mass
 */
function prarr($mass=array()){
    echo'<table border="1 px">';
    foreach($mass as $e){
        echo '<br><td>'.($e).'</td></br>';
    }
    echo'</table>';
}

function mid($mass=array()){
    $s=0;
    foreach($mass as $e){
       $s=$s+$e;
    }
    return ($s/count($mass));
}
function trivryad($n){
    $arr = newarr($n,0, 2);
    for ($i=0; $i<count($arr); $i++){
        if (($arr[$i]==$arr[$i-1]) && ($arr[$i]==$arr[$i+1])){
            $poch = $i-1;
            $kin = $i+1;
            while
        }
    }
}



