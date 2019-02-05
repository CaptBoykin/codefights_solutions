function amendTheSentence($s) {
$out = [];
$s=str_split($s);
$len=sizeof($s);
$index=0;
for($i=($len)-1;$i>=0;$i--)
{
    if(preg_match('/[A-Z]/',$s[$i]))
    {
        $index = $i;
        $s[$i] = strtolower($s[$i]);
        $x = implode(array_splice($s, $i, $len,''));
        array_unshift($out,"{$x} ");
    }
}
        $x = implode(array_splice($s, 0, $index,''));
        array_unshift($out,"{$x} ");
        return(trim(implode('',$out)));
}
