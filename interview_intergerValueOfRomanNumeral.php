function integerValueOfRomanNumeral($s) {
$arr = array("I"=>1,"V"=>5,"X"=>10,"L"=>50,"C"=>100,"D"=>500,"M"=>1000);
$sum = 0;
$x = str_split($s);
$l = sizeof($x);
for($i=0;$i<$l;$i++)
{
    $x1 = $x[$i];
    $x2 = $x[$i+1];
    
    // disqualifier for not being a valid letter or
    // having too many of a single letter
    if(   !array_key_exists($x1,$arr)  ||
          (((array_count_values($x)[$x1] > 3) &&
             ($x1 == "C" || $x1 == "X" || $x1 == "I"))  ||
          ((array_count_values($x)[$x1] > 1) &&
             ($x1 == "V" || $x1 == "L" || $x1 == "D"))) &&
          !(strpos(implode('',$x),"IV") || strpos(implode('',$x),"IX") ||
            strpos(implode('',$x),"XL") || strpos(implode('',$x),"XC") ||
            strpos(implode('',$x),"CD") || strpos(implode('',$x),"CM"))
      )
        { $sum = -1; break;}
    
    if($arr[$x1] < $arr[$x2])
    {
        //The below disqualifies if the value of $x1 occurs AFTER a two-digit number
        $y  = array_slice($x,$i+2);
        if(in_array($x1,$y) && 
               !(strpos(implode('',$y),"IV") || strpos(implode('',$y),"IX") ||
                 strpos(implode('',$y),"XL") || strpos(implode('',$y),"XC") ||
                 strpos(implode('',$y),"CD") || strpos(implode('',$y),"CM")))
                { $sum = -1; break;}
        
        //The below actually factors in the two-digit numbers 
        //as they are the only condition in which $x1 
        //could be feasibly lower than $x2
        if($x1 == "I" && $x2 == "V"){$sum += 4; $i++; continue;}
        elseif($x1 == "I" && $x2 == "X"){$sum += 9; $i++;   continue;}
        elseif($x1 == "X" && $x2 == "L"){$sum += 40; $i++;  continue;}
        elseif($x1 == "X" && $x2 == "C"){$sum += 90; $i++;  continue;}
        elseif($x1 == "C" && $x2 == "D"){$sum += 400; $i++; continue;}
        elseif($x1 == "C" && $x2 == "M"){$sum += 900; $i++; continue;}
        else{ $sum = -1; break;}
    }
    $sum += $arr[$x1];
}
return $sum;
}

