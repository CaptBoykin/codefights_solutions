function rotateImage($a) {
    $len = sizeof($a[0]);
    
    for($x=0;$x<$len;$x++)
    {   
        $len2 = sizeof($a);
        for($y=$len2-1;$y>=0;$y--)
        {
            $z = $a[$y][$x];
            $temp[$x][] = $z;
        }
    }
    return $temp;
}

