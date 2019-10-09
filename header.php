<?php
session_start();

$templateDir = get_bloginfo( 'template_directory' );

$keepVars = array(
'p0', 'p1', 'button_next_page', 'button_previous_page',

//risk calculation
'sex', 'zipCode', 'age', 'binge', 'binge4', 'HDD', 'NDD', 'DDD', 'risk', 'percentile', 

//Q1 to Q6
'button_home', 'button_page_1a', 'button_page_1b', 'button_page_2', 'button_page_3','button_page_4', 'button_page_5', 'button_page_6',

//Page Plan
'button_plan_choice', 'button_plan_value', 'commit',
'button_page_results', 'button_page_study', 'button_page_quit', 'button_strat_reduce_drinking', 'button_strat_cutback', 'button_strat_alc_problem',  'button_strat_standards', 'button_strat_cutback_online_support', 'info_drinking_1',  'info_drinking_2', 'info_drinking_3', 'info_drinking_4' );

foreach($keepVars as $vars) {
	if(isset($_POST[$vars])) $_SESSION[$vars] = $_POST[$vars];
}

//default values 
$defaultZero = array('binge', 'binge4', 'HDD', 'NDD', 'DDD');
foreach($defaultZero as $vars) {
	if(!isset($_SESSION[$vars])) $_SESSION[$vars] = 0;
}

if($_GET['debug'] == 1)
	print_r($_SESSION);


///////////////////////////////////////////////////////////////
$api_url = "https://api-qa.drugfree.org/jsonWeb.asmx/H19989";
$home_url = home_url( $path, $scheme );
///////////////////////////////////////////////////////////////

$image_my_results = get_field("image_my_results", "option");
$image_whats_next = get_field("image_whats_next", "option");
$image_my_results_active = get_field("image_my_results_active", "option");
$image_whats_next_active = get_field("image_whats_next_active", "option");

//get current page slug
global $wp;
$current_slug = add_query_arg( array(), $wp->request );


if($current_slug == 'page-results') {
	$tab_both = '<div class="tab_both">
		<div class="tab_left"><a href="/page-results"><img src="'.$image_my_results_active.'" alt="AlcoholScreening.org" /></a><br />
			<div class="tab_text_active">MY RESULTS</div>
		</div>

		<div class="tab_right"><a href="/page-plan"><img src="'.$image_whats_next.'" alt="AlcoholScreening.org" /></a><br />
			<div class="tab_text_not">WHAT\'S NEXT?</div>
		</div> 
	</div>
	<div class="clear"></div>
	<div class="line"></div>
';
}
else if ($current_slug == 'page-plan' || $current_slug == 'page-study' || $current_slug == 'page-quit') {

	$tab_both = '<div class="tab_both">
		<div class="tab_left"><a href="/page-results"><img src="'.$image_my_results.'" alt="AlcoholScreening.org" /></a><br />
			<div class="tab_text_not">MY RESULTS</div>
		</div>

		<div class="tab_right"><a href="/page-plan"><img src="'.$image_whats_next_active.'" alt="AlcoholScreening.org" /></a><br />
			<div class="tab_text_active">WHAT\'S NEXT?</div>
		</div> 
	</div>
	<div class="clear"></div>
	<div class="line"></div>
';
	
}



//show close button or main menu
$main_menu = '<div class="as_menu_d">
	<ul class="nav_menu">
		<li class="main_menu_item"><a href="/page-q1-a">TAKE THE QUIZ</a></li>
		<li class="main_menu_item"><a href="/strategy-online-support/">RESOURCES</a></li>
		<li class="main_menu_item"><a href="../#aboutUs">ABOUT US</a></li>
	</ul>
	</div> 
	
<div class="as_menu_m" onclick="changeMenu(this); toggleNav()">
	<div class="bar1"></div>
	<div class="bar2"></div>
	<div class="bar3"></div>
</div>
';


$close_button = show_close_button($home_url);


if($current_slug == 'page-q1-a' || $current_slug == 'page-q1-b' || 
$current_slug == 'page-q2' || $current_slug == 'page-q3' || 
$current_slug == 'page-q4a' || $current_slug == 'page-q4b' || 
$current_slug == 'page-q5' || $current_slug == 'page-q6'
) {
	$what_to_show = $close_button;
}
else {
	$what_to_show = $main_menu;
}




$nav_bar = '<div class="nav_bar">
<div class="as_org_logo">
	<a href="'.$home_url.'"><img src="'.$templateDir.'/images/as_org_logo.jpg" alt="AlcoholScreening.org" /> </a> 
</div>
';


$nav_bar .= '<!-- Close button or main menu -->'.$what_to_show.'
<div class="clear"></div>';

$nav_bar .= '</div>


