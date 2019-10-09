<?php
/* Template Name: Info Drinking 1 */ 

get_header();


$previousPage = get_field("previous_page", $post->ID);
$nextPage = get_field("next_page", $post->ID);

$info_title = get_field("info_title", $post->ID);
$info_url_text = get_field("info_url_text", $post->ID);
$info_moderated_drinking = get_field("info_moderated_drinking", $post->ID);

$image_beer = get_field("image_beer", "option");
$image_wine = get_field("image_wine", "option");
$image_spirits = get_field("image_spirits", "option");
$image_malt_liquor = get_field("image_malt_liquor", "option"); 
$image_drinks = get_field("image_drinks", "option");


$info_title = "What is a standard drink?";

$info_beer = "12 ounces of regular beer <br />(150 calories)";

$info_wine = "5 ounces of wine <br />(100 calories)";

$info_spirits = "1.5 ounces of 80-proof distilled spirits <br />(100 calories)";

$info_url_text = "For more information, check out the NIAAA publication Rethinking Drinking";
$info_url_link = "https://pubs.niaaa.nih.gov/publications/RethinkingDrinking/Rethinking_Drinking.pdf";

$info_moderated_drinking = "What is moderated or healthy drinking?";


//get current page slug
global $wp;
$current_slug = add_query_arg( array(), $wp->request );

display_strategy_menu($current_slug); 
?>

<div class="strat_container">

<div class="info_title"><?=$info_title ?> </div>

<div class="info_drink">
	<div class="image_drink">
		<img id="image_beer" src="<?=$image_beer?>" alt="Alcohol Screening" />
	</div>
	<div class="info_beer_copy medium"><?=$info_beer ?> </div> 
</div>

<div class="info_drink">
	<div class="image_drink">
		<img id="image_wine" src="<?=$image_wine?>" alt="Alcohol Screening" />
	</div>
	<div class="info_beer_copy medium"><?=$info_wine ?> </div> 
</div>

<div class="info_drink">
	<div class="image_drink">	
		<img id="image_spirits" src="<?=$image_spirits?>" alt="Alcohol Screening" />
	</div>
	<div class="info_beer_copy medium"><?=$info_spirits ?> </div> 
</div>


<div class="as_copy small purple info_niaaa_link"><a href="<?=$info_url_link?>" target="_BLANK"><?=$info_url_text ?></a></div>



<div class="box_gray info_moderated_drinking_div">
	<div class="info_moderated_drinking_image"><img src="<?=$image_drinks?>" alt="Alcohol Screening" /></div>

	<div class="as_copy info_moderated_drinking_text"><?=$info_moderated_drinking ?> </div>
</div>



<div class="results_facts_gender first">
	<div class="box_purple info_facts_block">
		<div class="info_facts_copy bold">WOMAN OF ALL AGES AND MEN 65 AND OLDER
		</div>
	</div>

	<div class="box_blue info_facts_block">
		<div class="info_facts_copy bold">MEN YOUNGER THAN 65</div> 
	</div> 
</div>


<div class="results_facts_gender">	
	<div class="box_purple info_facts_block">
		<div class="info_facts_number bold">7</div>
		<div class="info_facts_copy bold">NO MORE THAN 7 STANDARD DRINKS PER WEEK</div> 
	</div> 

	<div class="box_blue info_facts_block">
		<div class="info_facts_number bold">14</div>
		<div class="info_facts_copy">MORE THAN 14 STANDARD DRINKS PER WEEK</div>
	</div>
</div> 


<div class="last results_facts_gender">
	<div class="box_purple info_facts_block">
		<div class="info_facts_number bold">3 </div>
		<div class="info_facts_copy bold">DRINKS ON ANY ONE OCCASSION</div>
	</div>	 
	<div class="box_blue info_facts_block">
		<div class="info_facts_number bold">4 </div>
		<div class="info_facts_copy bold">NO MORE THAN 4 ON ONE OCCASSION</div>
	</div> 
</div>

</div>


<form method="POST"> 

<?=view_all_strategies($nextPage); ?>

</form>


<script>
	function submitScreeningHome (page) {
  
		dataArray = [{
			"key": "button_drinking_1",
			"value": page
		}];
		
		submitASForm (dataArray);
	}
</script>


<?php
get_footer();
?>