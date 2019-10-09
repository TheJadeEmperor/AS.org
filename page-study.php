<?php
/* Template Name: Page Study */ 

get_header();

$yes_page = get_field("yes_page", $post->ID);
$no_page = get_field("no_page", $post->ID);

$page_study_question = get_field("page_study_question", $post->ID);
$study_image_bg = get_field("study_image_bg", $post->ID);

$image_my_results = get_field("image_my_results", "option");
$image_whats_next = get_field("image_whats_next", "option");

?>

<div class="study_image_bg"><img src="<?=$study_image_bg ?>" alt="Alcohol Screening" /> </div>

<div class="page_study_question as_copy large"><?=$page_study_question?> </div>


<br />

<div class="study_buttons">
	<form method="POST">
		<input onclick="submitScreeningHome('page_strat_reduce_risk')" type="submit" value="NO" formaction="<?=$no_page ?>" />
	</form>
	
	<form method="POST" target="_blank">
		<input onclick="submitScreeningHome('page_tammi')" type="submit" value="YES" formaction="<?=$yes_page ?>" />
	</form>
</div>



<script>
	function submitScreeningHome (page) {
	
		dataArray = [{
			"key": "button_page_study", 
			"value": page 
		}];
		
		submitASForm (dataArray);
	}
</script>



<?php
get_footer();
?>