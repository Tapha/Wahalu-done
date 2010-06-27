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

<link type="text/css" href="/wahalu/jquery/css/custom-theme/jquery-ui-1.8.custom.css" rel="Stylesheet" />	

<script type="text/javascript" src="/wahalu/jquery/js/jquery-1.4.2.min.js"></script>

<script type="text/javascript" src="/wahalu/jquery/js/jquery-ui-1.8.custom.min.js"></script>

	<meta name="title" content="Wahalu" />
	
	<meta name="description" content="Bring Social Media To You" />
	
	<meta name="keywords" content="bring social media to you, social media, wahalu, social media consultant, social media consulting, seo consulting, seo consultant" />
	
	<meta name="Copyright" content="Dummy Limited" />
	
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />	
	
	
</head>	
<body id="dashboard">
<?php echo $user_type; ?> Number Dummy Limited. Logged In.
</body>	
</html>

<?php } else {echo "Na na na na na na, your not logged in.";}?>