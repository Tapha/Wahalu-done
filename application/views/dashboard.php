<?php if (isset($user_number)){ ?>

<!doctype html>

<html>

<head>

<title> Wahalu - Dashboard </title>

<link rel="stylesheet" type="text/css" href="/wahalu/css/style.css"/>

<link rel="shortcut icon" href="/wahalu/assets/images/icon/favicon.ico">

<script type="text/javascript" src="/wahalu/jquery/jquery.js">
</script>

<script type="text/javascript" src="/wahalu/jquery/script.js">
</script>

<link type="text/css" href="http://localhost/wahalu/jquery/css/custom-theme/jquery-ui-1.8.2.custom.css" rel="Stylesheet" />	

<script type="text/javascript" src="/wahalu/jquery/js/jquery-1.4.2.min.js"></script>

<script type="text/javascript" src="/wahalu/jquery/js/jquery-ui-1.8.custom.min.js"></script>

	<meta name="title" content="Wahalu" />
	
	<meta name="description" content="Bring Social Media To You" />
	
	<meta name="keywords" content="bring social media to you, social media, wahalu, social media consultant, social media consulting, seo consulting, seo consultant" />
	
	<meta name="Copyright" content="Dummy Limited" />
	
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />	
	
	
</head>	
<body id="dashboard">
<?php echo $company_name; ?>
<div id="Tabs">
<ul>
    <li><a id='tabs-1' href='#account'><span>Account</span></a></li>
    <li><a id='tabs-2' href='#start_conversation'><span>Start Conversations</span></a></li>
	<li><a id='tabs-3' href='#view_conversation'><span>View Conversations</span></a></li>
	<li><a id='tabs-4' href='#open_tabs'><span>Open Tabs</span></a></li>
	<li><a id='tabs-5' href='#work_room'><span>Work Room</span></a></li>
</ul>
<div id="0">This is the content panel linked to the first tab, it is shown by default.</div>
<div id="1">This content is linked to the second tab and will be shown when its tab is clicked.</div>
</div>

</body>	
</html>

<?php } else {echo "Na na na na na na, your not logged in.";}?>