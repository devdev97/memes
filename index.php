<!DOCTYPE html>
<head>
    <title>Meme generator app</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content=""/>
    <meta name="author" content="http://webthemez.com"/>
    <!-- css -->
    <style></style>

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="colorpicker/spectrum.js"></script>
    <script type="text/javascript" src="jquery.memegenerator.min.js"></script>
<!--     		<script type="text/javascript" src="jquery.memegenerator.pl.js"></script>-->
    <link rel="stylesheet" type="text/css" href="jquery.memegenerator.min.css">
    <link rel="stylesheet" type="text/css" href="colorpicker/spectrum.css">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.css">

    <link rel="stylesheet" href="css/gh-buttons.css" type="text/css" media="screen" charset="utf-8">
    <link rel="stylesheet" href="css/style2.css" type="text/css" media="screen" charset="utf-8">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen" charset="utf-8">


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection"/>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>


    <script type="text/javascript" src="lib/jquery-easing-1.3.0.js"></script>
    <script type="text/javascript" src="lib/modernizr.mediaqueries.transforms3d.js"></script>
    <script type="text/javascript" src="lib/responsive-hub.js"></script>
    <script type="text/javascript" src="src/jquery.silver_track.js" charset="utf-8"></script>
    <script type="text/javascript" src="src/plugins/jquery.silver_track.navigator.js" charset="utf-8"></script>
    <script type="text/javascript" src="src/plugins/jquery.silver_track.bullet_navigator.js" charset="utf-8"></script>
    <script type="text/javascript" src="src/plugins/jquery.silver_track.remote_content.js" charset="utf-8"></script>
    <script type="text/javascript" src="src/plugins/jquery.silver_track.responsive_hub_connector.js"
            charset="utf-8"></script>
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
        $(function () {
            $.responsiveHub({
                layouts: {
                    480: "phone",
                    481: "small-tablet",
                    731: "tablet",
                    981: "web"
                },
                defaultLayout: "web"
            });
        });
    </script>


    <script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen"/>
    <link rel="stylesheet" href="style.css"/>
    <script type="text/javascript">
        $(document).ready(function () {
            /*
            *   Examples - images
            */

            $("a#example1").fancybox();

            $("a#example2").fancybox({
                'overlayShow': false,
                'transitionIn': 'elastic',
                'transitionOut': 'elastic'
            });

            $("a#example3").fancybox({
                'transitionIn': 'none',
                'transitionOut': 'none'
            });

            $("a#example4").fancybox({
                'opacity': true,
                'overlayShow': false,
                'transitionIn': 'elastic',
                'transitionOut': 'none'
            });

            $("a#example5").fancybox();

            $("a#example6").fancybox({
                'titlePosition': 'outside',
                'overlayColor': '#000',
                'overlayOpacity': 0.9
            });

            $("a#example7").fancybox({
                'titlePosition': 'inside'
            });

            $("a#example8").fancybox({
                'titlePosition': 'over'
            });

            $("a[rel=example_group]").fancybox({
                'transitionIn': 'none',
                'transitionOut': 'none',
                'titlePosition': 'over',
                'titleFormat': function (title, currentArray, currentIndex, currentOpts) {
                    return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
                }
            });

            /*
            *   Examples - various
            */

            $("#various1").fancybox({
                'titlePosition': 'inside',
                'transitionIn': 'none',
                'transitionOut': 'none'
            });

            $("#various2").fancybox();

            $("#various3").fancybox({
                'width': '75%',
                'height': '75%',
                'autoScale': false,
                'transitionIn': 'none',
                'transitionOut': 'none',
                'type': 'iframe'
            });

            $("#various4").fancybox({
                'padding': 0,
                'autoScale': false,
                'transitionIn': 'none',
                'transitionOut': 'none'
            });
        });
    </script>


    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-102315848-4', 'auto');
        ga('send', 'pageview');

    </script>
    <script type="text/javascript">

    </script>

    <style>
        h2 {
            display: block;
            text-align: center;
        }

        .example {
            margin: 0 0 25px 0;
        }

        .bootstrap {
            width: 600px;
            margin-right: auto;
            margin-left: auto;
        }

        .save button {
            display: block;
            width: 100%;
            margin-bottom: 15px;
            font-size: 24px;
        }

        #preview {
            min-height: 200px;
            background-color: #EFEFEF;
            font-family: monospace;
            overflow-y: auto;
        }

        #preview img {
            max-width: 100%;
        }

        body {

            font-family: arial;

        }

    </style>
