#!/usr/bin/php

<?php
$one=$argv[1];
$two=$argv[2];
$three=$argv[3];

$number=fnCalculate($one,$two,$three);
print "$number";

function fnCalculate($argOne,$argTwo,$argThird)
{
  $ARGM = array("A"=>"1", "B"=>"2", "C"=>"3","D"=>"4","E"=>"5","F"=>"6");
  if($argOne !='' && $argTwo !=''){	 	
		$valOne=$ARGM[$argOne];
	    $valTwo=$ARGM[$argTwo];
	}
	
  if($argOne == "A")
   {	
	  $first = array( 00,10,20,50,120,1120); # Future dev : This will be come from csv file.
	for($f=0;$f<=5;$f++)
    {
		$a=1;
		$f1=$f+1;
		//print " $a - $f1 = $first[$f] \n";
		$speedOne[$a][$f1]=$first[$f];
    }
	
	$finalResult=$speedOne[$valOne][$valTwo];
	
   }	   
   if($argOne == "B")
   {   
	$sec = array( 10,00,20,50,120,1120);
	for($s=0;$s<=5;$s++)
    {
		$s1=$s+1;		
		$b=2;
		//print " $b - $s1 = $sec[$s] \n";
		$speedTwo[$b][$s1]=$sec[$s];
    }
	   $finalResult=$speedTwo[$valOne][$valTwo];
   } 
   
   if($argOne == "C")
   { 
    $three = array( 20,10,00,30,40,1140);
	for($t=0;$t<=5;$t++)
    {
		$t1=$t+1;		
		$c=3;
		//print " $c - $t1 = $three[$t] \n";
		$speedThree[$c][$t1]=$three[$t];
    }
	 $finalResult=$speedThree[$valOne][$valTwo];
   }
  if($argOne == "D")
  { 
   $four = array( 50,100,30,00,10,1110);
   for($fr=0;$fr<=5;$fr++)
    {
		$fr1=$fr+1;		
		$d=4;
	  // print " $d - $fr1 = $four[$fr] \n";
		$speedFour[$d][$fr1]=$four[$fr];
    }
	$finalResult=$speedFour[$valOne][$valTwo];
  }
  if($argOne == "E")
   { 
   $five = array( 120,110,40,10,00,1000);
   for($fv=0;$fv<=5;$fv++)
    {
		$fv1=$fv+1;		
		$e=5;
	   // print " $e - $fv1 = $five[$fv] \n";
		$speedFive[$e][$fv1]=$five[$fv];
    }
	 	$finalResult=$speedFive[$valOne][$valTwo];
  }

   if($argOne == "F")
   { 
	$six = array( 1120,1110,1040,1110,1000,00);
    for($sx=0;$sx<=5;$sx++)
    {
		$sx1=$sx+1;		
		$f=6;
		print " $f - $sx1 = $six[$sx] \n";
		$speedSix[$f][$sx1]=$six[$sx];
    }
	    $finalResult=$speedSix[$valOne][$valTwo];
   }
	
	if($finalResult <= $argThird)
	{
		return $finalResult;
	}else{
		return "Path not found";
	}
}

?>

