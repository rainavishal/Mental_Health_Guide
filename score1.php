<?php 
if($_POST['submit']) {
    $name = $_POST['name'];
	$age = $_POST['age'];
	$phone = $_POST['phone'];
	if($name == '' || $age == '' || $phone == '') {
		echo '<h2>Please fill all * mandatory fields.</h2>';
	}	

 	if($q1=='' || $q2 =='' || $q3 =='' || $q4=='' || $q5 =='' || $q6 =='' || $q7=='' || $q8 =='' || 
           $q9 =='')
    $q1 = $_POST['q1'];
	$q2 = $_POST['q2'];
	$q3 = $_POST['q3'];
        $q4 = $_POST['q4'];
	$q5 = $_POST['q5'];
	$q6 = $_POST['q6'];
        $q7 = $_POST['q7'];
	$q8 = $_POST['q8'];
	$q9 = $_POST['q9'];


	if($q1=='' || $q2 =='' || $q3 =='' || $q4=='' || $q5 =='' || $q6 =='' || $q7=='' || $q8 =='' || $q9 =='') {
		echo '<h2>Please answer all questions.</h2>';
	}
	else {
		$score = 0;
		if($q1 == 3) { // 1st option is correct
		$score++;
		}
		if($q2 == 2) { // 3rd option is correct
		$score++;
		}
		if($q3 == 4) { // 2nd option is correct
		$score++;
                }
                if($q4 == 3) { // 1st option is correct
		$score++;
		}
		if($q5 == 4) { // 3rd option is correct
		$score++;
		}
		if($q6 == 1) { // 2nd option is correct
		$score++;
                }
                if($q7 == 4) { // 1st option is correct
		$score++;
		}
		if($q8 == 2) { // 3rd option is correct
		$score++;
		}
		if($q9 == 4) { // 2nd option is correct
		$score++;
                }

	        $score1 = ($score / 9) *100;
		
		if($score1 < 50)
		{
echo readfile("http://localhost:8013/pro2/Consultation-Lv1.html");
		}
		else {
echo readfile("http://localhost:8013/pro2/Consultation-Lv2.html");
		}
	}
}
?>