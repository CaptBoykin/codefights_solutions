function stringPermutations($s) {
    $n = strlen($s);
    $n2 = array_count_values(str_split($s));
    $total1= 1;
    $total2= 1;

    for($i=$n;$i>1;$i--) // Calculating the top-N
    {
        $total1 *= $i;  // 1*7*6*5.....
    }

    foreach($n2 as $k => $v) // Iterates through an associative array
    {                        // [a] => 3, [b] => 1, [c] => 2....etc
        for($i=$v;$i>1;$i--) // Sets the countdown number to the quantity $v
        {
            $total2 *= $i; // 1*3*2*1  *  1*1 * 1*2*1....
        }}

    $total = ($total1/$total2);  
    $arr = [];
    $arr_size = 0;

    while($arr_size < $total)  // while the output array is not length $total...
    {
        if(!in_array($s,$arr))  // and if the current string isn't already in the $arr...
        {
            array_push($arr,$s);  // add it ,  increment the length
           $arr_size++;
        }

        $s = str_split($s);      // else, $S to an array, shuffle it, back to a string, repeat
        shuffle($s);    
        $s = implode('',$s);
    }
    sort($arr);
    return $arr;
}

