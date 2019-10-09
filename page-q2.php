<?php
/* Template Name: Page Q2 */ 

get_header();

$previousPage = get_field("previous_page", $post->ID);
$nextPage = get_field("next_page", $post->ID);
$q2_gender_text = get_field("q2_gender_text", $post->ID);

$symbol_male_normal = get_field("symbol_male_normal", $post->ID);
$symbol_female_normal = get_field("symbol_female_normal", $post->ID);
$symbol_male_highlight = get_field("symbol_male_highlight", $post->ID);
$symbol_female_highlight = get_field("symbol_female_highlight", $post->ID);


display_progress_bar(32); 

?>

<div class="q2_as_title">Let's get started.</div>

<div class="q2_as_copy">Please answer the following questions so we can provide you with the right information. </div>

<div class="q2_as_subtitle">Your Sex</div>


<div class="q2_as_gender purple"><a href="/page-gender"><?=$q2_gender_text ?> </a></div>


<form id="ASForm" method="POST">

	<input type="hidden" id="sex" name="sex" value="<?=$_SESSION['sex']?>" /> 
	
	<div class="gender_div">	

		<div class="gender_icon F" id="F">
			<img src="<?=$symbol_female_normal ?>" alt="Alcohol Screening Female" /><br />Female 
		</div> 

		<div class="gender_icon M" id="M">
			<img src="<?=$symbol_male_normal ?>" alt="Alcohol Screening Male" /> <br />Male
		</div>

		<div class="clear"></div>
	
	</div>

	<div class="as_copy medium zip_code">Your Zip Code<br /><br />
		<input type="number" id="zipCode" name="zipCode" value="<?=$_SESSION['zipCode']?>" /> 
	</div>

	<div class="as_copy medium age">Your Age Is<br /><br />
		<input type="number" id="age" name="age" value="<?=$_SESSION['age']?>" />
	</div>

	<br />
	
	<input type="submit" class="hideThis" formaction="<?=$nextPage?>" />

	<?php
		arrow_left_right_display($previousPage, $nextPage);
	?>
	<div class="clear"></div>
</form>


<script>

	function submitScreeningHome (userInput) {

		var sex = $("#sex").val();
		var zipCode = $("#zipCode").val();
		var age = $("#age").val();
		
		var dataArray = [{
			"key": "button_page_2",
			"value": userInput 
			}, 
			{
				"key": "sex",
				"value": sex
			},
			{
				"key": "zipCode",
				"value": zipCode
			},
			{
				"key": "age",
				"value": age
			}];
			
			
		console.log('submitScreeningHome dataArray: '+dataArray );
		
		submitASForm (dataArray);	
	}
</script>
<script>


$(document).ready(function() {

	function formValidate(event){
		var age = $("#age").val();
		var sex = $("#sex").val();
		var zipCode = $("#zipCode").val();
		
		console.log('sex: ' + sex + 'zipCode: ' +zipCode+ 'age: '+age);
		
		if (sex == "" || age == '' || zipCode == ''){
			//console.log('invalid');
			alert('Please complete all questions');
			event.preventDefault();		
		}
		else {
			console.log('valid');
			if(age < 18) {
				console.log('Stop Page');
				$("#nextPage").attr("formaction", "/stop-page");
				//$("#previousPage").val("stop page");
				$("#previousPage").attr("formaction", "/stop-page");
			}
		}
	}

	$("#nextPage").click(function(event) {
		formValidate(event); 
	});

	$("#previousPage").click(function(event) {
		formValidate(event);
	});

	
	var age = $("#age").val();
		
	$("#age").keyup(function() {
		var age = $("#age").val();

		if(age < 18) {
			console.log('stop page');
			$("#nextPage").attr("formaction", "/stop-page");
			$("#previousPage").attr("formaction", "/stop-page");
		}
		else {
			$("#nextPage").attr("formaction", "<?=$nextPage?>");
			$("#previousPage").attr("formaction", "<?=$previousPage?>");
		}
	});

	function selectM () {
		$("#M").find('img').attr('src', '<?=$symbol_male_highlight?>');
		$("#M").css('background-color', '#851A9B');			
		$("#M").css('color', '#FFFFFF');
	}
	
	function selectF () {
		$("#F").find('img').attr('src', '<?=$symbol_female_highlight?>');
		$("#F").css('background-color', '#851A9B');	
		$("#F").css('color', '#FFFFFF');
	}
	
	<?php
	if($_SESSION['sex'] == 'M'){
		?>
		selectM();
		<?php
	}
	else if ($_SESSION['sex'] == 'F'){
		?>
		selectF();
		<?php
	}
	?>
	
	$(".gender_icon").click(function() {
		
		var sex = $(this).attr('id'); //get sex from icon
		
		if(sex == 'M') {
			$("#M").find('img').attr('src', '<?=$symbol_male_highlight?>');
			$("#M").css('background-color', '#851A9B');			
			$("#M").css('color', '#FFFFFF');
			
			$("#F").find('img').attr('src', '<?=$symbol_female_normal?>');
			$("#F").css('background-color', '#FFFFFF');
			$("#F").css('color', '#333333');		
		}
		else {
			$("#F").find('img').attr('src', '<?=$symbol_female_highlight?>');
			$("#F").css('background-color', '#851A9B');	
			$("#F").css('color', '#FFFFFF');			
			
			$("#M").find('img').attr('src', '<?=$symbol_male_normal?>');
			$("#M").css('background-color', '#FFFFFF');	
			$("#M").css('color', '#333333');
		}
		
		$("#sex").val(sex);
	});
});

</script>

<?php
get_footer();
?>