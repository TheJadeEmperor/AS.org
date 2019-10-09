<?php
/* Template Name: Srrategy Treatment 1 */ 

get_header();


$previousPage = get_field("previous_page", $post->ID);
$nextPage = get_field("next_page", $post->ID);
$treatment_intro = get_field("treatment_intro", $post->ID);
$treatment_what_to_know = get_field("treatment_what_to_know", $post->ID);

$treatment_title_1 = get_field("treatment_title_1", $post->ID);

$treatment_types_of_treatment = get_field("treatment_types_of_treatment", $post->ID);

$treatment_title_2 = get_field("treatment_title_2", $post->ID);

$treatment_types_of_medication = get_field("treatment_types_of_medication", $post->ID);


$image_treatment_doc = get_field("image_treatment_doc", $post->ID); 

$image_treatment = get_field("image_treatment", $post->ID);
$image_medicine = get_field("image_medicine", $post->ID);

$treatment_url = "https://findtreatment.samhsa.gov/";

//get current page slug
global $wp;
$current_slug = add_query_arg( array(), $wp->request );

display_strategy_menu($current_slug); 

?>
<div class="strat_container">

<div class="box_gray treatment_div">
<div class="treatment_intro"><?=$treatment_intro?> </div>

<a onclick="submitScreeningHome('<?=$treatment_url?>')" href="<?=$treatment_url?>" target="_BLANK"><button class="nextButton box_purple">FIND A TREATMENT</button></a>

<div class="treatment_link small"><a href="<?=$treatment_url?>" target="_BLANK">What to know about treatment</a></div>
</div>


<div class="image_treatment"><img src="<?=$image_treatment ?>" alt="Alcohol Screening" /></div>


<div class="treatment_title_1 as_copy large bold">Types of Treatment</div>

<div class="treatment_types_of_treatment medium"><?=$treatment_types_of_treatment ?></div>
 
 
<div class="image_medicine"><img src="<?=$image_medicine ?>" alt="Alcohol Screening" /></div>

<div class="treatment_title_1 as_copy large bold">Types of Treatment</div>


<div class="treatment_types_of_medication as_copy medium"><?=$treatment_types_of_medication ?></div>

<!--
<div class="treatment_doc_intro"><?=$treatment_doc_intro ?> </div>

<div class="treatment_what_to_know"><?=$treatment_what_to_know ?> </div>

<div class="image_treatment_doc"><img src="<?=$image_treatment_doc ?>" alt="Alcohol Screening" /> </div>
<div class="treatment_doc_discuss"><?=$treatment_doc_discuss ?> </div>

<div class="treatment_doc_text"><?=$treatment_doc_text ?> </div>

<div class="treatment_doc_source"><?=$treatment_doc_source?> </div>
-->
</div>


<form method="POST"> 

<?=view_all_strategies($nextPage); ?>

</form>

<script>
	function submitScreeningHome (page) {
 
		dataArray = [{
			"key": "button_treatment",
			"value": page
		}];
		
		submitASForm (dataArray);
	}
</script>


<?php
get_footer();
?>