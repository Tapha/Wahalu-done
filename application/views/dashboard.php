<?php if (isset($user_number)){ ?>

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
 
//Tab
$('#tabs').tabs();

});

</script>

	<meta name="title" content="Wahalu" />
	
	<meta name="description" content="Bring Social Media To You" />
	
	<meta name="keywords" content="bring social media to you, social media, wahalu, social media consultant, social media consulting, seo consulting, seo consultant" />
	
	<meta name="Copyright" content="Dummy Limited" />
	
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />	
	
	
</head>	
<body id="dashboard">
<div id='logout'><a href='/wahalu/index.php/logout/'>logout</a></div>
<div id='company_name'><h1><?php echo $company_name; ?></h1></div>
<div id="tabs">
<ul>
    <li><a id='tabs-1' href='#account'><span>Account</span></a></li>
    <li><a id='tabs-2' href='#start_conversation'><span>Start Conversation</span></a></li>
	<li><a id='tabs-3' href='#view_conversation'><span>View Conversations</span></a></li>
	<li><a id='tabs-4' href='#open_tabs'><span>Open Tabs</span></a></li>
	<li><a id='tabs-5' href='#work_room'><span>Work Room</span></a></li>
</ul>
<div id="account">This is the content panel linked to the first tab, it is shown by default.</div>
<div id="start_conversation"><div id='start_head'><h2>Ask a question or make a statement.</h2></div>
<br>
<form action='/wahalu/index.php/start_conversation/' method='POST'>
<input id='form_start_conversation' type='text' name='start_conversation'><br><br><br>
<input id='start_submit_button' type='submit' value='Start'>
</form>
</div>
<div id="view_conversation">This is the content panel linked to the first tab, it is shown by default.</div>
<div id="open_tabs">This is the content panel linked to the first tab, it is shown by default.</div>
<div id="work_room">This is the content panel linked to the first tab, it is shown by default.</div>
</div>

</body>	
</html>

<?php } else {echo "Na na na na na na, your not logged in.";}?>