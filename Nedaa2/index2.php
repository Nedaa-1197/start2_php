<?php
//index array
	$x=array(1,1,1997,"Nedaa");
	echo "<pre>";
	print_r($x);//we dont use echo with array.
	$x[100]="Naser";
	$x[]="Alnadi";//after the biggest index.
	print_r($x);
	echo count($x);
	echo "<hr>";
	//--------------------------------------------
//associative array
	$salary=array("Hala"=>500,"Ihsan"=>700,"Yazan"=>800,"Yasmeen"=>1000);
	$salary[]=225;// it take index 0 such as it is begin from the beggning.
	print_r($salary);
	echo $salary["Hala"];
	echo "<hr>";
	//---------------------------------------

	$salary=array("Hala"=>500,"Ihsan"=>700,"Yazan"=>800,"Yasmeen"=>1000);
	foreach ($salary as $key => $value) {
	// here i can assign variable to index or to value or to both and print them.
		echo $key." ".$value."<br>";
	}
    echo "<hr>";
    //-----------------------------------------------
    $array1=array(4,8,15,16,23,42);
    echo count($array1)."<br>";
    echo max($array1)."<br>";
    echo min($array1)."<br>";
    sort($array1)."<br>";
    print_r($array1)."<br>";
    rsort($array1)."<br>";
    print_r($array1)."<br>";
    $string1=implode("*", $array1);
    echo $string1."<br>";
    print_r(explode("*", $string1))."<br>";
    in_array(15, $array1);
    print_r($array1)."<br>";
    echo "<hr>";
    $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
	print_r(array_change_key_case($age,CASE_UPPER));
	$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
	print_r(array_chunk($cars,2));
	$fname=array("Peter","Ben","Joe");
	$age=array("35","37","43");
	$c=array_combine($fname,$age);
	print_r($c);
    echo "<hr>";
    //------------------------------------------------
//multidemensional array 
	$multi=array(array(1,2,3),array(4,5,6),array(7,8));
	/*print_r($multi);*/  

	foreach ($multi as $key3=> $val) {
		foreach ($val as $keyy => $val2) {
			echo $key3." ".$keyy." ".$val2."<br>";
		}
			
       }
	
	//--------------------------------------------------
//elearning home work
	//home1
	echo "<hr>";
	$J='{"Title": "The Cuckoos Calling",
	"Auther": "Robert Galbraith",
	"Detials": {
		"Publisher":"Little Brown"
	}}';
		$test=json_decode($J,true);
		echo "<pre>";
		
		foreach ($test as $key => $value) {
			if (is_array($value)) {
				foreach ($value as $key2 => $value2) {
				    echo $key2.":".$value2."<br>";	
				}
			}else{
		echo $key.":".$value."<br>";	
	}
	}
	
			
	echo "<hr>";
	//--------------------------------------------------
	$home2=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
	asort($home2);//sort by value in ascending order.
	print_r($home2);
    ksort($home2);//sort by key in ascending order.
	print_r($home2);
    arsort($home2);//sort by value in descending order.
	print_r($home2);
    krsort($home2);//sort by key in descending order.
	print_r($home2);
	echo "<hr>";
	//----------------------------------------------------
	$home3=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

	$avg=array_sum($home3)/count($home3);
	echo "Average Temperature is : ".$avg."<br>";
	asort($home3);
	$A1=array_unique($home3);
	echo "the shortest numbers: ";
	print_r(implode(" ", (array_slice($A1, 0, 5, true))));
	echo "<br>";
	arsort($home3);
	$A2=array_unique($home3);
	echo "the longest numbers: ";
    print_r(implode(" ", (array_slice($A2, 0, 5, true))));
	echo "<hr>";
	//--------------------------------------------------
	$home4=array(1,2,3,4,5,1,1,2,4,3,3,1,4,3,3);
	print_r(array_count_values($home4));
	echo "<hr>";
	//------------------------------------------------
	$home5=array("abcd","abc","de","hjjj","g","wer");
	$lenghts=array_map("strlen", $home5);
	echo " The shortest array length is : ".min($lenghts);
	echo "<br>";
	echo " The longest array length is : ".max($lenghts);
	echo "<hr>";
	//-----------------------------------------------------
	  $keys = array(
  array(
    "fruit"=>"banana",

    "vegetable"=>"eggplant",

    "drink"=>"milk"),
  array(
    "fruit"=>"apple",

    "vegetable"=>"tomoto",

    "drink"=>"tea"),

  array("fruit"=>"orange",

    "vegetable"=>"onion",

    "drink"=>"juice"));

	print_r(array_merge_recursive($keys[0],$keys[1],$keys[2]));

	echo "<hr>";
	$names=array("ahmaed","slamah","rana");
	/*print_r(array_change_key_case($names,CASE_UPPER));
	print_r(strtoupper());*/ 
	//right solution is:
	/*$new_names=array_map("strtoupper", $names)
	foreach ($new_names as $values9) {
		echo $values9;
	}*/

	  ?>