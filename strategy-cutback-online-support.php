<?php
/* Template Name: Strategy Cutback Online Support */ 

get_header();


$previousPage = get_field("previous_page", $post->ID);
$nextPage = get_field("next_page", $post->ID);
$cutback_copy = get_field("cutback_copy", $post->ID);

$image_cutback_online_support = get_field("image_cutback_online_support", $post->ID);

//repeating content
$cutback_content = get_field("cutback_content", $post->ID);
$cutback_paid_programs = get_field("cutback_paid_programs", $post->ID);


//get current page slug
global $wp;
$current_slug = add_query_arg( array(), $wp->request );

display_strategy_menu($current_slug); 

?>
<div class="strat_container online_support">

<div class="image_cutback_online_support"><img src="<?=$image_cutback_online_support ?>" alt="" /></div>

<div class="cutback_copy"><?=$cutback_copy ?> </div>

<div class="cutback_guidelines">Guidelines for healthy drinking will differ across countries. For example, a standard drink in the U.S. = 14g of alcohol, whereas in Australia it is 10g of alcohol </div>

<div class="line"></div>

<?php
foreach($cutback_content as $e => $value) {
	echo '<div class="online_logo">
	<img src="'.$value['logo'].'" alt="'.$value['title'].'" />
	
	<div class="online_url medium"><a target="_BLANK" href="'.$value['url'].'">'.$value['url'].'</a></div>
	
	</div>';

	echo '<div class="online_copy">'.$value['copy'].'</div>
	
	<div class="clear"></div>';
}

?>

<div class="line"></div>


<div class="online_paid_programs_title">Paid Programs</div>

<?php
foreach($cutback_paid_programs as $e => $value) {

	echo '<div class="online_logo"><img src="'.$value['logo'].'" alt="'.$value['title'].'" />
	
	<div class="online_url as_copy bold"><a target="_BLANK" href="'.$value['url'].'">'.$value['url'].'</a></div>
	
	</div>';

	echo '<div class="online_copy">'.$value['copy'].'</div>
	
	<div class="clear"></div>';
}

?>

<p>&nbsp;</p>
<p>&nbsp;</p>

<form method="POST"> 

<?=view_all_strategies($nextPage); ?>

</form>

</div>

<script>
	function submitScreeningHome (page) {
 
		dataArray = [{
			"key": "button_strategy_standards",
			"value": page
		}];
		
		submitASForm (dataArray);
		
	}
</script>


<?php
get_footer();
?>