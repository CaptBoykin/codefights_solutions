$dishes = 
[["Salad", "Tomato", "Cucumber", "Salad", "Sauce"],
["Pizza", "Tomato", "Sausage", "Sauce", "Dough"],
["Quesadilla", "Chicken", "Cheese", "Sauce"],
["Sandwich", "Salad", "Bread", "Tomato", "Cheese"]];

$ins=[];

$groups=[];

$d_len=sizeof($dishes);

for($i=0;$i<$d_len-1;$i++)
{
    $d_len2=sizeof($dishes[$i]);
    for($ii=0;$ii<$d_len2-1;$ii++)
    {
        $x = $dishes[$i][$ii];

        if(($ii != 0) && (!in_array($x,$ins)))
        {
            array_push($ins,$x);
        }
    }
}

sort($ins);
$ins_len=sizeof($ins);


for($i=0;$i<$ins_len;$i++)
{
    $ctr=0; 
    for($ii=0;$ii<$d_len;$ii++)
    {
        if(array_key_exists($ins[$i],array_flip($dishes[$ii])))
        {
            $ctr++;
            print("INGREDIANT: {$ins[$i]} <br>");
            print("CTR VALUE: {$ctr} <br>");
        }
        if($ctr >= 2)
        {  
            if(!isset($groups[$i][0]))
            { 
                print("PUTTING INGREDIATE:{$ins[$i]} IN [{$i}][0]...<br>");
                $groups[$i][0] = $ins[$i];
            }
            print("Entering third loop (iii)...<br>\n");
            for($iii=0;$iii<$d_len;$iii++)
            {
                if(array_key_exists($ins[$i],array_flip($dishes[$iii])))
                {
                    print("INGREDIATE:{$ins[$i]} in dishes sub array[{$iii}] <br>");
                    array_push($groups[$i],$dishes[$iii][0]);
                }
            }
            break;
        }
     }
  }
$g_len = sizeof($groups);

foreach($groups as $k => $v)
{
    $g_len2 = sizeof($groups[$k]);
    $slice = array_slice($groups[$k],1,$g_len2,FALSE);
    sort($slice);
    array_splice($groups[$k],1,$g_len2,$slice);
}
print_r($groups);
