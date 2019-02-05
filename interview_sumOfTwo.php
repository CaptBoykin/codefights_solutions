function sumOfTwo($a, $b, $v) {

    $a=array_unique($a);
    $b=array_flip(array_unique($b));
    sort($a);
    
    
    foreach($a as $k1 => $v1)
    {
        $d1 = ($v-$v1);
        if(array_key_exists($d1,$b))
        { return true; break;}
    }
    return false;
}

