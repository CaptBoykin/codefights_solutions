function numberOf1Bits($n) {
$arr = [];
while($n > 0)
{
    array_push($arr,$n%2);
    $n /= 2;
}
return(array_sum($arr));
}