<!-- Mobile Menu - hidden -->	

	<div id="mobileMenu">
		<a href="./page-q1-a/">TAKE THE QUIZ</a>
		<a href="./strategy-reduce-drinking/">RESOURCES</a>
		<a href="./info-drinking-1/">STANDARD DRINK SIZES</a>
		<a href="'.$home_url.'#aboutUs">ABOUT US</a>
	</div>
	
';

//echo $nav_bar;


//fake pop up pages
if ($current_slug == 'page-gender' || $current_slug == 'strategy-standards') {
	
	if($current_slug == 'page-gender') {
		$back_url = "/page-q2";
	}
	else {
		$back_url = "/strategy-cutback-2";
	}
	
	$main_display = '<div class="nav_bar">'.show_close_button($back_url).'
	
	<div class="clear"></div>
	</div>';
	
}
else { //all other pages
	$main_display = $nav_bar;
}


//pop up for IE browsers
$ua = htmlentities($_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, 'UTF-8');
	
if (preg_match('~MSIE|Internet Explorer~i', $ua) || (strpos($ua, 'Trident/7.0') !== false && strpos($ua, 'rv:11.0') !== false)) {
	show_ie_popup();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
	<title>Alcohol Screening.org | How Much is Too Much? </title>

	
	<!-- For the progress bar --> 
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
	
	<!-- For the cicle progress bar --> 
	<link href="<?=$templateDir?>/circular-prog-bar.css" rel="stylesheet">

	<link href="<?=$templateDir?>/style.css" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<?php wp_head(); ?>
	
	
	
<script>


function submitASForm (dataArray) {
	
	var p1 = "<?=$_SESSION['p1']?>"; //if p1 is already defined
	var p2 = -1; 

	if(typeof $("#p1").val() !== 'undefined' ) { //2nd entry point to api
		p1 = $("#p1").val(); 
		console.log("Stage B p1: ", p1);
	}

	if (p1 == "") { //entry point to api 
		p1 = Math.random().toString(36).substring(7);
		console.log("random ", p1);
		$("#p1").val(p1);
		console.log("Stage A p1: ", p1);
	}
	else {
		p2 = 0; //p2=0 if p1 is defined
	}
	
	console.log("p1: ", p1);

	var p3 = "<?=$_SESSION['percentile']?>";

	if(p3 == "") {
		p3 = -1; 
	}
	
	//add session vars to dataArray
	<?php
	foreach($_SESSION as $key => $val) {
		echo '
		dataArray.push({
			"key": "'.$key.'",
			"value": "'.$val.'" 
		});	';
	}
	?>
	
	
	var platform = new Object();
	platform.p0 = "P2t4rfqwYmTK";
	platform.p1 = p1; //login id
	platform.p2 = p2; //status
	platform.p3 = p3; //percentile
	platform.p4 = "<?=$_SESSION['risk']?>"; 
	platform.p5 = "01"; //version number
	platform.data = dataArray; 
	
	var api_data = JSON.stringify(platform);
	console.log('submitASForm dataArray: ' + dataArray + 'platform '+ api_data ); 
	
	$('.as_error').html( api_data ); 
	
	$.ajax({ 
		type        : 'POST', //Method type
		url         : '<?php echo $api_url?>', 
		data        : api_data, 
		success     : function(login_id) {
			console.log('return: ' + login_id);
			$("#p1").val(login_id);
			return login_id;
		}
	});
}


function changeMenu(x) {
	x.classList.toggle("change");
}
</script> 
<script>

function toggleNav() {
	var thisClass = $('#mobileMenu').attr('class');
	console.log('class: '+thisClass);
	
	if(thisClass == 'sideNav') {
		$('#mobileMenu').removeClass('sideNav');
	}
	else {
		$('#mobileMenu').addClass('sideNav'); 
		//scroll to top of page
		window.scrollTo(1, 0);
	}
	
}



jQuery(document).ready(function(){
    // This button will increment the value
    $('[data-quantity="plus"]').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('data-field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $('[data-quantity="minus"]').click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('data-field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
});

</script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-1273883-11"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'UA-1273883-11', { 'optimize_id': 'GTM-M4RRT6W'});
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
 

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

	})(window,document,'script','dataLayer','GTM-NHVVQRM');</script>

	<!-- End Google Tag Manager -->
</head>
<body>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NHVVQRM"

	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

	<!-- End Google Tag Manager (noscript) -->

<div class="container">

<?php
echo $main_display;

echo $tab_both;
?>

<!--
<?php
if($_GET['debug'] == 1) {
	echo '<div class="as_error">api msg</div>
	<div onclick="submitScreeningHome(\'test\');">TEST</div>'; 
}
?>
-->

<br /><br />