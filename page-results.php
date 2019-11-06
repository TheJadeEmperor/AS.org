<?php
/* Template Name: Page Results */ 

get_header();

$sex = $_SESSION['sex'];
$age = $_SESSION['age'];

//heavy drinking day
$HDD = $_SESSION['HDD'];

//weekly drinks
$NDD = $_SESSION['NDD'];

//daily drinking day
$DDD = $_SESSION['DDD'];

//binge for both M and F
$binge = $_SESSION['binge'];

$dailyBinge = 0;

if ($sex == 'M' && $age < 65) {
	if($DDD > 4) 
		$dailyBinge = 1;
}
else { //if($sex == 'F' || ($sex == 'M' && $age >= 65))
	if($DDD > 3) 
		$dailyBinge = 1;
}


//drinks per week
$DPW = $DDD * $NDD;


$risk = $riskDisplay = 'Low Risk';

//risk category

//=== Low ===

if ($sex == 'M' && $age < 65 ){
	if($DPW <= 14 && $DDD <= 4 && $binge == 0) {
		$risk = $riskDisplay = 'Low Risk';	
	}
}

if($sex == 'F' || ($sex == 'M' && $age >= 65)) {
	if($DPW <= 7 && $DDD <= 3 && $binge == 0) {
		$risk = $riskDisplay = 'Low Risk';
	}
}

//=== Moderate A ===
if ($sex == 'M' && $age < 65 ) {
	if($DDD <= 4 && (14 < $DPW && $DPW <= 28) && $binge == 0) {
		$risk = 'Moderate A';
		$riskDisplay = 'Moderate';
	}
}

if($sex == 'F' || ($sex == 'M' && $age >= 65)) {
	if($DDD <= 3 && (7 < $DPW && $DPW <= 14) && $binge == 0) {
		$risk = 'Moderate A';
		$riskDisplay = 'Moderate';
	}
}

//=== Moderate B ===
if ($sex == 'M' && $age < 65 ) {
	if($DDD <= 4 && ($DPW <= 28) && ($binge >= 1 && $binge <= 3 )){
		$risk = 'Moderate B';
		$riskDisplay = 'Moderate';
	}
}

if($sex == 'F' || ($sex == 'M' && $age >= 65)) {
	if(($DDD <= 3) && ($DPW <= 14) && ($binge >= 1 && $binge <= 3) ){
		$risk = 'Moderate B';
		$riskDisplay = 'Moderate';
	}
}


//=== High risk ===
if ($sex == 'M' && $age < 65 ) {
	if(($dailyBinge == 1 && $DDD > 4) || $binge > 3 || $DPW > 28){
		$risk = $riskDisplay = 'High Risk';
	}
}


if($sex == 'F' || ($sex == 'M' && $age >= 65)) {
	if ($dailyBinge == 1 || $binge > 3 || $DPW > 14){
		$risk = $riskDisplay = 'High Risk';
	}
}



