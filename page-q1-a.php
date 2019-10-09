<?php
/* Template Name: Page Q1-A */ 

get_header();

$nextPage = get_field("next_page", $post->ID);
$q1_a_welcome = get_field("q1_a_welcome", $post->ID);
$q1_a_answer_1 = get_field("q1_a_answer_1", $post->ID);
$q1_a_answer_2 = get_field("q1_a_answer_2", $post->ID);
$q1_a_answer_3 = get_field("q1_a_answer_3", $post->ID);
$q1_a_answer_4 = get_field("q1_a_answer_4", $post->ID);
$image_progress_bar = get_field("image_progress_bar", $post->ID);

//remove quotes and apostrophe for jQuery
$remove[] = "'";
$remove[] = '"';

$jquery_q1_a_answer_1 = str_replace( $remove, "", $q1_a_answer_1 );
$jquery_q1_a_answer_2 = str_replace( $remove, "", $q1_a_answer_2 );
$jquery_q1_a_answer_3 = str_replace( $remove, "", $q1_a_answer_3 );
$jquery_q1_a_answer_4 = str_replace( $remove, "", $q1_a_answer_4 );
?>

<script>

	function submitScreeningHome (userInput) {
		
		var dataArray = [{
			"key": "button_page_1a",
			"value": userInput }];
			
		console.log('submitScreeningHome dataArray: '+dataArray );
		
		submitASForm (dataArray); 
		
		$("#button_page_1a").val(userInput);
	}
</script>



<div class="welcome_command">Please answer these few questions to get started.  </div>

<?php display_progress_bar(16); ?>
  
<div class="welcome_question">Interested in understanding your 
drinking patterns or thinking about changing your drinking?  
</div>

<div class="button_list">
	<form method="POST" id="ASForm">

	<?php
	$button_class = 'button_answer';

	echo '
	<p><a href="'.$nextPage.'" onclick="submitScreeningHome(\''.$jquery_q1_a_answer_1.'\');" ><button class="'.$button_class.'" formaction="'.$nextPage.'">'.$q1_a_answer_1.'</button></a></p>

	<p><a href="'.$nextPage.'" onclick="submitScreeningHome(\''.$jquery_q1_a_answer_2.'\');" ><button class="'.$button_class.'" formaction="'.$nextPage.'">'.$q1_a_answer_2.'</button></a></p>

	<p><a href="'.$nextPage.'" onclick="submitScreeningHome(\''.$jquery_q1_a_answer_3.'\');" ><button class="'.$button_class.'" formaction="'.$nextPage.'">'.$q1_a_answer_3.'</button> </a></p>

	<p><a href="'.$nextPage.'" onclick="submitScreeningHome(\''.$jquery_q1_a_answer_4.'\');" ><button class="'.$button_class.'" formaction="'.$nextPage.'">'.$q1_a_answer_4.'</button> </a></p>
	';
	?>
	
	<?php
	arrow_right_display($nextPage);
	?>
	
	<input type="hidden" id="button_page_1a" name="button_page_1a" />
	</form>
</div>

<?php
get_footer(); ?>