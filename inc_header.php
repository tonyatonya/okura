<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="robots" content="" />
<meta http-equiv="X-UA-Compatible" content="IE=9" />
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap-theme.css"/>
<link rel="stylesheet" href="css/icon.css"/>
<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/jquery.bxslider.css"/>
<link rel="stylesheet" href="css/mainstyle.css" />
<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.js"></script>



<script type="text/javascript">
	$(document).ready(function(){
		var pagename = '<?php echo($pagename);?>';
		$(".mainmenu ul li").each(function(){
			var menuname = $(this).attr('data-pagename');
			if(menuname == pagename){
				$(this).addClass("active");
			}
		})
	})
</script>