$drinkPercent = array (
	'0' => array ( 'M' => 28, 'F' => 38 ),
	'1' => array ( 'M' => 28, 'F' => 38 ),
	'2' => array ( 'M' => 53, 'F' => 69 ),
	'3' => array ( 'M' => 51, 'F' => 76 ),
	'4' => array ( 'M' => 66, 'F' => 80 ),
	'5' => array ( 'M' => 70, 'F' => 83 ),
	'6' => array ( 'M' => 73, 'F' => 86 ),
	'7' => array ( 'M' => 76, 'F' => 88 ),
	'8' => array ( 'M' => 78, 'F' => 90 ),
	'9' => array ( 'M' => 81, 'F' => 92 ),
	'10' => array ( 'M' => 83, 'F' => 92 ),
	'11' => array ( 'M' => 84, 'F' => 93 ),
	'12' => array ( 'M' => 86, 'F' => 94 ),
	'13' => array ( 'M' => 87, 'F' => 94 ),
	'14' => array ( 'M' => 88, 'F' => 95 ),
	'15' => array ( 'M' => 89, 'F' => 95 ),
	'16' => array ( 'M' => 89, 'F' => 95 ),
	'17' => array ( 'M' => 90, 'F' => 96 ),
	'18' => array ( 'M' => 90, 'F' => 96 ),
	'19' => array ( 'M' => 91, 'F' => 96 ),
	'20' => array ( 'M' => 91, 'F' => 96 ),
	'21' => array ( 'M' => 92, 'F' => 97 ),
	'22' => array ( 'M' => 92, 'F' => 97 ),
	'23' => array ( 'M' => 93, 'F' => 97 ),
	'24' => array ( 'M' => 93, 'F' => 97 ),
	'25' => array ( 'M' => 93, 'F' => 98 ),
	'26' => array ( 'M' => 93, 'F' => 98 ),
	'27' => array ( 'M' => 93, 'F' => 98 ),
	'28' => array ( 'M' => 94, 'F' => 98 ),
	'29' => array ( 'M' => 94, 'F' => 98 ),
	'30' => array ( 'M' => 94, 'F' => 98 ),
	'31' => array ( 'M' => 94, 'F' => 98 ),
	'32' => array ( 'M' => 95, 'F' => 98 ),
	'33' => array ( 'M' => 95, 'F' => 98 ),
	'34' => array ( 'M' => 95, 'F' => 98 ),
	'35' => array ( 'M' => 95, 'F' => 98 ),
	'36' => array ( 'M' => 95, 'F' => 98 ),
	'37' => array ( 'M' => 95, 'F' => 98 ),
	'38' => array ( 'M' => 96, 'F' => 99 ),
	'39' => array ( 'M' => 96, 'F' => 99 ),
	'40' => array ( 'M' => 96, 'F' => 99 ),
	'41' => array ( 'M' => 96, 'F' => 99 ),
	'42' => array ( 'M' => 96, 'F' => 99 ),
	'43' => array ( 'M' => 96, 'F' => 99 ),
	'44' => array ( 'M' => 97, 'F' => 99 ),
	'45' => array ( 'M' => 97, 'F' => 99 ),
	'46' => array ( 'M' => 97, 'F' => 99 ),
	'47' => array ( 'M' => 97, 'F' => 99 ),
	'48' => array ( 'M' => 97, 'F' => 99 ),
	'49' => array ( 'M' => 97, 'F' => 99 ),
	'50' => array ( 'M' => 97, 'F' => 99 ),
	'51' => array ( 'M' => 97, 'F' => 99 ),
	'52' => array ( 'M' => 98, 'F' => 99 ),
	'53' => array ( 'M' => 98, 'F' => 99 ),
	'54' => array ( 'M' => 98, 'F' => 99 ),
	'55' => array ( 'M' => 98, 'F' => 99 ),
	'56' => array ( 'M' => 98, 'F' => 99 ),
	'57' => array ( 'M' => 98, 'F' => 99 ),
	'58' => array ( 'M' => 98, 'F' => 99 ),
	'59' => array ( 'M' => 98, 'F' => 99 ),
	'60' => array ( 'M' => 98, 'F' => 99 ),
	'61' => array ( 'M' => 99, 'F' => 100 ),
	'62' => array ( 'M' => 99, 'F' => 100 ),
	'63' => array ( 'M' => 99, 'F' => 100 ),
	'64' => array ( 'M' => 99, 'F' => 100 ),
	'65' => array ( 'M' => 99, 'F' => 100 ),
	'66' => array ( 'M' => 99, 'F' => 100 ),
	'67' => array ( 'M' => 99, 'F' => 100 ),
	'68' => array ( 'M' => 99, 'F' => 100 ),
	'69' => array ( 'M' => 99, 'F' => 100 ),
	'70' => array ( 'M' => 99, 'F' => 100 ),
);

if($DPW >= 70) {
	$percentile = 100;
} 
else {
	$percentile = $drinkPercent[$DPW][$sex];
}


if($sex == 'M' &&  $age < 65) {
	$bingeNum = 4;
}
else {
	$bingeNum = 3;
}


if($sex == 'M' &&  $age < 65) {
	$safeDrinksPW = 14;
	$safeDrinksPD = 4;
}
else {
	$safeDrinksPW = 7;
	$safeDrinksPD = 3;	
}

$genderText = array (
	'M' => 'men',
	'F' => 'women' );
	

$nextPage = get_field("next_page", $post->ID);

$results_drinking_peers = get_field("results_drinking_peers", $post->ID);
$results_question_surprised = get_field("results_question_surprised", $post->ID);
$results_surprised_explain = get_field("results_surprised_explain", $post->ID);

//$results_facts_copy = get_field("results_facts_copy", $post->ID);
$results_guidelines_title = get_field("results_guidelines_title", $post->ID);
$results_guidelines_copy_1 = get_field("results_guidelines_copy_1", $post->ID);
$results_guidelines_copy_2 = get_field("results_guidelines_copy_2", $post->ID);
$results_risk_copy = get_field("results_risk_copy", $post->ID);


$risk_copy_low = get_field("risk_copy_low", $post->ID); 
$risk_copy_moderate_a = get_field("risk_copy_moderate_a", $post->ID); 
$risk_copy_moderate_b = get_field("risk_copy_moderate_b", $post->ID); 
$risk_copy_high_risk = get_field("risk_copy_high_risk", $post->ID); 

$results_warning = get_field("results_warning_2", $post->ID);

$image_peers = get_field("image_peers", $post->ID);


if($binge > 0) {
	$bingeCopy = get_field("binge_copy", $post->ID);
	$bingeCopy = str_replace('$bingeNum', $bingeNum, $bingeCopy);
}

$riskCopy = array(
	'Low Risk' => $risk_copy_low,
	
	'Moderate A' => $risk_copy_moderate_a,
	
	'Moderate B' => $risk_copy_moderate_b,
	
	'High Risk' => $risk_copy_high_risk
);

