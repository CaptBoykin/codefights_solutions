function sudoku2($grid) {
  // Y-axis
  foreach($grid[0] as $k => $v)
  {
    $x = array_count_values(array_column($grid,[$k][0]));
    foreach($x as $k => $v)
    { 
      if(preg_match('/\d/',$k) && $v > 1)
      {return false;}
    }
  }

  // X-axis
  foreach($grid as $k)
  {
      $x =  array_count_values($k);
      foreach($x as $k => $v)
      { 
          if(preg_match('/\d/',$k) && $v > 1)
          {return false;}
      }
  }
  
// 3x3
  $arr=[];
  $x = sizeof($grid[0]);
  for($i=0;$i<=$x-1;$i+=3)
  {
    $r0 = array_chunk($grid[$i],3);
    $r1 = array_chunk($grid[$i+1],3);
    $r2 = array_chunk($grid[$i+2],3);
    
    for($ii=0;$ii<=2; $ii++)
    {
      $arr = array_count_values(array_merge($r0[$ii],$r1[$ii],$r2[$ii]));
      foreach($arr as $k => $v)
      {
        if(preg_match('/\d/',$k) && $v > 1)
        {return false;}
      }
    }
  }

    return true;
  }
