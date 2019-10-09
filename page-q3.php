<?php
/* Template Name: Page Q3 */

get_header();

$templateDir = get_bloginfo( 'template_directory' );

$previousPage = get_field("previous_page", $post->ID);

$q3_copy = get_field("q3_copy", $post->ID); 


$image_beer = get_field("image_beer", "option");
$image_wine = get_field("image_wine", "option");
$image_spirits = get_field("image_spirits", "option"); 
$image_malt_liquor = get_field("image_malt_liquor", "option");
$beer_content = get_field("beer_content", "option");
$wine_content = get_field("wine_content", "option");
$spirits_content = get_field("spirits_content", "option"); 
$q3_to_q6_copy = get_field("q2_to_q6_copy", "option");


$screening_copy = "In the past month, what is the largest number of drinks that you have had on any one day?";

$nextPage = '/page-q4a/';

$inputName = "HDD";

display_progress_bar(48); 
?>

<p>&nbsp;</p>

<form method="POST">

	<div class="as_copy large bold screening_copy"><?=$screening_copy?></div>
	
	<div class="page_q3">
	
		<div class="div_minus"><img src="<?=$templateDir?>/images/minus.png" class="minus" data-quantity="minus" data-field="<?=$inputName?>" /> </div>
	
		<div class="div_number"><input type="number" id="<?=$inputName ?>" name="<?=$inputName?>" value="<?=$_SESSION[$inputName]?>" placeholder="0" onfocus="this.value = ''" /> </div>
		
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

		var HDD = $("#HDD").val();
		
		dataArray = [{
			"key": "button_page_3", 
			"value":page 
		},
		{		
			"key": "HDD",
			"value": HDD
		}];
		
		console.log('submitScreeningHome dataArray: '+dataArray );
		
		submitASForm (dataArray);
	}
</script>

<?php
get_footer();
?>