function firstNotRepeatingCharacter($s) {

$s2 = str_split($s);
$s3 = array_count_values(str_split($s));
foreach($s2 as $k => $v)
{   if(array_key_exists($v,$s3) && $s3[$v] == 1)
    {
        return $v;
    }
}
return '_';
}
