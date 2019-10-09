<?php
/* Template Name:  Info Drinking 4 */ 

get_header();


$previousPage = get_field("previous_page", $post->ID);
$nextPage = get_field("next_page", $post->ID);
$info_under_21_title = get_field("info_under_21_title", $post->ID);
$info_under_21_text = get_field("info_under_21_text", $post->ID);
$info_short_term = get_field("info_short_term", $post->ID);
$info_long_term_title = get_field("info_long_term_title", $post->ID);
$info_long_term_text = get_field("info_long_term_text", $post->ID);
$info_long_term_source = get_field("info_long_term_source", $post->ID);
$info_drinking_pregnancy_text = get_field("info_drinking_pregnancy_text", $post->ID);
$info_birth_defects_text = get_field("info_birth_defects_text", $post->ID);
$info_birth_defects_source = get_field("info_birth_defects_source", $post->ID);
$info_over_50_text = get_field("info_over_50_text", $post->ID);

$info_under_21_title = "Information for Individuals under 21";
$info_long_term_title = "Long-Term Consequences as the Teen Brain Develops:";
$info_drinking_pregnancy_title = "Drinking and Pregnancy";
$info_birth_defects_title = "Alcohol-related Birth Defects";

$image_beer = get_field("image_beer", "option");
$image_wine = get_field("image_wine", "option");
$image_drinking_pregnancy = get_field("image_drinking_pregnancy", $post->ID);

//get current page slug
global $wp;
$current_slug = add_query_arg( array(), $wp->request );

display_strategy_menu($current_slug); 
?>

<div class="strat_container info_4">

<div class="image_beer"><img src="<?=$image_beer?>" alt="Alcohol Screening" /></div>

<div class="info_under_21_title as_copy large bold"><?=$info_under_21_title?> </div>

<div class="info_under_21_text as_copy medium"><?=$info_under_21_text ?></div>

<div class="box_gray info_short_term_div">
	<div class="info_short_term_title">Short-Term Consequences of Intoxication (being “drunk”):</div>
	<div class="info_short_term"><?=$info_short_term ?> </div>
	
</div>

<div class="box_gray info_short_term_div">
	<div class="info_long_term_title"><?=$info_long_term_title ?> </div>
	<div class="info_long_term_text"><?=$info_long_term_text ?> </div>
</div>

<div class="info_long_term_source"><?=$info_long_term_source?> </div>

<div class="image_drinking_pregnancy"><img src="<?=$image_drinking_pregnancy?>" alt="Alcohol Screening" /></div>

<div class="info_drinking_pregnancy_title large bold"><?=$info_drinking_pregnancy_title?></div>

<div class="info_drinking_pregnancy_text medium"><?=$info_drinking_pregnancy_text ?>
</div>

	<div class="info_birth_defects_div box_gray">
		<div class="info_birth_defects_title large bold"><?=$info_birth_defects_title?> </div>

		<div class="info_birth_defects_text medium"><?=$info_birth_defects_text ?> </div>
	</div>

	<div class="info_birth_defects_source"><?=$info_birth_defects_source ?> </div>


	<div class="image_wine">
		<img src="<?=$image_wine?>" alt="Alcohol Screening" />
	</div>

	<div class="info_over_50_title large bold">Drinking Over 50</div>

	<div class="info_over_50_text medium">
		<?=$info_over_50_text ?> 
	</div>

</div>


<form method="POST"> 

<?=view_all_strategies($nextPage); ?>


</form>


<script>
	function submitScreeningHome (page) {

		dataArray = [{
			"key": "button_drinking_4",
			"value": 9999
		}];
		
		submitASForm (dataArray); 
	}
</script>


<?php
get_footer();
?>