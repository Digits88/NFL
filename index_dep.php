<!-- 
    Author: GSP © 2012
-->


<!DOCTYPE html>

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
	
	


	<style type="text/css">
		#jstwitter {
		    width: 300px;
		    font-family: georgia;
		    font-size: 15px;
		    color: #333333;
		    padding: 10px;
		}
		 
		#jstwitter .tweet {
		    margin: 0 auto 15px auto;
		    padding: 0 0 15px 0;
		    border-bottom: 1px dotted #ccc;
		}
		 
		#jstwitter .tweet a {
		    text-decoration: none;
		    color: #13c9d0;
		}
		 
		#jstwitter .tweet a:hover {
		    text-decoration: underline;
		}
		 
		#jstwitter .tweet .time {
		    font-size: 10px;
		    font-style: italic;
		    color: #666666;
		}
	</style>
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
</head>





<html>
    <head>
        <title>Theme for SF Super Bowl</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
    <div id="wrap">
       <div id="container">
           
            <ul id="screen">
            	<li id="menu" class="menu"><iframe name="menu" frameborder="0" src="apis/menu.php" width="994" height="70"></iframe></li>
                <li id="box1"><iframe name="all_count" frameborder="0" src="apis/iframe_all.php" width="994" height="318"></iframe></li>
                <li id="box2" class="bottom"><iframe name="fb_count" frameborder="0" src="apis/iframe_facebook.php" width="328" height="160"></iframe></li>
                <li id="box3" class="bottom"><iframe name="google_count" frameborder="0" src="apis/iframe_google.php" width="328" height="160"></iframe></li>
                <li id="box4" class="bottom"><iframe name="total_count" frameborder="0" src="apis/iframe_totals.php" width="328" height="160"></iframe></li>
            </ul>
       </div>
    </div>
    
    
    </body>
</html>
