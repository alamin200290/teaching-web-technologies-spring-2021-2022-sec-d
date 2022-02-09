<?php 

	//print("Hello world!");
	//echo "hello php..."." Example";

	/*$name = "alamin";
	$cgpa = 1.2;
	$id = 12111;

	echo $name;*/

	//$student = array('alamin', 12, 'cse', 'alamin@aiub.edu');
	//$student = ['alamin', 12, 'cse', 'alamin@aiub.edu'];
	/*$students =[
					['alamin', 1, 'CSE', 'alamin@aiub.edu'],
					['xyz', 2, 'CIS', 'xyz@aiub.edu'],
					['bac', 3, 'SE', 'abc@aiub.edu']
				];

	echo $students[2][3];*/

/*	$student = ['name'=> 'alamin','id'=> 12,'dept'=> 'cse', 'email'=>'alamin@aiub.edu'];
	echo $student['email'];*/
	$students =[
					's1'=> ['name'=> 'alamin','id'=> 12,'dept'=> 'cse', 'email'=>'alamin@aiub.edu'],
					's2'=> ['name'=> 'xyz','id'=> 13,'dept'=> 'cse', 'email'=>'xyz@aiub.edu'],
					's3'=> ['name'=> 'abc','id'=> 14,'dept'=> 'se', 'email'=>'abc@aiub.edu']
				];

	//echo $students['s2']['name'];

	function sum($num1, $num2){
		echo $num1+$num2;
	}		

	//sum(5,7);

	/*if (5 === '5') {
		echo "true";
	}else{
		echo "false";
	}*/

	/*for($i=0; $i<10; $i++){
		echo "test";
	}*/

	foreach ($students as $s) {
		echo $s['name']."\n";
	}
?>