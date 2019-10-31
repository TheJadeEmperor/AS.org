<?php
/* Template Name: Screening Home */ 

get_header();

$templateDir = get_bloginfo( 'template_directory' );

$nextPageA = get_field("next_page_a", $post->ID);
$nextPageB = get_field("next_page_b", $post->ID);

$home_title = get_field("home_title", $post->ID);
$home_instructions = get_field("home_instructions", $post->ID);
$home_button_1a = get_field("home_button_1a", $post->ID);
$home_button_1b = get_field("home_button_1b", $post->ID);
$home_disclaimer = get_field("home_disclaimer", $post->ID);
$home_about_us = get_field("home_about_us", $post->ID);
$home_explain = get_field("home_explain", $post->ID);
$home_footer_text = get_field("home_footer_text", $post->ID);
$home_number_people = get_field("home_number_people", $post->ID);

$home_image_people = get_field("home_image_people", $post->ID);


?>


<script>

	get_p1();

	function get_p1 () {

		console.log('get_p1()');

		dataArray = [];
		var p1 = submitASForm (dataArray); 
		
		console.log('get_p1(): '+ p1);
		$("#p1").val(p1);
	}
	

	function submitScreeningHome (userInput) {
		
		var dataArray = [{
			"key": "button_home",
			"value": userInput}];
			
		console.log('submitScreeningHome dataArray: '+dataArray );
		 
		submitASForm (dataArray); 
	}
	
	//submit ASForm when clicking on menu items 
	$( ".main_menu_item" ).click(function() {
		event.preventDefault();
		var href = $(this).find('a').attr('href');
		
		$( "#ASForm" ).attr('action', href);
		$( "#ASForm" ).submit();
		console.log( 'submit() ' + href );
		
	});

	$( ".mobile_menu_item" ).click(function() {
		event.preventDefault();
		var href = $(this).find('a').attr('href');
		
		$( "#ASForm" ).attr('action', href);
		$( "#ASForm" ).submit();
		console.log( 'submit() ' + href );
		
	});
</script>


	

<div class="box_blue home_full_width">
<?=$home_title?> 
</div>

<div class="clear">

	<div class="home_people_text"><?=$home_number_people ?>
	</div>
	
	<img src="<?=$home_image_people ?>" class="home_image_people" alt="Alcohol Screening" /> 
	
</div>


<div class="box_purple home_begin">
	<div class="home_begin_text"><?=$home_instructions?></div>


<form method="POST" id="ASForm">

	<input type="hidden" id="p1" name="p1" />


	<div class="button_div">
	
		<?php
		$button_name = 'button_home';

		//echo '<input onclick="submitScreeningHome(\'page_1b\');" type="submit" id="'.$button_name.'" name="'.$button_name.'" value="'.$home_button_1b.'" formaction="'.$nextPageB.'" class="button_for_loved_one" />';
		
		echo '<input onclick="submitScreeningHome(\'page_1a\');" type="submit" id="'.$button_name.'" name="'.$button_name.'" value="'.$home_button_1a.'" formaction="'.$nextPageA.'" class="button_for_you" />';
		
		?>

	</div>
</form>

	<div class="home_disclaimer"><?=$home_disclaimer?> </div>

</div>
 

<div class="about_us_title" id="aboutUs">About Us</div>

<div class="about_us_explain"><?=$home_explain?> </div>



<div class="home_footer">

	<div class="home_footer_logo"><img src="<?=$templateDir?>/images/coa_logo.png" alt="COA logo" /></div>
 
	<div class="home_footer_text"><?=$home_footer_text?> </div>
	
</div>

<?php 
	wp_footer(); 
?>