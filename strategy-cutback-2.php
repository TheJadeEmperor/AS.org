<?php
/* Template Name: Strategy Cutback 2 */ 

get_header();


$previousPage = get_field("previous_page", $post->ID);
$nextPage = get_field("next_page", $post->ID);

$cutback_explain_text = get_field("cutback_explain_text", $post->ID);

$cutback_strategies = get_field("cutback_strategies", $post->ID);

$cutback_knowing_text = get_field("cutback_knowing_text", $post->ID);

$cutback_keep_track_text = get_field("cutback_keep_track_text", $post->ID);

$cutback_count_text = get_field("cutback_count_text", $post->ID);

$cutback_set_goals_text = get_field("cutback_set_goals_text", $post->ID);

$cutback_plan_text = get_field("cutback_set_goals_text", $post->ID);

$cutback_find_alt_text = get_field("cutback_find_alt_text", $post->ID);

$cutback_avoid_triggers_text = get_field("cutback_avoid_triggers_text", $post->ID);

$cutback_handle_urges_text = get_field("cutback_handle_urges_text", $post->ID);

$cutback_saying_no_text = get_field("cutback_saying_no_text", $post->ID);

$image_pencil = get_field("image_pencil", $post->ID);


$cutback_knowing_title = 'Knowing what is a <br /><a href="/strategy-standards/">standard drink </a>';

$cutback_keep_track_title = "Keep Track";
$cutback_count_title = "Count and measure your drinks";
$cutback_set_goals_title = "Set goals";

$cutback_plan_title = "Make a plan";

$cutback_find_alt_title = "Find Alternatives";
 
$cutback_avoid_triggers_title = "Avoid “triggers”";
 
$cutback_handle_urges_title = "Plan to handle urges";

$cutback_saying_no_title = "Saying “no”";

//get current page slug
global $wp;
$current_slug = add_query_arg( array(), $wp->request );

display_strategy_menu($current_slug); 

?>

<div class="strat_container">

<div class="cutback_explain_text as_copy"><?=$cutback_explain_text?> </div>

<div class="image_pencil"><img src="<?=$image_pencil?>" alt="Strategies for Cutting Back" /> </div>

<div class="cutback_strategies"><?=$cutback_strategies?> </div>


<div>
	<div class="box_blue cutback_headline"><?=$cutback_knowing_title?></div><div class="as_copy medium cutback_text"><?=$cutback_knowing_text?> </div>
</div>

<div class="clear">
	<div class="box_purple cutback_headline"><?=$cutback_keep_track_title?></div><div class="as_copy medium cutback_text"><?=$cutback_keep_track_text?> </div>
</div>

<div class="clear">
	<div class="box_purple cutback_headline"><?=$cutback_count_title?></div><div class="as_copy medium cutback_text"><?=$cutback_count_text?> </div>
</div>

<div class="clear">
	<div class="box_blue cutback_headline"><?=$cutback_set_goals_title?></div><div class="as_copy medium cutback_text"><?=$cutback_set_goals_text?> </div>
</div>


<div class="clear">
	<div class="box_purple cutback_headline"><?=$cutback_plan_title?></div><div class="as_copy medium cutback_text"><?=$cutback_plan_text?> </div>
</div>
 
<div class="clear">
	<div class="box_blue cutback_headline"><?=$cutback_find_alt_title?> </div><div class="as_copy medium cutback_text"><?=$cutback_find_alt_text?> </div>
</div>


<div class="clear">
	<div class="box_purple cutback_headline"><?=$cutback_avoid_triggers_title?> </div><div class="as_copy medium cutback_text"><?=$cutback_avoid_triggers_text?> </div>
 </div>

<div class="clear">
	<div class="box_blue cutback_headline"><?=$cutback_handle_urges_title?> </div><div class="as_copy medium cutback_text"><?=$cutback_handle_urges_text?> </div>
</div>

<div class="clear">
	<div class="box_purple cutback_headline"><?=$cutback_saying_no_title?></div><div class="as_copy medium cutback_text"><?=$cutback_saying_no_text?></div>
</div>

</div>
 
<div class="clear"></div>


<form method="POST"> 

<?=view_all_strategies($nextPage); ?>

</form>


<script>

	function submitScreeningHome (page) {
 
			dataArray = [{
			"key": "button_strat_cutback", 
			"value": page 
		}];
		
		submitASForm (dataArray);
	}

</script>


<?php
get_footer();
?>