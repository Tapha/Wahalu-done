<?php
//Grab the data

$your_thing = $_GET['what'];

$achievable = $_GET['achievable'];

$email = $_GET['email'];

$password = $_GET['enc'];
?>

<!doctype html>

<html>

<head>

<title> Wahalu - Create An Account </title>

<link rel="stylesheet" type="text/css" href="/wahalu/css/style.css"/>

<link rel="shortcut icon" href="/wahalu/assets/images/icon/favicon.ico">

<script type="text/javascript" src="/wahalu/jquery/jquery.js">
</script>

<script type="text/javascript" src="/wahalu/jquery/script.js">
</script>

<link type="text/css" href="/wahalu/jquery/css/custom-theme/jquery-ui-1.8.custom.css" rel="Stylesheet" />	

<script type="text/javascript" src="/wahalu/jquery/js/jquery-1.4.2.min.js"></script>

<script type="text/javascript" src="/wahalu/jquery/js/jquery-ui-1.8.2.custom.min.js"></script>

<script type="text/javascript" src="/wahalu/jquery/jquery.NobleCount.js"></script>

<script type="text/javascript">

$(document).ready(function(){



$('#your_thing').NobleCount('#count2', {max_chars: 140});

$('#your_promo').NobleCount('#count3', {max_chars: 140});

});

</script>

	<meta name="title" content="Wahalu" />
	
	<meta name="description" content="Bring Social Media To You" />
	
	<meta name="keywords" content="bring social media to you, social media, wahalu, social media consultant, social media consulting, seo consulting, seo consultant" />
	
	<meta name="Copyright" content="Dummy Limited" />
	
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />	
	
	
</head>	
<div id ='header'>
<a href='/wahalu/index.php/home'><img id='icon_no_1' src='/wahalu/assets/images/icon/w/wahalu_icon_w.png'></a>
<a id='beta' href='/wahalu/'>Beta</a>
<img id='login_icon_1' src='/wahalu/assets/images/icons/login_icon_1.png'>
<img id='login_icon_2' src='/wahalu/assets/images/icons/login_icon_2.png'>
<img id='login_icon_3' src='/wahalu/assets/images/icons/login_icon_3.png'>
<img id='login_icon_4' src='/wahalu/assets/images/icons/login_icon_4.png'>
<img id='login_icon_5' src='/wahalu/assets/images/icons/login_icon_5.png'>
<div id ='nav'>
<h1>
<span id ='real_nav'>
<a id='what' href='/wahalu/what_is.php/'>What Is Wahalu?</a>
<a id='why' href='/wahalu/benefits.php/'>Benefits</a>
<a id='how' href='/wahalu/a_query_post.php/'>Post A Query</a>
<a id='user_signup' href='/wahalu/pricing.php/'>Business Sign-Up</a>
</span>
</h1>
<a id='Sign_up_1' href='/wahalu/advisor_sign_up.php'>Advisor Sign Up</a>


</div>
</div>	
<body id="container">
<div id="main">
<form id='sign_post' action='/wahalu/dashboard/company_dashboard/payment_page.php' method='POST'>
<input type='hidden' name='your_thing' value='<?php $your_thing ?>'>
<input type='hidden' name='achievable' value='<?php $achievable ?>'>
<input type='hidden' name='email' value='<?php $email ?>'>
<input type='hidden' name='password' value='<?php $password ?>'>
<input id='go_submit' type='Submit' value='Sign Up'>
</form>
</div>
<div id='footer'>
<h1>
<span id='copy'>Dummy Limited &#169; 2010.</span> 
<span id ='footer_nav'>
<a id='About' href='/'>About</a>
<a id='pricing_footer' href='/'>Pricing</a>
<a id='privacy' href='/'>Privacy Policy</a>
<a id='buzz_footer' href='/'>Buzz</a>
<a id='tour_footer' href='/'>Tour</a>
</span>
</h1>
</div>
</body>	
</html>