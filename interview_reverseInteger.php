function reverseInteger($x) {

    $y = (int)implode(array_reverse(str_split($x)));
    
    return($x < 0)? ($y*-1):$y;
}
