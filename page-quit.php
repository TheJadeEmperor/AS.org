<?php
/* Template Name: Page Quit */ 

get_header();


$image_my_results = get_field("image_my_results", "option");
$image_whats_next = get_field("image_whats_next", "option");

$image_heart_check = get_field("image_heart_check", $post->ID);


$cutback_title = "Cutting back in a safe way";

$cutback_white_block_text = "For those individuals who are high risk, it is possible you many have physiological dependence on alcohol—which means that cutting back or quitting may cause you to experience withdrawal symptoms.";


$cutback_pink_block_text = "If you reduce your drinking or quit altogether and you begin to experience some of the following symptoms, 
consult your doctor immediately. You 
may need medical assistance to detoxify off of alcohol.";


$cutback_bullet_text = "<ul>
<li>Anxiety</li>
<li>Sweating</li>
<li>Heart palpitations</li>
<li>Nausea and vomiting</li>
<li>Shakes or tremors</li>
<li>Headache</li>
<li>Hallucinations</li>
<li>Seizures</li>
</ul>";


$quit_title_a = "You have decided to quit altogether to eliminate any risk to your health and well-being.";

$quit_title_b = "Given your risk profile, your plan makes sense.";

$quit_title_c = "Given your moderate risk profile, your plan makes sense.";

$quit_title_d = "You plan to make no changes to your drinking at this point in time.";

$quit_title_e = "Given your high risk profile, your plan makes sense. ";

$risk = $_SESSION['risk'];
$button_plan_choice = $_SESSION['button_plan_choice'];