</head>

<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "http://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<body>

<div id="wrapper" class="home-page">

    <section id="banner">
        <h1 style="color:white; text-align: center"><b>MEME</b></h1>
        <h2 style="color:white;">"It's not a word, it's a lifestyle."</h2>
        <p>-urban dictionary</p>
    </section>

    <header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand " href="index.php"><img class="logo-img" src="images/322.png"
                                                                   alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a class="waves-effect waves-dark" href="index.php">HOME</a></li>
                        <li><a class="waves-effect waves-dark" href="#">TOP MEMES</a></li>
                        <li><a class="waves-effect waves-dark" href="#">ABOUT US</a></li>
                        <li><a class="waves-effect waves-dark" href="#">CONTESTS</a></li>
                        <li><a class="waves-effect waves-dark" href="#">HISTORY</a></li>
                        <li><a class="waves-effect waves-dark" href="#">BLOG</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <section class="content container">
        <div class="row second-content">
            <h1 class="bottom-heading">H1 GOES HERE</h1>
            <h3 class="orange-heading">Step one: Choose Your Image</h3>

            <div class="row1">
                <div class="col-md-4 " id="creating">

                    <form class="sending-form" action="index.php" method="post" enctype="multipart/form-data">
                        <div class="col-md-12"><br>
                            <h2 class="uploadH2"><b>Upload Image</b></h2><br>
                        </div>

                        <div class="col-md-4"></div>
                        <input type="file" class="send-btn" name="pic"/>
                        <div class="col-md-4"></div>
                        <button name="submit" class="send-btn">Upload</button>
                    </form>

                    <?php

                    if (isset($_POST['submit'])) {

                        $pic = $_FILES['pic']['name'];

                        if (!empty($pic)) {

                            $pic = "3.jpg";
                            $pic_loc = $_FILES['pic']['tmp_name'];
                            $folder = "uploads/";
                            if (move_uploaded_file($pic_loc, $folder . $pic)) {

                                ?>
                                <center>Uploaded</center><?php
                            } else {
                                ?>
                                <center>Error</center><?php
                            }
                        } else {

                            echo "<br><center>All Fields Are Required.<center><br>";

                        }

                        $img = "yes";

                    }

                    ?>
                    <center>

                    </center>
                </div>

                <div class="track example-5 col-md-8">
                    <div class="inner  first-slider">
                        <div class="view-port">
                            <div id="example-5" class="slider-container">

                                <?php

                                $i = 1;

                                $files = glob('example/*'); // get all file names
                                foreach ($files as $file) {// iterate files

                                    $name = "name$i";

                                    ?>

                                    <div class="item">

                                        <a id="example1" href="<?php echo "$file"; ?>"><img alt="example1"
                                                                                            src="<?php echo "$file"; ?>"
                                                                                            width="220"
                                                                                            height="124"/></a>
                                        <center>
                                            <form action="index.php" method="post"><input type="submit"
                                                                                          name="<?php echo $name; ?>"
                                                                                          value="Take It"></form>
                                        </center>

                                        <?php if (isset($_POST["$name"])) {


                                            if (file_exists('uploads/3.jpg')) {

                                                chmod('uploads/3.jpg', 0755); //Change the file permissions if allowed
                                                unlink('uploads/3.jpg'); //remove the file

                                                copy("$file", 'uploads/3.jpg');

                                            } else {

                                                copy("$file", 'uploads/3.jpg');

                                            }

                                            $img = "yes";

                                        } ?>

                                    </div>

                                    <?php

                                    $i++;

                                }

                                ?>

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

            <h3 class="orange-heading">Step two: Make Your Caption</h3>
            <div class="row appBlock">
                <div class="col-md-12">
                    <div class="example save">
                        <?php if (!(isset($img))) { ?>
                            <img src="noimage.jpg" id="example-save"/>
                        <?php } else { ?>
                            <img src="uploads/3.jpg?<?= time(); ?>" id="example-save"/>
                        <?php } ?>

                        <div id="toolbar"></div>
                        <center>

                        </center>
                        <div class="row">

                            <div class="download">
                                <center>
                                    <button class="btn btn-danger" id="download">Download</button>
                                </center>
                            </div>
                            <center>
                            </center>
                        </div>
                    </div>

                </div>


            </div>
        </div>

        <script>
            $(".example.default img").memeGenerator({});

            $(".example.bootstrap img").memeGenerator({
                useBootstrap: true
            });

            $(".example.horizontal img").memeGenerator({
                useBootstrap: true,
                layout: "horizontal",
                previewMode: "css",
                defaultTextStyle: {
                    font: "'Comic Sans', Arial",
                    lineHeight: 2
                },
                captions: [
                    "PREDEFINED text on top"
                ]
            });


            // Example with saving
            $("#example-save").memeGenerator({
                useBootstrap: true
            });

            $("#save").click(function (e) {
                e.preventDefault();

                var imageDataUrl = $("#example-save").memeGenerator("save");

                $.ajax({
                    url: "/save-img",
                    type: "POST",
                    data: {image: imageDataUrl},
                    dataType: "json",
                    success: function (response) {
                        $("#preview").html(
                            $("<img>").attr("src", response.filename)
                        );
                    },
                    error: function () {
                        alert('This demo uses communication with the server which is not implemented here.');
                    }
                });
            });

            $("#download").click(function (e) {
                e.preventDefault();

                $("#example-save").memeGenerator("download");
            });

            $("#serialize").click(function (e) {
                $("#preview").html($("#example-save").memeGenerator("serialize"));
            });

            //
        </script>
    </section>

    <div class="third-content third-content-container">
        <div class="container ">
            <h2 class="bottom-heading">ENTER YOUR MEME INTO OUR CONTEST!</h2>
            <div class="row contest-parent">
                <div class="col-md-3 col-sm-12">
                    <img class="baby-img" src="meme.jpg" alt="Meme Generator App"/>
                </div>


                <div class="col-md-9 contest-text">
                    <div class="texts row">
                        <div class="col-md-6">
                            <p style="margin-top:30px">
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p style="margin-top:30px">
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                            </p>
                        </div>
                    </div>
                    <button class="btn btn-danger enter-contest">ENTER CONTEST</button>
                </div>
            </div>
        </div>
    </div>

    <div class="content-4">
        <div class="container">
            <div class="row container-4">
                <h2 class="bottom-heading" style="margin-bottom: 30px; margin-top:0">H2 GOES HERE</h2>
            </div>
            <div class="row">

                <center style="font-size:14px">

                    With <b>Meme generator app</b> you can create the funniest memes and share them with your friends
                    via
                    Facebook,<br>
                    Twitter, Instagram, WhatsApp, Messenger, Google+, E-mail, Dropbox, Drive, Snapchat etc.<br><br>


                    <h3>What is the Meme Generator App?</h3><br>

                    It's a free online <i>Meme generator app</i> that allows you to add custom resizable text to images.
                    you
                    can
                    make
                    images instantly. Most commonly, people use the app tp make meme but you can create any graphics
                    like
                    facebook
                    cover
                    photo,<br> Profile picturs or even business cards. you can also upload your own images as templates.
                    <br><br>


                    <br>
                    A <a href="https://en.wikipedia.org/wiki/Meme">meme</a> is an idea, behavior, or style that spreads
                    from
                    person
                    to
                    person within a culture.[1] A meme acts as a unit for carrying cultural ideas, symbols,<br>
                    or practices that can be transmitted from one mind to another through writing, speech, gestures,
                    rituals, or
                    other
                    imitable phenomena with a mimicked theme.<br>
                    Supporters of the concept regard memes as cultural analogues to genes in that they self-replicate,
                    mutate, and
                    respond to selective pressures.<br><br>

                    <h4>Thanks for using <u>Meme maker app</u></h4>
                </center>
            </div>
        </div>
    </div>

    <div class="content-5">
        <div class="container">
            <div class="row">
                <h3 class="bottom-heading">H3 GOES HERE FOR MORE INFORMATION</h3>
            </div>
            <div class="row container-5">
                <center>
                    <div class="col-md-3">
                        <div class="videoTutorial">
                            <h3 class="videoH3" style="margin-top: 0">Meme maker app</h3>
                            <p class="videoH3">Take a look at how the Meme generator app works :</p><br>

                            <iframe width="100%" id="tutorialVideo" height="250"
                                    src="https://www.youtube.com/embed/mYDqgWYsxRc" frameborder="0"
                                    allowfullscreen></iframe>
                            <p id="scrollTop"><a href="#creating">Click here to start creating memes</a></p>
                        </div>
                    </div>
                </center>
                <div class="col-md-4 col-md-offset-1 content-5-list">
                    <b>Main features:</b>
                    <br><br>

                    <ul>

                        <li>✓ Choose templates from Multiple meme categories.</li>
                        <li>✓ 1000+ high quality memes with lots of example captions to choose from.</li>
                        <li>✓ Quickly save memes and Share @ your favorite social media.</li>
                        <li>✓ Custom memes supported, so you can use any picture from your gallery!</li>
                        <li>✓ You can also Add stickers to memes - a huge collection of stickers is available!</li>
                        <li>✓ Adjust text font family, color & size.</li>
                        <li>✓ Create complex memes with unlimited captions</li>
                        <li>✓ Move captions anywhere you want and add your own</li>
                        <li>✓ Smart Image Cropping tool available.</li>
                        <li>✓ Quick scroll and optional grid view for individual categories.</li>
                        <li>✓ Add borders to any image you want.</li>
                        <li>✓ SEARCH and find you favorite meme in seconds.</li>
                        <li>✓ Create your own list of favorite memes!</li>
                        <li>✓ Regularly updated memes to work with!</li>
                        <li>✓ Watermark free images. Claim what you created :)</li>
                        <li>✓ The app DOES NOT automatically upload any meme you create – your privacy is our top
                            priority!
                        </li>
                        <li>✓ Make funny pictures, cover photos, profile pictures quickly for your social media profile.
                        </li>

                    </ul>
                </div>

                <div class="col-md-3 col-md-offset-1 content-5-links">
                    <b>List name 1</b>
                    <ul>
                        <li><a href="#">Results Driven Marketing</a></li>
                        <li><a href="#">Advisory Concept Evolvers</a></li>
                        <li><a href="#">SEO Link Express</a></li>
                        <li><a href="#">Cibik and Cataldo</a></li>
                        <li><a href="#">Paul & Paul</a></li>
                        <li><a href="#">Alvin F. de Levie</a></li>
                        <li><a href="#">Jordan Goldberg</a></li>
                        <li><a href="#">News World</a></li>
                    </ul>
                    <br>

                    <b>Other links</b>
                    <ul>
                        <li><a href="#">Know Your Meme</a></li>
                        <li><a href="#">EBaums World</a></li>
                        <li><a href="#">Cracked.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid footer-1 footer-1-row">
        <h1>Follow us on Social Media and See Your Meme: </h1>
        <ul class="footer-1-list">
            <li><a href="#"><img src="images/facebook-logo.png" alt=""></a></li>
            <li><a href="#"><img src="images/twitter-logo.png" alt=""></a></li>
            <li><a href="#"><img src="images/linkedin-logo1.png" alt=""></a></li>
            <li><a href="#"><img src="images/pinterest-logo.png" alt=""></a></li>
            <li><a href="#"><img src="images/instagram-logo.png" alt=""></a></li>
        </ul>
    </div>

    <footer>
        <p>Legal | Website Terms of Use | Licence Agencement | Privacy Policy</p>
        <br>
        <p>&copy;2018 COMPANY NAME HERE. All rights reserved.</p>
    </footer>
</div>
<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up active"></i></a>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script>

</body>
</html>
