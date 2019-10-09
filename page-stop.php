<?php
/* Template Name: Page Stop */ 

get_header();
 
$nextPage = get_field("next_page", $post->ID);


?>

<div class="as_copy large page_stop">Because you are under the age of 18, we cannot provide you with the most up to date information at this time given that any alcohol consumption is likely to be harmful to brain development. However, we have referrals to additional resources for you. Please click below: <br /><br />

<a href="/info-drinking-1">Strategies for Reducing Risk</a> 
</div>

<p>&nbsp;</p>




<a onclick="submitScreeningHome('info-drinking-1')" href="/info-drinking-1"><button class="nextButton box_purple">NEXT</button></a>

<?php
get_footer();
?>