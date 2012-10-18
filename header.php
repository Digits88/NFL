<?php
session_start();
if(!isset($_SESSION['sfsuperbowlintro'])) {
    $_SESSION['sfsuperbowlintro'] = true;
}
    
    require_once 'config.php';
    
    $request = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    
?>
<!DOCTYPE html>
<html  itemscope itemtype="http://schema.org/Event" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="https://www.facebook.com/2008/fbml">
<!--
 GOOGLE+ 
<html>
 Facebook 
<html >

-->

    <head>
    	
        <title>SFSuperBowl || 2016</title>
        <!-- GOOGLE+ META TAGS FOR DEFAULT THUMBNAIL IMAGE -->
        <meta itemprop="name" content="SFSUPERBOWL">
        <meta itemprop="description" content="Our bid for the 2016 Super Bowl starts with you. Share why you think the Bay Area would be a perfect host for Super Bowl 50. Use #SFSuperbowl or add us to your Circles page for updates, news and events. Together we can bring the Bowl to the bay.">
        <meta itemprop="image" content="http://www.sfsuperbowl.com/images/fb/sfsb_128x128.jpg">
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <link rel="icon" type="image/png" href="<?php echo ROOT; ?>favicon.ico">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo ROOT; ?>js/lib/jquery.min.js">\x3C/script>')</script>
        <!--<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>-->
        
<!--        <script src="<?php echo ROOT; ?>js/lib/modernizr.custom.nfl.js"></script>-->
        
        <script>
//            Modernizr.load([
//                
//                {
//                    load: '//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js',
//                    complete: function () {
//                        if ( !window.jQuery ) {
//                            console.log('unable to find jquery, loading modernizr local version')
//                            Modernizr.load('<?php echo ROOT; ?>js/lib/jquery.min.js');
//                        } else {
//                            Modernizr.load('<?php echo ROOT; ?>js/lib/class.js');
//                            Modernizr.load('<?php echo ROOT; ?>js/lib/jquery.ba-bbq.min.js');
//                            Modernizr.load('<?php echo ROOT; ?>js/lib/pageNavigation.js');
//                            Modernizr.load('<?php echo ROOT; ?>js/socialTrackers/socialTracker.js');
//                            Modernizr.load('<?php echo ROOT; ?>js/socialTrackers/googleTracker.js');
//                            Modernizr.load('<?php echo ROOT; ?>js/socialTrackers/twitterTracker.js');
//                            Modernizr.load('<?php echo ROOT; ?>js/socialTrackers/facebookTracker.js');
//                            Modernizr.load('<?php echo ROOT; ?>js/socialTrackers/facebookStatusTracker.js');
//                            Modernizr.load('<?php echo ROOT; ?>js/socialTrackers/instagramTracker.js');
//                            Modernizr.load('<?php echo ROOT; ?>js/socialTrackers/gfbTracker.js');
//                            Modernizr.load('<?php echo ROOT; ?>js/socialTrackers/totalTracker.js');
//                        }
//                    }
//                }
//                
////                {
////                    var fst = new FacebookStatusTracker('#facebook_statuses');
////                    
////                    var gt = new GoogleTracker('#google_count');
////                    var ft = new FacebookTracker('#facebook_count');
////                    var tt = new TwitterTracker('#twitter_count');
////                    var It = new InstagramTracker('#instagram_photo_count');
////                    var gfb = new GfbTracker('#gfb_count');
////                    var total = new TotalTracker('#total');
////                }
////                
////                {load: '<?php echo ROOT; ?>js/lib/class.js'},
//                {load: '<?php echo ROOT; ?>js/lib/jquery.ba-bbq.min.js'},
//                {load: '<?php echo ROOT; ?>js/lib/pageNavigation.js'},
//                {load: '<?php echo ROOT; ?>js/socialTrackers/socialTracker.js'},
//                {load: '<?php echo ROOT; ?>js/socialTrackers/googleTracker.js'},
//                {load: '<?php echo ROOT; ?>js/socialTrackers/twitterTracker.js'},
//                {load: '<?php echo ROOT; ?>js/socialTrackers/facebookTracker.js'},
//                {load: '<?php echo ROOT; ?>js/socialTrackers/facebookStatusTracker.js'},
//                {load: '<?php echo ROOT; ?>js/socialTrackers/instagramTracker.js'},
//                {load: '<?php echo ROOT; ?>js/socialTrackers/gfbTracker.js'},
//                {load: '<?php echo ROOT; ?>js/lib/jquery.cookie.js'},
//                {
//                    load: '<?php echo ROOT; ?>js/socialTrackers/totalTracker.js',
////                    complete: function() {
////                        var fst = new FacebookStatusTracker('#facebook_statuses');
////                    
////                        var gt = new GoogleTracker('#google_count');
////                        var ft = new FacebookTracker('#facebook_count');
////                        var tt = new TwitterTracker('#twitter_count');
////                        var It = new InstagramTracker('#instagram_photo_count');
////                        var gfb = new GfbTracker('#gfb_count');
////                        var total = new TotalTracker('#total');
////                        
////                    }
////                }
//                
//                // Presentational polyfills
////                {
////                    // Logical list of things we would normally need
////                    test : Modernizr.fontface && Modernizr.canvas && Modernizr.cssgradients,
////                    // Modernizr.load loads css and javascript by default
////                    nope : ['presentational-polyfill.js', 'presentational.css']
////                },
////                // Functional polyfills
////                {
////                    // This just has to be truthy
////                    test : Modernizr.websockets && window.JSON,
////                    // socket-io.js and json2.js
////                    nope : 'functional-polyfills.js',
////                    // You can also give arrays of resources to load.
////                    both : [ 'app.js', 'extra.js' ],
////                    complete : function () {
////                    // Run this after everything in this group has downloaded
////                    // and executed, as well everything in all previous groups
////                    myApp.init();
////                    }
////                },
////                
////                
////                
//                // Run your analytics after you've already kicked off all the rest
//                // of your app.
////                'post-analytics.js'
//            ]);
        </script>
        
        <script src="<?php echo ROOT; ?>js/lib/class.js"></script>