//echo '('.$risk.') ';
switch($risk){
	case 'Low' :
		
		switch($button_plan_choice) {
			case 'drinking_quit':
				$quit_title = $quit_title_a;
				
				$quit_gray_box_copy = "By doing that, you are in an excellent position to continue to maintain your health. You can receive more information about strategies for cutting back (including quitting), using available supports, when you need more support and health related information to support this plan by clicking next.";

				$nextPage = "/strategy-cutback-2/";
				
				break;
			case 'drinking_reduce_a_lot':
			case 'drinking_reduce_a_bit':
			
				$quit_title = $quit_title_b;
				
				$quit_gray_box_copy = "Drinking within the recommended safe guidelines or not at all is the healthiest option for both your physical and mental health. Given you would like to reduce your drinking, you can receive more information about strategies for cutting back, using avaiable supports, when you need more support and other health information related to drinking by clicking next.";
				
				$nextPage = "/strategy-cutback-2/";
				
				break;
			case 'drinking_same':
				$quit_title = $quit_title_b;
				
				$quit_gray_box_copy = "Drinking within the recommended safe guidelines or not at all is the healthiest option for both your physical and mental health. If you would like more information about drinking click next.";
				
				$nextPage = "/strategy-cutback-2/";
				
				break;
		}
		
		break;
		
	case 'Moderate A':
		switch($button_plan_choice){
			case 'drinking_quit':
				$quit_title = $quit_title_a;
				
				$quit_gray_box_copy = "By doing that, you are in an excellent position to achieve and maintain your best health. You can receive more information about strategies for cutting back (including quitting), using available supports, when you need more support and other information to support this plan by clicking next.";
				
				$nextPage = "/strategy-cutback-2/";
				
				break;
			case 'drinking_reduce_a_lot':
			case 'drinking_reduce_a_bit':
				
				$quit_title = $quit_title_c;

				$quit_gray_box_copy = "By reducing your drinking and therefore your risk, you will be in an excellent position to achieve and maintain your best health and well-being. You can receive more information about strategies for cutting back, using available supports, when you need more support and other information to support this plan by clicking next.";
				
				$nextPage = "/page-study/";

				break;
			case 'drinking_same':
			
				$quit_title = $quit_title_d; 
				
				$quit_gray_box_copy = "If you change your mind, if drinking suddenly seems to be causing more problems for you, you can always visit our information page, which has resources on both moderate drinking and quitting altogether - and how to do so safely. There is also more information about where to get personal support to make any changes you decide to make. Please remember, any time you decide to make a change, help and support are here for you.";
				
				$nextPage = "/strategy-cutback-2/";
				
				break;
		}
	
		break;
	case 'Moderate B':
		switch($button_plan_choice){
			case 'drinking_quit':
				$quit_title = $quit_title_a;
				
				$quit_gray_box_copy = "By doing that, you are in an excellent position to achieve and maintain your best health. You can receive more information about strategies for cutting back (including quitting), using available supports, when you need more support and other information to support this plan by clicking next.";
				
				$nextPage = "/strategy-cutback-2/";
				
				break;
			case 'drinking_reduce_a_lot':
			case 'drinking_reduce_a_bit':
				
				$quit_title = $quit_title_c;

				$quit_gray_box_copy = "By reducing your drinking and therefore your risk, you will be in an excellent position to achieve and maintain your best health and well-being. You can receive more information about strategies for cutting back, using available supports, when you need more support and other information to support this plan by clicking next.";
				
				$nextPage = "/page-study/";

				break;
			case 'drinking_same':
			
				$quit_title = $quit_title_d; 
				
				$quit_gray_box_copy = "If you change your mind, if drinking suddenly seems to be causing more problems for you, you can always visit our information page, which has resources on both moderate drinking and quitting altogether - and how to do so safely. There is also more information about where to get personal support to make any changes you decide to make. Please remember, any time you decide to make a change, help and support are here for you.";
				
				$nextPage = "/strategy-cutback-2/";
				
				break;
		}
	
		break;
	case 'High Risk':
	default:
		switch($button_plan_choice) {
			case 'drinking_quit':
				$quit_title = $quit_title_a;
			
				$quit_gray_box_copy = "By doing that, you are in an excellent position to achieve and maintain your best health. Given your plan and your risk level, there is some critical information you should have in order to quit safely and comfortably.";

				$nextPage = "/strategy-cutback-2/";
				
				$cutback_content = 1;
				break;
			case 'drinking_reduce_a_lot':
			case 'drinking_reduce_a_bit':
				$quit_title = $quit_title_e ;
				$quit_gray_box_copy = "By reducing your drinking and therefore your risk, you will be in an excellent position to achieve and maintain your best health and well-being. Given your plan and your risk level, there is some critical information you should have in order to cut back safely and comfortably.";
				
				$nextPage = "/page-study/";
				$cutback_content = 1;
				break;
			case 'drinking_same':
				$quit_title = $quit_title_d; 
				
				$quit_gray_box_copy = "If you change your mind, if drinking suddenly seems to be causing more problems for you, you can always visit our information page, which has resources on both moderate drinking and quitting altogether - and how to do so safely. There is also more information about where to get personal support to make any changes you decide to make. Please remember, any time you decide to make a change, help and support are here for you.";

				$nextPage = "/strategy-cutback-2/";
				
				break;
		}
	
		break;
}

?>


<div class="box_blue quit_title"><?=$quit_title ?> </div>
<div class="box_gray quit_gray_box_copy"><?=$quit_gray_box_copy ?> </div>


<?php

if($cutback_content == 1) {

	echo '<div class="clear"><img src="'.$image_heart_check.'" alt="Alcohol Screening" /></div>
	
	<div class="cutback_title">'.$cutback_title.'</div>

	<div class="cutback_white_block_text">'.$cutback_white_block_text.'</div>

	<div class="box_purple cutback_pink_block_text">'.$cutback_pink_block_text.'</div>

	<div class="box_gray cutback_bullet_text">'.$cutback_bullet_text.'</div>
	';
	
}
?>

<a onclick="submitScreeningHome('page-cutback')" href="<?=$nextPage?>"><button class="nextButton box_purple">NEXT</button></a>


<script>
	function submitScreeningHome (page) {

		dataArray = [{
			"key": "button_page_quit", 
			"value": page 
		}];
		
		console.log('submitScreeningHome dataArray: '+dataArray );
		
		submitASForm (dataArray);
	}
</script>

<?php
get_footer();
?>