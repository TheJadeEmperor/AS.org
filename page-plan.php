<?php
/* Template Name: Page Plan */ 

get_header();

$nextPage = get_field("next_page", $post->ID);
$plan_consider = get_field("plan_consider", $post->ID);
$plan_we_can_help = get_field("plan_we_can_help", $post->ID);
$plan_testing_1 = get_field("plan_testing_1", $post->ID);
$plan_testing_2 = get_field("plan_testing_2", $post->ID);
$plan_30_days = get_field("plan_30_days", $post->ID);

$image_calendar = get_field("image_calendar", $post->ID);

$image_my_results = get_field("image_my_results", "option");
$image_whats_next = get_field("image_whats_next", "option");

?>


<div class="box_gray plan_consider">

<div class="as_copy large bold"><?=$plan_consider?></div>

<div class="as_copy medium plan_we_can_help"><?=$plan_we_can_help?></div>
</div>

<div class="as_copy small bold plan_testing_1"><?=$plan_testing_1?></div>

<div class="as_copy medium bold plan_testing_2"><?=$plan_testing_2?></div>

<div class="image_calendar"><img src="<?=$image_calendar ?>" alt="Alcohol Screening" /></div>


<div class="plan_30_days"><?=$plan_30_days?></div>


<script>
$(document).ready(function() {

	function formValidate(event) {
		
		var button_plan_choice = $('#button_plan_choice').val();
		var button_plan_value = $('#button_plan_value').val();
		var commit = $('#commit').val();
				
		console.log( button_plan_choice+" "+button_plan_value );
		
		if (button_plan_choice == "" || button_plan_value == '' || commit == ''){
			alert('Please complete all questions');
			event.preventDefault();		
		}
		
	}

	$("#nextPage").click(function(event) {
		formValidate(event);
	});
	
	
	$(".button_plan").click(function() {
		
		var button_plan_choice = $(this).attr('id');
		var button_plan_value = $(this).find('span').html();
		
		console.log( button_plan_choice+" "+button_plan_value );
		
		$(".button_plan").css('border', '1px solid #C5C1C1');
		$(".button_plan").css(':hover border', '1px solid #851A9B');
		$(this).css('border', '2px solid #851A9B');
				
		$("#button_plan_choice").val(button_plan_choice);
		$("#button_plan_value").val(button_plan_value);
	});
	
	
	$(".button_1_10").click(function(event) {
	
		$(".button_1_10").css('border', '1px solid #C5C1C1');
		$(".button_1_10").css(':hover border', '1px solid #851A9B');
		$(this).css('border', '2px solid #851A9B');
	
		$("#commit").val($(this).val());
		
		console.log('commit: '+$(this).val());
		event.preventDefault();
	});
	
});
</script>

	<div class="button_plan" id="drinking_quit">
		<span class="clear">I plan to quit drinking. </span>
	</div>
	
	<div class="button_plan" id="drinking_reduce_a_lot">
		<span class="clear">I plan to greatly cut back on my drinking.</span>
	</div>
	
	<div class="button_plan" id="drinking_reduce_a_bit">
		<span class="clear">I plan to cut back on my drinking a little bit.</span>
	</div>
	
	<div class="button_plan" id="drinking_same">
		<span class="clear">My drinking will stay the same. I have no plan to change it.</span>
	</div>
	
	
	<form method="POST" action="<?=$nextPage?>" onsubmit="submitScreeningHome('page-quit')" >

	<input type="hidden" name="button_plan_choice" id="button_plan_choice" />
	<input type="hidden" name="button_plan_value" id="button_plan_value" />
	<input type="hidden" name="commit" id="commit" />	
	<p>&nbsp;</p>
	
	<div class="medium plan_testing_2">On a scale of 1 to 10, how committed are you to this plan? </div>

	<div class="plan_buttons_div">
		<input class="button_1_10" type="button" name="commit" value="1" />
		<input class="button_1_10" type="button" name="commit" value="2" />
		<input class="button_1_10" type="button" name="commit" value="3" />
		<input class="button_1_10" type="button" name="commit" value="4" />
		<input class="button_1_10" type="button" name="commit" value="5" />
		<input class="button_1_10" type="button" name="commit" value="6" />
		<input class="button_1_10" type="button" name="commit" value="7" />
		<input class="button_1_10" type="button" name="commit" value="8" />
		<input class="button_1_10" type="button" name="commit" value="9" />
		<input class="button_1_10" type="button" name="commit" value="10" />
		
		<div class="plan_commit_div">
			<div class="plan_commit_1">Not at all</div>
			<div class="plan_commit_10">Most Commited I’ve ever been</div>
			<div class="clear"></div>
		</div>
	</div>
	
	
 
 	<input type="submit" onclick="submitScreeningHome('page-quit')" href="<?=$nextPage?>" id="nextPage"class="nextButton box_purple" value="NEXT STEPS" />

</form>


<script>

	function submitScreeningHome (page) {

		var button_plan_choice = $("#button_plan_choice").val();
		var button_plan_value = $("#button_plan_value").val();
	 
		dataArray = [{
			"key": "button_page_plan", 
			"value": page 
		},
		{		
			"key": "button_plan_choice",
			"value": button_plan_choice
		},
		{		
			"key": "button_plan_value",
			"value": button_plan_value
		}];
		
		submitASForm (dataArray); 
	}

</script>


<?php
get_footer();
?>