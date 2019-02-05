function missingNumber($arr) {
$n = di($arr);
return (int)implode(', ',(array_diff(range(1,$n),$arr)));
}
