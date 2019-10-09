<?php
/* Template Name: Page Gender */ 

get_header();

$gender_copy = get_field("gender_copy", $post->ID);

?>

<div class="as_copy medium gender_copy"><?=$gender_copy?></div>


<script>
	function submitScreeningHome (page) {
 
		dataArray = [{
			"key": "button_strategy_standards",
			"value": page
		}];
		 
		submitASForm (dataArray); 
		
	}
</script>