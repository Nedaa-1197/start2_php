<?php
	function say_hi($Last, $course="PHP"){//if i need to define the parameter i need to put it in the last.
		return "Welocome to $course in $Last";
	}

	$x = say_hi("HTU");
	echo $x;

	echo "<hr>";
	//Question 1
	function prime_num($num){
		if($num==1){
			return "$num is not aprime number";
		}
		if ($num==2) {
			return "$num is aprime number";
		
		}
			for ($i=2; $i < $num ; $i++) { 
				if($num % $i == 1){
					return "$num is aprime number";
				}else{
					return "$num is not aprime number";
				}
			}
		}

	$P = prime_num(5);
	echo $P;
	//Question 2
	echo "<hr>";
	function is_lowest($word){
		if (ctype_lower($word)) {
			return "$word :is in the lower case";		
		}else{
			return "$word :is not in the lower case";
		}
	}

	$S=is_lowest("Nedaa");
	echo $S;
	echo "<hr>";
	//Question 3
	function factorial($val){
		$fact=1;
		for ($i=1; $i <= $val; $i++) { 
			$fact=$fact*$i;
		}return $fact;
	}
	$test=factorial(5);
     echo $test;
     echo "<hr>";
     //Question 4
     function is_str($value){
     	if(is_string($value)){
     		return "$value : string"."<br>";
     	}else{
     		return "$value : not string"."<br>";
     	}
     }
     $try=is_str(1);
     echo $try;
     echo "<hr>";
     //Question 5
     function salary($sal){
     	if ($sal>=500) {
     		$sal-=$sal*0.18 ;
     		return "your salary after tax is ".$sal;
     	}else{
     		$sal-=$sal*0.16 ;
      		return "your salary after tax is ".$sal;	
     	}
     }

     $sal2=salary(400);
     echo $sal2;

     echo "<hr>";
     //recureive function to find the summation between 1 to 10.
     function sum1($num2){
     	for($i=2 ; $i<=10 ; $i++){
     		$num2=$num2+$i;

     		if($num2<=10){
     		sum1($num2);
     	    }  
     	}   
     			
     	return $num2;
     }

     $input = sum1(1);
     echo $input;
     echo "<hr>";
     //other sol.
     $num3=0;
     function rec($num3){
     	if ($num3<=10) {
     		return $num3 + rec($num3+1);
     	}
     }
     $out= rec(1);
     echo $out;

     //----------------------

     

    
     	
     	    

      


	?>	