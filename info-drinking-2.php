<?php
/* Template Name: Info Drinking 2 */ 

get_header();


$previousPage = get_field("previous_page", $post->ID);
$nextPage = get_field("next_page", $post->ID);

$image_info_drinking = get_field("image_info_drinking", $post->ID);

$info_long_text = get_field('info_long_text', $post->ID);

 
//get current page slug
global $wp;
$current_slug = add_query_arg( array(), $wp->request );

display_strategy_menu($current_slug); 
?>

<div class="strat_container">
<div class="clear">

<img src="<?=$image_info_drinking?>" alt="Alcohol Screening" /> </div>
<p>&nbsp;</p>
<div class="as_copy medium info_long_text"><?=$info_long_text ?> </div>
</div>


<form method="POST"> 

<?=view_all_strategies($nextPage); ?>

</form>

<script>
	function submitScreeningHome (page) {

		dataArray = [{
			"key": "button_drinking_2",
			"value": page
		}];
		
		submitASForm (dataArray); 
	}
</script>


<?php
get_footer();
?>