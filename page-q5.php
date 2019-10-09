<?php
/* Template Name: Page Q5 */ 

get_header();

$templateDir = get_bloginfo( 'template_directory' );

$nextPage = get_field("next_page", $post->ID);

$q5_copy = get_field("q5_copy", $post->ID);
$q5_question = get_field("q5_question", $post->ID);

$image_beer = get_field("image_beer", "option");
$image_wine = get_field("image_wine", "option");
$image_spirits = get_field("image_spirits", "option"); 
$image_malt_liquor = get_field("image_malt_liquor", "option");
$beer_content = get_field("beer_content", "option");
$wine_content = get_field("wine_content", "option");
$spirits_content = get_field("spirits_content", "option"); 
$q2_to_q6_copy = get_field("q2_to_q6_copy", "option");

$screening_copy = "On average, how many days a week do you have an alcoholic drink?";

$previousPage = '/page-q4a/';

$inputName = "NDD";

display_progress_bar(80); 
?>

<p>&nbsp;</p>
 
<form method="POST">

	<div class="as_copy large bold screening_copy"><?=$screening_copy?></div>
	
	<div class="page_q3">
	
		<div class="div_minus"><img src="<?=$templateDir?>/images/minus.png" class="minus" data-quantity="minus" data-field="<?=$inputName?>" /> </div>
	
		<div class="div_number"><input type="number" id="<?=$inputName ?>" name="<?=$inputName?>" value="<?=$_SESSION[$inputName]?>" placeholder="0"  onfocus="this.value = ''" /> </div>
		
		<div class="div_plus"><img src="<?=$templateDir?>/images/plus.png"
		class="plus" data-quantity="plus" data-field="<?=$inputName?>" /> </div>
	</div>
	
	
	<?=standard_drink_display() ?>
	
	
	<input type="submit" class="hideThis" formaction="<?=$nextPage?>" />


	<?php
		arrow_left_right_display($previousPage, $nextPage);
	?>
	
	<div class="clear"></div>

</form>



<script>
	function submitScreeningHome (page) {

		var NDD = $("#NDD").val();
		
		dataArray = [{
			"key": "button_page_4a", 
			"value":page 
		},
		{		
			"key": "NDD",
			"value": NDD
		}];
		
		console.log('submitScreeningHome dataArray: '+dataArray );
		
		submitASForm (dataArray);
	}
</script>


<?php
get_footer();
?>