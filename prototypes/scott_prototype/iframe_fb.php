<?php 
$page = 'home'; 
?>

<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />

	<title>#SFSuperbowl</title>
  
	<!-- Included CSS Files -->
	<link rel="stylesheet" href="stylesheets/foundation.css">
	<link rel="stylesheet" href="stylesheets/app.css">
	


	<!--[if lt IE 9]>
		<link rel="stylesheet" href="stylesheets/ie.css">
	<![endif]-->
	
	<script src="javascripts/modernizr.foundation.js"></script>


	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	
	<!-- TWITTER SCRIPTS -->
<!-- 	<script src="javascripts/twitter.js"></script> -->


	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	
	<script type="text/javascript">
		$(function() {
		//Set Url of JSON data from the facebook graph api. make sure callback is set   with a '?' to overcome the cross domain problems with JSON
    	var url = "https://graph.facebook.com/sonicdrivein?callback=?";

	    //Use jQuery getJSON method to fetch the data from the url and then create our unordered list with the relevant data.
	    $.getJSON(url,function(json){
	        var html = "<ul><li>" + json.likes + "</li></ul>";
	        //A little animation once fetched
	        $('.facebookfeed').animate({opacity:0}, 500, function(){
	            $('.facebookfeed').html(html);
	        });
	        $('.facebookfeed').animate({opacity:1}, 500);
	    });
	  });
	</script>



	
	<script type="text/javascript" src="javascripts/twitter.js"></script>
	
	<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
	
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-24776145-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
	
	
	
	
</head>


<body>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=369308779814605";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>




	<!-- container -->
	<div class="container">

		
			<div class="twelve columns">			
				<div class="panel">
					<div id="fblikes">
						<h6>Facebook Likes (Sonic Drive-In)</h6>
						<div class="facebookfeed">
						<div class="scoreboard">
					        <h6>Loading...</h6>
					    </div>
						</div>
					</div>
				</div>
			</div>
			
	
			

	</div>
	<!-- container -->




	<!-- Included JS Files -->
	<script src="javascripts/jquery.min.js"></script>
	<script src="javascripts/foundation.js"></script>
	<script src="javascripts/app.js"></script>

</body>
</html>
