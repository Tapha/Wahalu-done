<?php// if (isset($user_number)){ ?>

<!doctype html>

<html>

<head>

<title> Wahalu - Dashboard </title>

<link rel="stylesheet" type="text/css" href="/wahalu/css/style.css"/>

<link rel="shortcut icon" href="/wahalu/assets/images/icon/favicon.ico">

<link type="text/css" href="/wahalu/jquery/css/custom-theme/jquery-ui-1.8.2.custom.css" rel="Stylesheet" />	

<script type="text/javascript" src="/wahalu/jquery/js/jquery-1.4.2.min.js"></script>

<script type="text/javascript" src="/wahalu/jquery/js/jquery-ui-1.8.2.custom.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){

//Dashboard

$('#form_submitted').hide();

$('#start_submit_button').click(function(){

//Show form submitted

$('form_submitted').FadeIn('slow');

//Submit the form the database. 

});

});

</script>

	<meta name="title" content="Wahalu" />
	
	<meta name="description" content="Bring Social Media To You" />
	
	<meta name="keywords" content="bring social media to you, social media, wahalu, social media consultant, social media consulting, seo consulting, seo consultant" />
	
	<meta name="Copyright" content="Dummy Limited" />
	
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />	
	
	
</head>	
<body id="dashboard">
<div id='logout'><a href='/wahalu/logout.php/'>Logout</a></div>
<a href='/wahalu/dashboard.php/'><img id='icon_no_1' src='/wahalu/assets/images/icon/w/wahalu_icon_w.png'></a>
<div id='dashboard_nav'>
<h4>
<div id="start_conversations"><a href='/wahalu/start_dash.php'>Start Conversation</a></div>
<div id="view_conversation"><a href='/wahalu/view_dash.php'>View Conversation</a></div>
<div id="open_tab"><a href='/wahalu/open_dash.php'>Open Tab</a></div>
<div id="work_room"><a href='/wahalu/work_dash.php'>Work Room</a></div>
<div id="My_Account"><a href='/wahalu/my_dash.php'>My Account</a></div>
</h4>
</div>
<div id='company_name'><h1><?php echo 'Wahalu'; ?></h1></div>
<div id='main_body_dashboard'></div>
</div>
</div>

</body>	
</html>

<?php// } else {echo "Na na na na na na, your not logged in.";}?>