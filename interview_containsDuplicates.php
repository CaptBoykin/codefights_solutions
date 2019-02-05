function containsDuplicates($a) {

    $a = array_count_values($a);
    foreach($a as $k=>$v) 
    { if($v > 1) {return true; break;}}
    return false;
}