if($_GET['debug'] == 1)
	echo '<div class="dev"> (developer stuff) 
	binge: '.$binge.' <br />
	dailyBinge: '.$dailyBinge.' <br />
	NDD: '.$NDD.' <br />
	DDD: '.$DDD.' <br />
	DPW: '.$DPW.' <br />
	risk: '.$risk.'<br />
	percentile: '.$percentile.'</div>';


?>
<div class="page_results">


<div class="as_copy medium large bold results_facts_text">You reported the following over 30 days:</div>


<div class="three_box">
	<div class="box_purple box_left">
		<div class="results_facts_copy"></div>
		<div class="results_facts_number"><?=$DPW?></div>
		<div class="results_facts_copy">DRINKS PER WEEK<br /><br /></div>
	</div>
	
	<div class="box_purple box_right">
		<div class="results_facts_number"><?=$binge?></div>
		<div class="results_facts_copy">OCCASSION(S) OF <br /> BINGE DRINKING</div>
	</div>

	<div class="box_purple box_middle">
		<div class="results_facts_number"><?=$HDD?></div>
		<div class="results_facts_copy">DRINKS ON YOUR <br />HEAVIEST DAY</div>
	</div>
	
</div>

<div class="as_copy medium large bold results_facts_text">According to your age and sex, this places you at: </div>


<div class="box_teal results_risk_score">
	<div class="as_copy large bold"><b><?=$riskDisplay?></b></div>
	<div class="as_copy medium">Based on your reported drinking habits</div>
</div>
<div class="box_gray results_risk_copy">
	<div class="medium">
		<p><?=$riskCopy[$risk]?> </p>
	</div>
	 
	<div class="medium">
		<p><?=$results_warning ?></p>
	</div>
</div>

<?php
if($DPW > 0) { 
?>
	<div class="as_copy medium bold results_drinking_peers">
		<?=$results_drinking_peers?>
	</div>

	<?php
	//color of progress bar
	if($percentile < 40) {
		$class = 'pink';
	}
	else if ($percentile >= 40 && $percentile < 70) {
		$class = 'yellow';
	}
	else if ($percentile >= 70 && $percentile < 90) {
		$class = 'green';
	}
	else {
		$class = 'blue';
	}
	?>

	<p class="as_copy medium">YOU DRINK MORE THAN</p>
	
	<div class="progress <?=$class?>">
		<span class="progress-left">
			<span class="progress-bar"></span>
		</span>
		<span class="progress-right">
			<span class="progress-bar"></span>
		</span>
		<div class="progress-value"><?=$percentile ?>%</div>
	</div>
	<br />
	<p class="as_copy medium">OF YOUR PEERS</p>


<p>&nbsp;</p>

<!--<div class="as_copy medium results_question_surprised">
	<?=$results_question_surprised?>
</div>-->


<div class="as_copy medium results_surprised_explain">
	<?=$results_surprised_explain ?>
</div>


<?php
} //if($DPW > 0) 
?>


<div class="as_copy large bold results_facts_text"><?=$results_guidelines_title?></div>

<div class="results_facts_gender">
	<div class="box_blue results_facts_block">
		<div class="results_facts_copy">NO MORE THAN</div>
		<div class="results_facts_number"><?=$bingeNum?></div>
		<div class="results_facts_copy">DRINKS ON ANY ONE OCCASSION</div>
	</div>
	
	<div class="box_blue results_facts_block this_one">
		<div class="results_facts_copy">NO MORE THAN</div>
		<div class="results_facts_number"><?=$safeDrinksPW?></div>
		<div class="results_facts_copy">DRINKS <br />PER WEEK</div>
	</div>
</div>


<div class="as_copy medium results_recommend">For someone your gender and age, the National Institute for Alcohol Abuse and Alcoholism (NIAAA) recommends drinking no more than <?=$safeDrinksPW ?> standard drinks per week, and no more than <?=$safeDrinksPD ?> standard drinks on any one occasion. </div>
	

<div class="as_copy medium bold results_recommend"> 
	<?=$results_guidelines_copy_2 ?>
</div>


<form method="POST" action="<?=$nextPage?>">

	<input type="hidden" name="DPW" value="<?=$DPW?>" />
	<input type="hidden" name="p4" value="<?=$risk?>" />
	<input type="hidden" name="p3" value="<?=$percentile?>" />

	<a onclick="submitScreeningHome('page-plan')" href="<?=$nextPage?>"><button class="nextButton box_purple">NEXT STEPS</button></a>
</form>

<?php
if($bingeCopy) {
	echo '<div class="as_copy medium binge_copy">
	'.$bingeCopy.'
	</div>';
}
?>



</div><!-- page_results -->

<br /><p>&nbsp;</p>




<script>

	function submitScreeningHome (page) {

		var DPW = $("#DPW").val();
		
		if(DPW == "") DPW = 0;
		
		dataArray = [{
			"key": "button_page_results", 
			"value": page 
		}];
		
		console.log('submitScreeningHome dataArray: '+dataArray );
		
		submitASForm (dataArray); 
	}

</script>


<?php
get_footer();
?>