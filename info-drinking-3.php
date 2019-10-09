<?php
/* Template Name:  Info Drinking 3 */ 

get_header();


$previousPage = get_field("previous_page", $post->ID);
$nextPage = get_field("next_page", $post->ID);
$info_intro = get_field("info_intro", $post->ID);
$info_explain_text = get_field("info_explain_text", $post->ID);

$info_drink_driving_text = get_field("info_drink_driving_text", $post->ID);

$info_interact_medications_title = get_field("info_interact_medications_title", $post->ID);

$info_interact_medications_text = get_field("info_interact_medications_text", $post->ID);

$info_drinking_pregnancy_text = get_field("info_drinking_pregnancy_text", $post->ID);

$info_health_problems_text = get_field("info_health_problems_text", $post->ID);
$info_liver_disease_text = get_field("info_liver_disease_text", $post->ID);
$info_heart_disease_text = get_field("info_heart_disease_text", $post->ID);
$info_cancer_text = get_field("info_cancer_text", $post->ID);
$info_pancreas_text = get_field("info_pancreas_text", $post->ID);

$info_doc_text = get_field("info_doc_text", $post->ID);

$image_drinks = get_field("image_drinks", "option");

$image_drink_driving = get_field("image_drink_driving", "option");
$image_interact_medications = get_field("image_interact_medications", "option");
$image_interpersonal_problems = get_field("image_interpersonal_problems", "option");
$image_drinking_pregancy = get_field("image_drinking_pregancy", "option");
$image_health_problems = get_field("image_health_problems", "option");
$image_info_doc = get_field("image_info_doc", $post->ID);

//repeating content
$info_content = get_field("info_content", $post->ID);


$info_facts = "Knowing the facts";


$info_doc_title = "Consult a doctor";

$info_pancreas_title = "Pancreatitis";

$info_cancer_title = "Cancer";

$info_heart_disease_title = "Heart disease";


$info_liver_disease_title = "Alcohol-related liver disease";

$info_liver_disease_facts = "Alcohol-related liver disease
2M 
More than 2 million Americans suffer from alcohol-related liver disease.
";

$info_health_problems_title = "Long-term Health Problems";

$info_drinking_pregnancy_title = "Drinking and Pregnancy";


$info_interpersonal_problems_title = "Interpersonal Problems";

$info_interact_medications_title = "Interactions with Medications";

$info_drink_driving_title = "Drinking and Driving";

//get current page slug
global $wp;
$current_slug = add_query_arg( array(), $wp->request );

display_strategy_menu($current_slug); 
?>

<div class="strat_container info_3">

<div class="info_3 image_drinks">
	<img src="<?=$image_drinks ?>" alt="Alcohol Screening" />
</div>

<div class="info_facts as_copy large"><?=$info_facts ?> </div>

<div class="info_intro"><?=$info_intro ?> </div>
 

<div class="results_facts_gender info_3">
 
	<div class="box_purple info_facts_block">
		<div class="info_facts_number bold">1</div>
		<div class="info_women">DRINK A DAY FOR WOMEN</div> </div>

	<div class="box_blue info_facts_block">
		<div class="info_facts_number bold">2</div>
		<div class="info_men">DRINKS A DAY FOR MEN</div> 
	</div>
</div>

<div class="info_explain_text"><?=$info_explain_text ?> </div>

	
<?php
foreach($info_content as $e => $value){
	
	echo '<div class="info_3 info_image">
	<img src="'.$value['image'].'" alt="'.$value['title'].'" /></div>';
	
	echo '<div class="info_3 info_title">'.$value['title'].'</div>';

	echo '<div class="info_3 info_copy">'.$value['copy'].'</div>
	';
}

?>

<div class="info_3">

	<div class="info_liver_disease_title box_gray bold">
	<?=$info_liver_disease_title?></div>

	<div class="box_purple info_liver_disease_div">
		<div class="info_liver_disease_text as_copy medium">Alcohol-related liver disease</div>
		<div class="info_liver_disease_facts">2M </div>
		<div class="info_liver_disease_text as_copy medium">
		More than 2 million Americans suffer from alcohol-related liver disease.</div>
	</div>
		
	<div class="box_gray info_disease_div"> 
	
		<div class="info_liver_disease_text"><?=$info_liver_disease_text?></div>
		
		<div class="line"></div>
		
		<div class="info_heart_disease_title medium bold"><?=$info_heart_disease_title?></div>
		<div class="info_heart_disease_text"> <?=$info_heart_disease_text?> </div>
		
		<div class="line"></div>
		
		<div class="info_cancer_title medium bold"><?=$info_cancer_title?> </div>
		<div class="info_cancer_text"><?=$info_cancer_text?> </div>
		
		<div class="line"></div>
		<div class="info_pancreas_title medium bold"><?=$info_pancreas_title?> </div>
		<div class="info_pancreas_text"><?=$info_pancreas_text?> </div>
	</div>

	<div class="box_gray info_consult_doc">
		<div class="info_consult_doc_copy"><img src="<?=$image_info_doc ?>" alt="Alcohol Screening" /> &nbsp; Consult a doctor</div> 
	</div>


	<div class="box_purple info_doc_div">
		<div class="info_doc_text"><?=$info_doc_text?> </div>
	</div>
	
</div>
</div>


<form method="POST"> 

<?=view_all_strategies($nextPage); ?>

</form>


<script>
	function submitScreeningHome (page) {

		dataArray = [{
			"key": "button_drinking_4",
			"value": page
		}];
		
		submitASForm (dataArray); 
	}
</script>


<?php
get_footer();
?>