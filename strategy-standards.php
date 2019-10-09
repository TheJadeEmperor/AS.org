<?php
/* Template Name: Strategy Standards */ 

get_header();

$image_beer = get_field("image_beer", "option");
$image_wine = get_field("image_wine", "option");
$image_spirits = get_field("image_spirits", "option");
$image_malt_liquor = get_field("image_malt_liquor", "option");


?>

<div class="standard_page_title large bold">Standard Drink Sizes</div>

<div class="box_gray standard_box">

	<div class="standard_count_title medium bold">Count as a Drink… </div>

	<div class="standard_drink_div">
		<div class="image_beer"><img src="<?=$image_beer?>" alt="Alcohol Screening" /></div>

		<div class="standard_drink_count medium">Beer ( 12 oz )<br />
		Malt ( 8-9 oz )</div>
	</div>
		
	<div class="standard_drink_div">	
		<div class="image_wine"><img src="<?=$image_wine?>" alt="Alcohol Screening" /></div>

		<div class="standard_drink_count medium">Wine ( 5 oz )<br />Fortified ( 3-4 oz )<br/>Liquer ( 2-3 oz )</div>
	</div>
		
	<div class="standard_drink_div">
		<div class="image_spirits"><img src="<?=$image_spirits?>" alt="Alcohol Screening" /></div>

		<div class="standard_drink_count medium">Liquor 86 proof spirits ( 1.5 oz )</div>
	</div>
</div>


<div class="standard_page_title as_copy large bold">Standard drink equivalents:</div>

<div class="standard_drinking_row">
	<div class="standard_drinking_div">
		<div class="standard_drinking_image">
			<img class="image_beer" src="<?=$image_beer?>" alt="Alcohol Screening" />
		</div>
		
		<div class="standard_drinking_copy">
			<div class="standard_drinking_title medium bold">BEER</div>
			<div class="standard_drinking_facts medium">12 oz. = 1 standard drink
				16 oz. = 1.3 standard drinks
				22 oz. = 2 standard drinks
				40 oz. = 3.3 standard drinks
			</div>
		 </div>
	</div>
	
	<div class="standard_drinking_div">
		<div class="standard_drinking_image">
			<img class="image_malt_liquor" src="<?=$image_malt_liquor?>" alt="Alcohol Screening" />
		</div>

		<div class="standard_drinking_copy">	
			<div class="standard_drinking_title medium bold">MALT LIQUOR </div>
			<div class="standard_drinking_facts medium">(like Colt 45, St. Ides, Olde English 800, Mickey’s)
			12 oz. = 1.5 standard drinks
			16 oz. = 2 standard drinks
			22 oz. = 2.5 standard drinks
			40 oz. = 4.5 standard drinks 
			</div>
		</div>
	</div>
</div>
	
<div class="standard_drinking_row">	
	<div class="standard_drinking_div">
		
		<div class="standard_drinking_image">
			<img class="image_wine" src="<?=$image_wine?>" alt="Alcohol Screening" />
		</div>

		<div class="standard_drinking_copy">	
			<div class="standard_drink_title medium bold">WINE </div>
			<div class="standard_drink_copy medium">A 4 oz. glass = 1 standard drink
		A 750 mL (25 oz.) bottle = 5 standard drinks</div>
		</div>

	</div> 	

	<div class="standard_drinking_div">
		 
		<div class="standard_drinking_image"><img class="image_spirits" src="<?=$image_spirits?>" alt="Alcohol Screening" /></div>

		<div class="standard_drinking_copy">	
			<div class="standard_drink_title medium bold">80-PROOF SPIRITS
			(Like Vodka, Gin, Whisky, Rum, Kahlua, etc.) </div>

			<div class="standard_drink_copy medium">a mixed drink = 1 or more* standard drinks
			a pint (16 oz.) = 11 standard drinks
			a fifth (25 oz.) = 17 standard drinks
			1.75 L (59 oz.) = 39 standard drinks 
			</div>
		</div>
	</div>
</div>


<div class="small standard_footnote">*Note: Depending on factors such as the type of spirits and the recipe, one mixed drink can contain from one to three or more standard drinks. </div>
 
<div class="small standard_footnote">National Institute on Alcohol Abuse and Alcoholism National Institutes of Health </div>



<script>
	function submitScreeningHome (page) {
 
		dataArray = [{
			"key": "button_strategy_standards",
			"value": page
		}];
		
		submitASForm (dataArray); 
	}
</script>


<?php
get_footer();
?>