<!--        <script src="<?php echo ROOT; ?>js/lib/jquery.easing.js"></script>-->
        
<!--        <script src="<?php echo ROOT; ?>js/lib/jquery.ba-bbq.min.js"></script>-->
<!--        <script src="<?php echo ROOT; ?>js/lib/pageNavigation.js"></script>-->
        <script src="<?php echo ROOT; ?>js/socialTrackers/subscription.js"></script>
        <script src="<?php echo ROOT; ?>js/socialTrackers/socialTracker.js"></script>
        
        
        <?php if(strpos($request, 'buzz')): ?>
        
            <?php if(DEVICE_TYPE != 'phone') : ?>
                <!-- no scroller for mobile -->
                <script src="<?php echo ROOT; ?>js/lib/scroller.js"></script>
            <?php endif; ?>
            
            <script src="<?php echo ROOT; ?>js/lib/intro.js"></script>
            <script src="<?php echo ROOT; ?>js/socialTrackers/instagramTracker.js"></script>
            <script src="<?php echo ROOT; ?>js/socialTrackers/twitterTracker.js"></script>
            <script src="<?php echo ROOT; ?>js/socialTrackers/totalTracker.js"></script>
            <script src="<?php echo ROOT; ?>js/socialTrackers/gfbTracker.js"></script>
        
        <?php elseif(strpos($request, 'instagram')): ?>
        
            <script src="<?php echo ROOT; ?>js/socialTrackers/instagramTracker.js"></script>
            <!--<script src="<?php echo ROOT; ?>js/socialTrackers/twitterTracker.js"></script>-->
        
        <?php elseif(strpos($request, 'tweets')): ?>
        
            <script src="<?php echo ROOT; ?>js/socialTrackers/twitterTracker.js"></script>
        
        <?php elseif(strpos($request, 'movement')): ?>
        
        <?php elseif(strpos($request, 'supporters')): ?>
        
            <script src="<?php echo ROOT; ?>js/lib/pretty.js"></script>
            <script src="<?php echo ROOT; ?>js/lib/date.js"></script>
            <script src="<?php echo ROOT; ?>js/lib/jquery.shorten.js"></script>
            <script src="<?php echo ROOT; ?>js/socialTrackers/googleTracker.js"></script>
            <script src="<?php echo ROOT; ?>js/socialTrackers/facebookTracker.js"></script>
            <script src="<?php echo ROOT; ?>js/socialTrackers/gfbTracker.js"></script>
            <script src="<?php echo ROOT; ?>js/socialTrackers/googleStatusTracker.js"></script>
            <!--<script src="<?php echo ROOT; ?>js/socialTrackers/facebookStatusTracker.js"></script>-->
            
        <?php endif; ?>
        
        <script>
            /*
             *  ATTENTION: One window load function initiates all scripts
             **/
            (function($) {
                $(window).load(function() {
                    
                $('.sharebutton').on('click touchstart touchend', function() {
                    if($(this).hasClass('expanded')) {
                        var self = this;
                        $(this).removeClass('expanded');
                    } else {
                        $(this).addClass('expanded');
                    }
                });
                
                        sub = new Subscription();
                        
                    <?php if(strpos($request, 'buzz')): ?>
                        
                        <?php if(DEVICE_TYPE == 'phone') : ?>
                            var total = new TotalTracker('#total');
                            var It = new InstagramTracker('#instagram_photo_count');
                            var tt = new TwitterTracker('#twitter_count');
                            var gfb = new GfbTracker('#gfb_count');
                        <?php else : ?>
                            
                            var total = new TotalTracker('#total');
                            var It = new InstagramTracker('#instagram_photo_count');
                            var tt = new TwitterTracker('#twitter_count');
                            var gfb = new GfbTracker('#gfb_count');

                            var It = new InstagramTracker('#instagram_photo_count1');
                            var tt = new TwitterTracker('#twitter_count1');
                            var gfb = new GfbTracker('#gfb_count1');

                            var It = new InstagramTracker('#instagram_photo_count2');
                            var tt = new TwitterTracker('#twitter_count2');
                            var gfb = new GfbTracker('#gfb_count2');

                            var It = new InstagramTracker('#instagram_photo_count3');
                            var tt = new TwitterTracker('#twitter_count3');
                            var gfb = new GfbTracker('#gfb_count3');
                            
                            
                            var scroller;
                            $(window).on('trigger_scroller', function(evt, data) {
                                scroller = new Scroller('.train', 1005, '<?php echo DEVICE_TYPE; ?>');
                            });
                            
                        <?php endif; ?>
                        
                    <?php elseif(strpos($request, 'instagram')): ?>
                        
                        var It = new InstagramTracker('#instagram_photo_count');
//                        var tt = new TwitterTracker('#t_count');

                    <?php elseif(strpos($request, 'tweets')): ?>
                        
                        var tt = new TwitterTracker('#twitter_count');

                    <?php elseif(strpos($request, 'movement')): ?>

                    <?php elseif(strpos($request, 'supporters')): ?>
                        
                        var gst = new GoogleStatusTracker('#google_statuses');
//                        var fst = new FacebookStatusTracker('#facebook_statuses');
                        var gt = new GoogleTracker('#google_count');
                        var ft = new FacebookTracker('#facebook_count');
                        var gfb = new GfbTracker('#gfb_count');

                    <?php endif; ?>
                    
                    <?php if($_SESSION['sfsuperbowlintro'] && DEVICE_TYPE != 'phone') : ?>
                        
                        var intro = new Intro();
                        intro.init();
                                         
                    <?php else : ?>
                        $(window).trigger('trigger_scroller');
                    <?php endif; ?>
		            
//                    var nav = new PageNavigation('#wrap');
                    
                });
            })(jQuery);
        </script>
        
        <link href="<?php echo ROOT; ?>css/reset.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo ROOT; ?>css/font.css" type="text/css" rel="stylesheet" />
        
        <?php if(DEVICE_TYPE == 'computer'): ?>
            <link href="<?php echo ROOT; ?>css/style.css" type="text/css" rel="stylesheet" />
        <?php elseif(DEVICE_TYPE == 'tablet'): ?>
            <link href="<?php echo ROOT; ?>css/style_tablet.css" type="text/css" rel="stylesheet" />
        <?php elseif(DEVICE_TYPE == 'phone'): ?>
            <link href="<?php echo ROOT; ?>css/style_mobile.css" type="text/css" rel="stylesheet" />
        <?php endif; ?>
        
        <!-- INTRO ANIMATION -->
        
    
    
    <!-- GOOGLE ANALYTICS TRACKING -->
    <script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-35558308-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
    <!-- GOOGLE ANALYTICS TRACKING -->    
        
    </head>
    
    
    
    
    
    <body data-device="<?php echo DEVICE_TYPE; ?>">
    
    
    <!-- FACEBOOK JS -->
    <script src='http://connect.facebook.net/en_US/all.js'></script>
    
    <div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=369308779814605";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
    <!-- END FACEBOOK JS -->
    
    
    
    
       
        <div id="background"></div>
        <div id="wrap">
        
        <div id="container">
            <div id="scaffold"></div>
            <div id="header">
                <div id="boardcontainer">
                    
	                <div class="left">
	                    <h2 class="headlineLargeGray"><a href="../buzz/">BRING THE BOWL TO THE BAY</a></h2>
	                </div>
	                
	                <div class="right">
                            
	                	<div class="rightWrap">
                            <div class="tabs">
                        <a href="<?php echo ROOT; ?>" class="ajaxify <?php echo (strpos($request, 'buzz')) ? 'active' : ''; ?>"><?php echo (strpos($request, 'buzz')) ? 'SCOREBOARD' : 'SCOREBOARD'; ?></a><span>l</span><a href="<?php echo ROOT; ?>movement" class="ajaxify <?php echo (strpos($request, 'movement')) ? 'active' : ''; ?>" >JOIN THE MOVEMENT</a>
		                    </div>
		                    
		                    <div class="sharebutton">

			                    <ul>
                                                <li><a class="facebook link" onclick='postToFeed(); return false;'></a><p id='msg'></p></li>
                                                <li><a class="twittertweet link" href="https://twitter.com/intent/tweet?button_hashtag=SFSUPERBOWL&text=Let&rsquo;s&nbsp;bring&nbsp;the&nbsp;Bowl&nbsp;to&nbsp;the&nbsp;Bay!&nbsp;Show&nbsp;your&nbsp;support.#sfsuperbowl"></a></li>
                                                <li><a class="google link" href="https://plus.google.com/share?url=http://www.sfsuperbowl.com" target="_blank"></a></li>
                                                <!-- <li><link rel="image_src" href="http://www.labnol.org/screenshot.png" /></li> -->
                                            </ul>

		                    </div>
		                    
                                    <div class="hoverbutton"></div>

	                	</div><!-- /rightwrap -->
	                	
	                </div><!-- /class right -->
	                
	            </div><!-- /boardcontainer-->
                    
            </div><!-- /header -->
            
            <?php if(DEVICE_TYPE != 'phone') : ?>
                <?php if($_SESSION['sfsuperbowlintro']) : ?>

                    <div id="intro">

                        <div id="introWrap">
                            <img class="introItem hidden" src="<?php echo ROOT; ?>images/intro/intro_logo_big.png" id="introLogoBig" />
                            <img class="introItem hidden" src="<?php echo ROOT; ?>images/intro/frame1.png" id="introLogo" />
                            <img class="introItem hidden" src="<?php echo ROOT; ?>images/intro/frame2.png" id="introHeadline" />
                            <img class="introItem hidden" src="<?php echo ROOT; ?>images/intro/frame3.png" id="introCopy" />
                            <img class="introItem hidden" src="<?php echo ROOT; ?>images/intro/frame4.png" id="introCopy2" />
                        </div>
                    </div>

                    <?php $_SESSION['sfsuperbowlintro'] = false; ?>

                <?php endif; ?>
            
            
                
            <?php endif; ?>
            
                
            
        
            
            
            
            
            
            
            
