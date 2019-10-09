<?php
/* Template Name: Strategy Reduce Drinking */ 

get_header();

$strategy_link_reduce_drinking = get_field("strategy_link_reduce_drinking", $post->ID);
$strategy_link_online_support = get_field("strategy_link_online_support", $post->ID);
$strategy_link_cutback = get_field("strategy_link_cutback", $post->ID);
$strategy_link_treatment = get_field("strategy_link_treatment", $post->ID);
$strategy_link_info_drinking = get_field("strategy_link_info_drinking", $post->ID);
$strategy_link_alcohol_problem = get_field("strategy_link_alcohol_problem", $post->ID);

$image_left_menu = get_field("image_left_menu", "option");
$image_menu_arrow = get_field("image_menu_arrow", "option");



//get current page slug
global $wp;
$current_slug = add_query_arg( array(), $wp->request );

display_strategy_menu($current_slug); 

?>

<div class="menu_page">

<div class="menu_page_div">	
	<div class="image_left_menu">
		<img src="<?=$image_left_menu?>" />
	</div>
	<div class="medium bold menu_page_title">Strategies for Reducing Risk </div>
</div>


<div class="menu_page_item">
	<a onclick="submitScreeningHome('strategy-cutback-2')" href="/strategy-cutback-2">Tips for Cutting Back</a>
	
	<div class="image_menu_arrow"><img src="<?=$image_menu_arrow ?>" alt="Alcohol Screening Arrow" /></div>
</div>

<div class="line"></div>

<div class="menu_page_item">
	<a onclick="submitScreeningHome('strat_online_support')" href="/strategy-online-support">Using Online Supports</a>
	<div class="image_menu_arrow"><img src="<?=$image_menu_arrow ?>" alt="Alcohol Screening Arrow" /></div>
</div>

<div class="line"></div>

<div class="menu_page_item">
	<a onclick="submitScreeningHome('strategy-use-disorder')" href="/strategy-use-disorder/">When Cutting Back Isn’t Working</a>
	<div class="image_menu_arrow"><img src="<?=$image_menu_arrow ?>" alt="Alcohol Screening Arrow" /></div>
</div>

<div class="line"></div>

<div class="menu_page_item">
	<a onclick="submitScreeningHome('strategy-treatment-1')" href="/strategy-treatment-1">Finding Treatment</a>
	<div class="image_menu_arrow"><img src="<?=$image_menu_arrow ?>" alt="Alcohol Screening Arrow" /></div>
</div>

<div class="line"></div>

<div class="menu_page_item">
	<a onclick="submitScreeningHome('info-drinking-1')" href="/info-drinking-1">More Information on Drinking</a>
	<div class="image_menu_arrow"><img src="<?=$image_menu_arrow ?>" alt="Alcohol Screening Arrow" /></div>
</div>

<div class="line"></div>

<div class="menu_page_item">
	<a onclick="submitScreeningHome('info-drinking-2')" href="/info-drinking-2">Who should moderate and abstain?</a>
	<div class="image_menu_arrow"><img src="<?=$image_menu_arrow ?>" alt="Alcohol Screening Arrow" /></div>
</div>

<div class="line"></div>

<div class="menu_page_item">
	<a onclick="submitScreeningHome('info-drinking-3')" href="/info-drinking-3">Potential Consequences of Excessive Drinking</a>
	<div class="image_menu_arrow"><img src="<?=$image_menu_arrow ?>" alt="Alcohol Screening Arrow" /></div>
</div>

<div class="line"></div>

<div class="menu_page_item">
	<a onclick="submitScreeningHome('info-drinking-4')" href="/info-drinking-4">Drinking Across the Lifespan</a>
	<div class="image_menu_arrow"><img src="<?=$image_menu_arrow ?>" alt="Alcohol Screening Arrow" /></div>
</div> 

<p>&nbsp;</p><p>&nbsp;</p>
</div>


<script>

	function submitScreeningHome (page) {

		dataArray = [{
			"key": "button_strat_reduce_drinking",
			"value": page
		}];
		
		submitASForm (dataArray); 

	}

</script>


<?php
get_footer();
?>