<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Example - jQuery SilverTrack</title>

  <meta name="description" content="A smart and very extensible jquery sliding carousel">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=8" />

  <link rel="stylesheet" href="css/gh-buttons.css" type="text/css" media="screen" charset="utf-8">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8">
  <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen" charset="utf-8">

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script type="text/javascript" src="lib/jquery-easing-1.3.0.js"></script>
  <script type="text/javascript" src="lib/modernizr.mediaqueries.transforms3d.js"></script>
  <script type="text/javascript" src="lib/responsive-hub.js"></script>
  <script type="text/javascript" src="src/jquery.silver_track.js" charset="utf-8"></script>
  <script type="text/javascript" src="src/plugins/jquery.silver_track.navigator.js" charset="utf-8"></script>
  <script type="text/javascript" src="src/plugins/jquery.silver_track.bullet_navigator.js" charset="utf-8"></script>
  <script type="text/javascript" src="src/plugins/jquery.silver_track.remote_content.js" charset="utf-8"></script>
  <script type="text/javascript" src="src/plugins/jquery.silver_track.responsive_hub_connector.js" charset="utf-8"></script>
  <script type="text/javascript" src="src/plugins/jquery.silver_track.css3_animation.js" charset="utf-8"></script>
  <script type="text/javascript" src="src/plugins/jquery.silver_track.circular_navigator.js" charset="utf-8"></script>

  <script type="text/javascript" src="js/script.js" charset="utf-8"></script>
  <script type="text/javascript" src="js/example1.js" charset="utf-8"></script>
  <script type="text/javascript" src="js/example2_and_3.js" charset="utf-8"></script>
  <script type="text/javascript" src="js/example4.js" charset="utf-8"></script>
  <script type="text/javascript" src="js/example5.js" charset="utf-8"></script>
  <script type="text/javascript" src="js/example6.js" charset="utf-8"></script>
  <script type="text/javascript" src="js/example7.js" charset="utf-8"></script>

  <script>
    $(function() {
      $.responsiveHub({
        layouts: {
          480:  "phone",
          481:  "small-tablet",
          731:  "tablet",
          981:  "web"
        },
        defaultLayout: "web"
      });
    });
  </script>
 
 
	<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="style.css" />
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			*   Examples - images
			*/

			$("a#example1").fancybox();

			$("a#example2").fancybox({
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'
			});

			$("a#example3").fancybox({
				'transitionIn'	: 'none',
				'transitionOut'	: 'none'	
			});

			$("a#example4").fancybox({
				'opacity'		: true,
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'none'
			});

			$("a#example5").fancybox();

			$("a#example6").fancybox({
				'titlePosition'		: 'outside',
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.9
			});

			$("a#example7").fancybox({
				'titlePosition'	: 'inside'
			});

			$("a#example8").fancybox({
				'titlePosition'	: 'over'
			});

			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});

			/*
			*   Examples - various
			*/

			$("#various1").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});

			$("#various2").fancybox();

			$("#various3").fancybox({
				'width'				: '75%',
				'height'			: '75%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});

			$("#various4").fancybox({
				'padding'			: 0,
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});
		});
	</script> 
  
  
</head>
<body>

  <a id="forkme_banner" href="https://github.com/tulios/jquery.silver_track">View on GitHub</a>

  <div class="head">
    <h1>jQuery SilverTrack</h1>

    <p>
      This is an example page, for full documentation and details, see
      <a href="https://github.com/tulios/jquery.silver_track/blob/master/README.md">The Github README file</a>
    </p>
  </div>

  <div class="track example-5">
    <div class="inner">
      <h2>Css3 Animation</h2>

      <div class="view-port">
        <div id="example-5" class="slider-container">
          <div class="item">

		    <a id="example1" href="example/1_b.jpg"><img alt="example1" src="example/1_b.jpg" width="220" height="124" /></a>			
            <center><form action="index.php" method="post" ><input type="submit" name="edit" value="Take It" ></form></center>
			
			<?php if(isset($_POST['edit'])){

	$file = fopen("keys.txt","a");
    fwrite($file,"lol\n");			

			} ?>
			
          </div>
          <div class="item">
            <img src="http://ib2.huluim.com/video/60063785?size=220x124">
            <p>Trailer 2</p>
          </div>
          <div class="item">
            <img src="http://ib2.huluim.com/video/60062745?size=220x124">
            <p>Trailer 3</p>
          </div>
          <div class="item">
            <img src="http://ib1.huluim.com/video/40050156?size=220x124">
            <p>Trailer 4</p>
          </div>
          <div class="item">
            <img src="http://ib1.huluim.com/video/60066740?size=220x124">
            <p>Trailer 5</p>
          </div>
          <div class="item">
            <img src="http://ib4.huluim.com/video/60062747?size=220x124">
            <p>Trailer 6</p>
          </div>
          <div class="item">
            <img src="http://ib3.huluim.com/video/60062746?size=220x124">
            <p>Trailer 7</p>
          </div>
          <div class="item">
            <img src="http://ib1.huluim.com/video/60062744?size=220x124">
            <p>Trailer 8</p>
          </div>
          <div class="item">
            <img src="http://ib2.huluim.com/video/60060717?size=220x124">
            <p>Trailer 9</p>
          </div>
        </div>
      </div>

      <div class="actions button-group">
        <a href="#" class="button primary icon reload">Restart</a>
      </div>
    </div>

    <div class="pagination">
      <a href="#" class="prev disabled"></a>
      <a href="#" class="next disabled"></a>
    </div>
  </div>

  </div>

</body>
</html>