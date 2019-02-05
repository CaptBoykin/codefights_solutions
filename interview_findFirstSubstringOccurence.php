function findFirstSubstringOccurrence($s, $x) {
    $s = str_split($s);
    $x = str_split($x);
    $len1 = sizeof($s);
    $len2 = sizeof($x);
    for($x=0;$x<$len1-1;$x++)
    {
        $c = $x;
        if($s[$x] == $x[0])
        {
            for($y=0;$y<$len2-1;$y++)
            {
                if($x[$c] != $x[$y])
                {return -1;}
                $c++;
            }
        }
        return $x;
    }
}
