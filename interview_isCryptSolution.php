function isCryptSolution($crypt, $solution) {
    $s_hash=[];
    $s_len=sizeof($solution);
    
    for($i=0;$i<$s_len;$i++)
    {
        $s_len2=sizeof($solution[$i]);
        for($ii=0;$ii<$s_len2-1;$ii++)
        {
            $k=$solution[$i][$ii];
            $v=$solution[$i][$ii+1];
            $s_hash[$k] = $v;
        }
    }

    $c_len=sizeof($crypt);
    
    for($i=0;$i<$c_len;$i++)
    {
        $crypt[$i] = str_split($crypt[$i]);

        foreach($crypt[$i] as $k => $v)
        {
            if(array_key_exists($v,$s_hash))
            { $crypt[$i][$k] = $s_hash[$v]; }
        }
        implode($crypt[$i]);
    }
    
    if(($crypt[0][0] == 0 && sizeof($crypt[0])> 1) ||
       ($crypt[1][0] == 0 && sizeof($crypt[1])> 1) ||
       ($crypt [2][0] == 0 && sizeof($crypt[2])> 1))
    { return false; }
    elseif(implode($crypt[0]) + implode($crypt[1]) == implode($crypt[2]))
    { return true;  }
    else
    { return false; }

}
