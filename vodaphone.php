#!/usr/bin/php
<?php
#################################################################################
# Script Name  : vodaphone.php												    #
# Purpose 	   : Search path 												    #	
# Developed By : Mahesh Lakshe													#
# Instruction  : Need to execute this file on Unix environment 				    # 
# Tested Below Code on https://www.tutorialspoint.com/unix_terminal_online.php  #
#################################################################################

######################################### Command line arguments
$one=$argv[1];
$two=$argv[2];
$three=$argv[3];

################################# Function Called to execute
$number=fnCalculate($one,$two,$three);
#$number=fnCalculate("C","E","1110");
print "$number\n";

######################################################### Search path and calculate distance
function fnCalculate($argOne,$argTwo,$argThird)
{
	$ARGM = array("A"=>"1", "B"=>"2", "C"=>"3","D"=>"4","E"=>"5","F"=>"6");
	if($argOne !='' && $argTwo !=''){	 	
		$valOne=$ARGM[$argOne];
		$valTwo=$ARGM[$argTwo];
	}
	if($argOne == "A")
	{	
		$first = array( 00,10,20,50,120,1120);
		$path = array("A=>A","A=>B","A=>C","A=>C=>D","A=>B=>D=>E","A=>B=>D=>E=>F");
		for($f=0;$f<=5;$f++)
		{
			$a=1;
			$f1=$f+1;
			//print " $a - $f1 = $first[$f] \n";
			$speedOne[$a][$f1]="$first[$f]  ,\t Path= $path[$f]";
		}
		$finalResult=$speedOne[$valOne][$valTwo];
	}	   
	if($argOne == "B")
	{   
		$sec = array( 10,00,10,50,120,1120);
		$path = array("B=>A","B=>B","B=>C","B=>D","B=>D=>E","B=>D=>E=>F");
		for($s=0;$s<=5;$s++)
		{
			$s1=$s+1;		
			$b=2;
			#print " $b - $s1 = $sec[$s] \n";
			$speedTwo[$b][$s1]="$sec[$s] ,\t Path= $path[$s]";
		}
		$finalResult=$speedTwo[$valOne][$valTwo];
	} 
	if($argOne == "C")
	{ 
		$three = array( 20,10,00,30,40,1140);
		$path = array("C=>A","C=>B","C=>C","C=>D","C=>D=>E","C=>D=>E=>F");
		for($t=0;$t<=5;$t++)
		{
			$t1=$t+1;		
			$c=3;
			#print " $c - $t1 = $three[$t] \n";
			$speedThree[$c][$t1]="$three[$t] ,\t Path= $path[$t]";
		}
		$finalResult=$speedThree[$valOne][$valTwo];
	}
	if($argOne == "D")
	{ 
		$four = array( 50,100,30,00,10,1010);
		$path = array("D=>C=>A","D=>B","D=>C","D=>D","D=>E","D=>E=>F");    
		for($fr=0;$fr<=5;$fr++)
		{
			$fr1=$fr+1;		
			$d=4;
			#print " $d - $fr1 = $four[$fr] \n";
			$speedFour[$d][$fr1]="$four[$fr],\t Path= $path[$fr]";
		}
		$finalResult=$speedFour[$valOne][$valTwo];
	}
	if($argOne == "E")
	{ 
		$finalResult="";
		$five = array( 120,110,40,10,00,1000);
		$path = array("E=>D=>B=>A","E=>D=>B","E=>D=>C","E=>D","E=>E","E=>F");
		for($fv=0;$fv<=5;$fv++)
		{
			$fv1=$fv+1;
			$e=5;
			$speedFive[$e][$fv1]="$five[$fv] ,\t Path= $path[$fv]";
		}
		$finalResult="";
		$finalResult=$speedFive[$valOne][$valTwo];
	}
	if($argOne == "F")
	{
		$six = array( 1120,1110,1040,1010,1000,00);
		$path = array("F=>E=>D=>B=>A","F=>E=>D=>B","F=>E=>D=>C","F=>E=>D","F=>E","F=>F");
		for($sx=0;$sx<=5;$sx++)
		{
			$sx1=$sx+1;		
			$f=6;
			#print " $f - $sx1 = $six[$sx] \n";
			$speedSix[$f][$sx1]="$six[$sx] ,\t Path= $path[$sx]";
		}
		$finalResult=$speedSix[$valOne][$valTwo];
	}
	
	list($distance,$path)=explode(",", $finalResult);
	
	if(trim($distance) < trim($argThird))
	{
		return $finalResult;
	}else{
		return "Path not found";
	}
}
?>
