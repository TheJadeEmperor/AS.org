<?php
/* Template Name: Page Q1-B */ 

get_header();

$nextPage = get_field("next_page", $post->ID);

$q1_b_answer_1 = get_field("q1_b_answer_1", $post->ID);
$q1_b_answer_2 = get_field("q1_b_answer_2", $post->ID);
$q1_b_answer_3 = get_field("q1_b_answer_3", $post->ID);


//remove quotes and apostrophe for jQuery
$remove[] = "'";
$remove[] = '"';

$jquery_q1_b_answer_1 = str_replace( $remove, "", $q1_b_answer_1 );
$jquery_q1_b_answer_2 = str_replace( $remove, "", $q1_b_answer_2 );
$jquery_q1_b_answer_3 = str_replace( $remove, "", $q1_b_answer_3 );
?>

<script>

	function submitScreeningHome (userInput) {
		
		console.log('now: ' + $.now() + ' login_id: '+hex_sha1($.now()) + ' userInput: '+userInput );
		
		var platform = new Object();
		platform.p0 = "P2t4rfqwYmTK";
		platform.p1 = "<?=$_SESSION['p1']?>"; //random
		platform.p2 = "-1";
		platform.p3 = "-1";
		platform.p4 = "01";
		platform.data = [{"button_page_1b":userInput}];
		
		var api_data = JSON.stringify(platform);
		
		submitASForm (api_data); 
		
		$("#p0").val(platform.p0);
		$("#p1").val(platform.p1);
		$("#button_page_1b").val(userInput);
	}
</script>


<div class="welcome_title">Welcome!</div>

<div class="welcome_text">AlcoholScreening.org helps individuals assess 
their alcohol consumption to determine the potential impact of alcohol on their lives and offers guidance for those who want to change their current drinking patterns. Please answer these few questions to get started.  </div>


<div class="welcome_question">Interested in understanding the drinking patterns of a loved one or want to help change their drinking?   
</div>

<form method="POST" id="ASForm">

<?php

	$button_class = 'button_answer';
	
echo '
	<div class="button_list">
	<p><a onclick="submitScreeningHome(\''.$jquery_q1_b_answer_1.'\');" ><button class="'.$button_class.'" formaction="'.$nextPage.'">'.$q1_b_answer_1.'</button></a></p>

	<p><a onclick="submitScreeningHome(\''.$jquery_q1_b_answer_2.'\');" ><button class="'.$button_class.'" formaction="'.$nextPage.'">'.$q1_b_answer_2.'</button></a></p>
	
	<p><a onclick="submitScreeningHome(\''.$jquery_q1_b_answer_3.'\');" ><button class="'.$button_class.'" formaction="'.$nextPage.'">'.$q1_b_answer_3.'</button></a></p> 
	
	</div>';
?>

<input type="hidden" id="button_page_1b" name="button_page_1b" />

	<?php
	arrow_right_display($nextPage);
	?>
	<div class="clear"></div>
</form>


<?php
get_footer();
?>