<?php
/* Template Name: Strategy Alcohol Problem */ 

get_header();

$previousPage = get_field("previous_page", $post->ID);
$nextPage = get_field("next_page", $post->ID);

$strategy_explain_text = get_field("strategy_explain_text", $post->ID);
$strategy_disorder_title = get_field("strategy_disorder_title", $post->ID);
$strategy_disorder_text = get_field("strategy_disorder_text", $post->ID);

$strategy_aud_text = get_field("strategy_aud_text", $post->ID);

$strategy_questions_bullet_list = get_field("strategy_questions_bullet_list", $post->ID);
$strategy_conclusion_text = get_field("strategy_conclusion_text", $post->ID);

$image_alc_problem = get_field("image_alc_problem", $post->ID);

 
//get current page slug
global $wp;
$current_slug = add_query_arg( array(), $wp->request );

display_strategy_menu($current_slug); 

?>

<div class="strat_container">

<div class="image_alc_problem"><img src="<?=$image_alc_problem?>" alt="Strategy Use Disorder" /></div>

<div class="strategy_explain_text">
<?=$strategy_explain_text?> </div>

<div class="strategy_disorder_title"><?=$strategy_disorder_title?> </div>

<div class="strategy_disorder_text"><?=$strategy_disorder_text?> </div>

<div class="box_blue strategy_aud_text"><?=$strategy_aud_text?></div>

<div class="box_gray medium strategy_questions_bullet_list"><?=$strategy_questions_bullet_list?>

<div class="as_copy small strategy_conclusion_text"><?=$strategy_conclusion_text?> </div>
</div>

 </div>
 
 
 
<form method="POST"> 

<?=view_all_strategies($nextPage); ?>

</form>


<script>
	function submitScreeningHome (page) {

		dataArray = [{
			"key": "button_alc_problem", 
			"value": page 
		}];
		
		submitASForm (dataArray);
	}
</script>


<?php
get_footer();
?>