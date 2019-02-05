function stringReformatting($s, $k) {
$x = str_split($s);

foreach($x as $kx => $vx)	
{if($vx == '-'){unset($x[$kx]);}}

$l = sizeof($x);   
$index = $l-$k;
    
while($index > 0)
{array_splice($x, $index, 0, '-');$index-=$k;}
$x = (implode('',$x));
return $x;
}
