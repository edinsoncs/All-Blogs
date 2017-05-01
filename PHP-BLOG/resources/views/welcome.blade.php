<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <title>BLOG Edinsoncs</title>
    <!--Bootstrape Files-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!--Bootstrape Files End-->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/animations.css" rel="stylesheet" type="text/css" />
    <!--Font Files-->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700italic,900italic,900,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,400italic,300italic,300,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700italic,700' rel='stylesheet' type='text/css'>
    <!--Font Files End-->
    <!--Instagram Slider End-->
    <link rel="stylesheet" href="css/jquery.simplyscroll.css" media="all" type="text/css">
    <link rel="stylesheet" href="css/lightbox.css" media="all" type="text/css">
    <link rel="stylesheet" href="css/instaslide.css" media="all" type="text/css">
    <!--Instagram Slider End-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
</head>

<body>
    <!--Preloader area starts -->
    <div class="loader" id="loader"> &nbsp;</div>
    <!--Preloader area ends -->
    <div id="wraper"> <a href="#" class="smallimg" id="smallimg">Back</a>
        <!--Top Headerbar area starts -->
        <div id="top-bar">
            <h1 class="logo">
                <a href="index-2.html">Kreative</a></h1> <a class="mobilemenu">View Menu</a> <a class="bt-menu-trigger" id="menu" onclick="landingpagecube();" href="#"><span>Menu</span></a> </div>
        <nav id="menumobile">
            <ul>
                <li><a href="#" onclick="thumbnailscube();">LIFESTYLE</a> </li>
                <li><a href="#" onclick="blogcube()">TRAVEL</a> </li>
                <li><a href="#" onclick="teamcube()">MUSIC</a> </li>
                <li><a href="#" onclick="aboutcube();">ABOUT</a> </li>
                <li><a href="#" onclick="contactcube();">CONTACT</a> </li>
            </ul>
            <div class="footer">
                <ul class="socialpost">
                    <li><a class="" href="#"><i class="fa fa-google"></i></a> </li>
                    <li><a class="" href="#"><i class="fa fa-twitter"></i></a> </li>
                    <li><a class="" href="#"><i class="fa fa-behance"></i></a> </li>
                </ul>
                <div class="touch">© 2015 All Rights Reserved.</div>
            </div>
        </nav>
        <!--Top Headerbar area ends -->
        <!--Landing Page Us page area ends -->
        <div id="landingpage" class="pt-page">
            <div class="overlay">
                <nav id="menu">
                    <ul>
                        <li><a href="#" onclick="thumbnailscube();">LIFESTYLE</a> </li>
                        <li><a href="#" onclick="blogcube()">TRAVEL</a> </li>
                        <li><a href="#" onclick="teamcube()">MUSIC</a> </li>
                        <li><a href="#" onclick="aboutcube();">ABOUT</a> </li>
                        <li><a href="#" onclick="contactcube();">CONTACT</a> </li>
                    </ul>
                </nav>
            </div>
            <div class="footer-box">
                <div class="col-xs-12 col-sm-6">
                    <ul class="socialpost">
                        <li><a class="" href="#"><i class="fa fa-google"></i></a> </li>
                        <li><a class="" href="#"><i class="fa fa-twitter"></i></a> </li>
                        <li><a class="" href="#"><i class="fa fa-behance"></i></a> </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="touch">All Rights Reserved. Designed and Developed by <a href="#" class="link"><b>Themeify.com</b></a> </div>
                </div>
            </div>
        </div>
        <!--Landing page area ends -->
        <!--Main Home page area starts -->
        <div id="thumbnails" class="pt-page  pt-page-current">
            <div class="scalediv">
              @if(!empty($data))
                <div class="row no-gutter" data-id="one">
                   @foreach ($data as $posts)
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <a class="noLink" href="#{{$posts->id}}">
                                <figure class="callpost" data-num="1" style="background-image:url('{{$posts->img}}');" data-property="border-width" data-from="0" data-to="35px">
                                    <div class="content">
                                        <div class="content-wraper">
                                            <h2>{{ $posts->title }}</h2>
                                            
                                            <div class="excerpt"> {{$posts->content}}</div>
                                            <div class="postinfo">{{$posts->category}}<span>{{$posts->created_at}}</span> </div>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                        </div>
                   @endforeach
                   
                    <div class="clear"></div>
                </div>
             
              @else
                <div class="showErr">
                    <h2 cla>No hay ningun post
                    </h2>
                </div>

             @endif
            </div>
            <!-- Posts page area starts -->
            <div class="posts"> <a class="back">Back</a>
                <aside> <a class="previous">Previous</a>
                    <div class="postimagearea">
                        @foreach ($data as $posts)

                        <div class="postimage" style="background-image: URL(images/postimage1.jpg);">
                            <h1>hola</h1>
                            <br>
                            <h1><?php echo $_GET[] ?></h1>
                        </div>

                        @endforeach
                    </div>
                </aside>
                <section> <a class="next">Next</a>
                    <div class="contentRight">
                        <div class="postcontentarea">
                            <div class="post">
                                <div class="content-r-inner">
                                    <div class="blogheader">
                                        <h2 class="blogtitle">Preparing new dinner menu</h2>
                                        <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April 30, 2014 <span class="infodivider">/</span> UI, UX, Graphics</div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="blogdata"> <span class="firstcharacter">M</span>eh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br>
                                            <div class="blog-short-info"> The wedding day was something
                                                <br> to behold. It was the most
                                                <br> beautiful experience that I
                                                <br> have ever encountered and the guest
                                                <br> were all there and enjoying the
                                                <br> moment with me. I am so
                                                <br> excited to start my new life with my
                                                <br> beautiful husband. </div>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                        <div class="comment featured-cmt">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span> </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <br>
                                        <h4>Comments (2)</h4>
                                        <br>
                                        <div class="comment main-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment-last">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="comment-form">
                                            <br>
                                            <div class="col-xs-12">
                                                <h4>Leave a Reply</h4>
                                                <br>
                                                <br> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>NAME*</label><span><br><input type="text"></span> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>EMAIL*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>WEBSITE*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <label>YOUR COMMENT*</label>
                                                <br>
                                                <textarea rows="4" cols="8" name="comments"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <input type="submit" value="POST COMMENT" class="submit-button"> </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="content-r-inner">
                                    <div class="blogheader">
                                        <h2 class="blogtitle">At the beach in winter</h2>
                                        <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April 30, 2014 <span class="infodivider">/</span> UI, UX, Graphics</div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="blogdata"> <span class="firstcharacter">M</span>eh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br>
                                            <div class="blog-short-info"> The wedding day was something
                                                <br> to behold. It was the most
                                                <br> beautiful experience that I
                                                <br> have ever encountered and the guest
                                                <br> were all there and enjoying the
                                                <br> moment with me. I am so
                                                <br> excited to start my new life with my
                                                <br> beautiful husband. </div>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                        <div class="comment featured-cmt">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span> </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <br>
                                        <h4>Comments (2)</h4>
                                        <br>
                                        <div class="comment main-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment-last">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="comment-form">
                                            <br>
                                            <div class="col-xs-12">
                                                <h4>Leave a Reply</h4>
                                                <br>
                                                <br> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>NAME*</label><span><br><input type="text"></span> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>EMAIL*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>WEBSITE*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <label>YOUR COMMENT*</label>
                                                <br>
                                                <textarea rows="4" cols="8" name="comments"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <input type="submit" value="POST COMMENT" class="submit-button"> </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="content-r-inner">
                                    <div class="blogheader">
                                        <h2 class="blogtitle">The Edge of Nothing Lake</h2>
                                        <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April 30, 2014 <span class="infodivider">/</span> UI, UX, Graphics</div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="blogdata"> <span class="firstcharacter">M</span>eh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br>
                                            <div class="blog-short-info"> The wedding day was something
                                                <br> to behold. It was the most
                                                <br> beautiful experience that I
                                                <br> have ever encountered and the guest
                                                <br> were all there and enjoying the
                                                <br> moment with me. I am so
                                                <br> excited to start my new life with my
                                                <br> beautiful husband. </div>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                        <div class="comment featured-cmt">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span> </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <br>
                                        <h4>Comments (2)</h4>
                                        <br>
                                        <div class="comment main-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment-last">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="comment-form">
                                            <br>
                                            <div class="col-xs-12">
                                                <h4>Leave a Reply</h4>
                                                <br>
                                                <br> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>NAME*</label><span><br><input type="text"></span> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>EMAIL*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>WEBSITE*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <label>YOUR COMMENT*</label>
                                                <br>
                                                <textarea rows="4" cols="8" name="comments"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <input type="submit" value="POST COMMENT" class="submit-button"> </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="content-r-inner">
                                    <div class="blogheader">
                                        <h2 class="blogtitle">The waves are high & beautiful</h2>
                                        <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April 30, 2014 <span class="infodivider">/</span> UI, UX, Graphics</div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="blogdata"> <span class="firstcharacter">M</span>eh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br>
                                            <div class="blog-short-info"> The wedding day was something
                                                <br> to behold. It was the most
                                                <br> beautiful experience that I
                                                <br> have ever encountered and the guest
                                                <br> were all there and enjoying the
                                                <br> moment with me. I am so
                                                <br> excited to start my new life with my
                                                <br> beautiful husband. </div>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                        <div class="comment featured-cmt">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span> </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <br>
                                        <h4>Comments (2)</h4>
                                        <br>
                                        <div class="comment main-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment-last">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="comment-form">
                                            <br>
                                            <div class="col-xs-12">
                                                <h4>Leave a Reply</h4>
                                                <br>
                                                <br> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>NAME*</label><span><br><input type="text"></span> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>EMAIL*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>WEBSITE*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <label>YOUR COMMENT*</label>
                                                <br>
                                                <textarea rows="4" cols="8" name="comments"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <input type="submit" value="POST COMMENT" class="submit-button"> </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="content-r-inner">
                                    <div class="blogheader">
                                        <h2 class="blogtitle">Oh girl’s now come on!</h2>
                                        <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April 30, 2014 <span class="infodivider">/</span> UI, UX, Graphics</div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="blogdata"> <span class="firstcharacter">M</span>eh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br>
                                            <div class="blog-short-info"> The wedding day was something
                                                <br> to behold. It was the most
                                                <br> beautiful experience that I
                                                <br> have ever encountered and the guest
                                                <br> were all there and enjoying the
                                                <br> moment with me. I am so
                                                <br> excited to start my new life with my
                                                <br> beautiful husband. </div>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                        <div class="comment featured-cmt">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span> </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <br>
                                        <h4>Comments (2)</h4>
                                        <br>
                                        <div class="comment main-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment-last">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="comment-form">
                                            <br>
                                            <div class="col-xs-12">
                                                <h4>Leave a Reply</h4>
                                                <br>
                                                <br> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>NAME*</label><span><br><input type="text"></span> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>EMAIL*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>WEBSITE*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <label>YOUR COMMENT*</label>
                                                <br>
                                                <textarea rows="4" cols="8" name="comments"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <input type="submit" value="POST COMMENT" class="submit-button"> </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="content-r-inner">
                                    <div class="blogheader">
                                        <h2 class="blogtitle">GQ at the new yacht club</h2>
                                        <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April 30, 2014 <span class="infodivider">/</span> UI, UX, Graphics</div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="blogdata"> <span class="firstcharacter">M</span>eh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br>
                                            <div class="blog-short-info"> The wedding day was something
                                                <br> to behold. It was the most
                                                <br> beautiful experience that I
                                                <br> have ever encountered and the guest
                                                <br> were all there and enjoying the
                                                <br> moment with me. I am so
                                                <br> excited to start my new life with my
                                                <br> beautiful husband. </div>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                        <div class="comment featured-cmt">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span> </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <br>
                                        <h4>Comments (2)</h4>
                                        <br>
                                        <div class="comment main-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment-last">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="comment-form">
                                            <br>
                                            <div class="col-xs-12">
                                                <h4>Leave a Reply</h4>
                                                <br>
                                                <br> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>NAME*</label><span><br><input type="text"></span> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>EMAIL*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>WEBSITE*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <label>YOUR COMMENT*</label>
                                                <br>
                                                <textarea rows="4" cols="8" name="comments"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <input type="submit" value="POST COMMENT" class="submit-button"> </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="content-r-inner">
                                    <div class="blogheader">
                                        <h2 class="blogtitle">Coffee in the morning is the absolute best</h2>
                                        <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April 30, 2014 <span class="infodivider">/</span> UI, UX, Graphics</div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="blogdata"> <span class="firstcharacter">M</span>eh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br>
                                            <div class="blog-short-info"> The wedding day was something
                                                <br> to behold. It was the most
                                                <br> beautiful experience that I
                                                <br> have ever encountered and the guest
                                                <br> were all there and enjoying the
                                                <br> moment with me. I am so
                                                <br> excited to start my new life with my
                                                <br> beautiful husband. </div>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                        <div class="comment featured-cmt">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span> </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <br>
                                        <h4>Comments (2)</h4>
                                        <br>
                                        <div class="comment main-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment-last">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="comment-form">
                                            <br>
                                            <div class="col-xs-12">
                                                <h4>Leave a Reply</h4>
                                                <br>
                                                <br> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>NAME*</label><span><br><input type="text"></span> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>EMAIL*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>WEBSITE*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <label>YOUR COMMENT*</label>
                                                <br>
                                                <textarea rows="4" cols="8" name="comments"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <input type="submit" value="POST COMMENT" class="submit-button"> </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="content-r-inner">
                                    <div class="blogheader">
                                        <h2 class="blogtitle">This is one beautiful car & photo</h2>
                                        <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April 30, 2014 <span class="infodivider">/</span> UI, UX, Graphics</div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="blogdata"> <span class="firstcharacter">M</span>eh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br>
                                            <div class="blog-short-info"> The wedding day was something
                                                <br> to behold. It was the most
                                                <br> beautiful experience that I
                                                <br> have ever encountered and the guest
                                                <br> were all there and enjoying the
                                                <br> moment with me. I am so
                                                <br> excited to start my new life with my
                                                <br> beautiful husband. </div>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                        <div class="comment featured-cmt">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span> </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <br>
                                        <h4>Comments (2)</h4>
                                        <br>
                                        <div class="comment main-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment-last">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="comment-form">
                                            <br>
                                            <div class="col-xs-12">
                                                <h4>Leave a Reply</h4>
                                                <br>
                                                <br> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>NAME*</label><span><br><input type="text"></span> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>EMAIL*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>WEBSITE*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <label>YOUR COMMENT*</label>
                                                <br>
                                                <textarea rows="4" cols="8" name="comments"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <input type="submit" value="POST COMMENT" class="submit-button"> </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Posts page area ends -->
        </div>
        <!--Main Home page area ends -->
        <!--About Us page area ends -->
        <div id="aboutus" class="pt-page">
            <aside>
                <div class="postimagearea">
                    <div class="postimage" style="background-image: URL(images/about.jpg);"></div>
                </div>
            </aside>
            <section>
                <div class="contentRight">
                    <div class="content-image">
                        <div class="pagetitle contentarea">
                            <div class="title">About
                                <br> Me</div>
                            <div class="mask"></div>
                            <div class="pagesubtitle">Personal Blog </div>
                        </div>
                    </div>
                    <div class="contentarea">
                        <div class="post">
                            <div class="col-sm-12">
                                <h4 class="blogtitle">David Lennear</h4>
                                <div class="blogmetainfo"><b>WEB ARTCHITECT</b> </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="blogdata">It had been set for four o'clock as it should have beenit certainly must have rung. Yes was it possible to quietly sleep through that furniture-rattling noise? True, he had not peacefully, but probably all the more deeply because of that. What should he do now?</div>
                            </div>
                            <div class="col-sm-12">
                                <div class="blogdata leftbord">It had been set for four o'clock as it should have beenit certainly must have rung. Yes was it possible to quietly sleep through that furniture-rattling noise? True, he had not peacefully, but probably all the more deeply because of that. What should he do now?</div>
                            </div>
                            <div class="col-sm-12">
                                <div class="blogdata">It had been set for four o'clock as it should have beenit certainly must have rung. Yes was it possible to quietly sleep through that furniture-rattling noise? True, he had not peacefully, but probably all the more deeply because of that. What should he do now?</div>
                            </div>
                            <div class="col-sm-12">
                                <ul class="socialpost">
                                    <li><a class="" href="#"><i class="fa fa-google"></i></a> </li>
                                    <li><a class="" href="#"><i class="fa fa-twitter"></i></a> </li>
                                    <li><a class="" href="#"><i class="fa fa-behance"></i></a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!--About Us page area ends -->
        <!--Contact Us page area ends -->
        <div id="contactus" class="pt-page">
            <aside>
                <div class="postimagearea">
                    <div class="postimage" style="background-image: URL(images/contact.jpg);"></div>
                </div>
            </aside>
            <section>
                <div class="contentRight">
                    <div class="content-image">
                        <div class="pagetitle contentarea">
                            <div class="title">Contact
                                <br> Me</div>
                            <div class="mask"></div>
                            <div class="pagesubtitle">Personal Blog</div>
                        </div>
                    </div>
                    <div class="contentarea">
                        <div class="post">
                            <div class="col-sm-12">
                                <h4 class="blogtitle">Get in touch</h4>
                                <br> <i style="font-family: &quot;Playfair Display&quot;; font-size: 20px;">Look even slifhtly believable. if you are going to use a passage.</i>
                                <br>
                                <br>
                                <br>
                                <br> </div>
                            <div class="col-sm-12">
                                <div style="font-family: Raleway; font-size: 18px;"><b>Address:</b> 27th Brooklyn New York, NY 10065</div>
                                <br>
                                <div style="font-family: Raleway; font-size: 18px;"><b>Phone:</b> +7(111) 125 658 2514</div>
                                <br>
                                <div style="font-family: Raleway; font-size: 18px;"><b>Email:</b> hulk@avangers.com</div>
                                <br> </div>
                            <div class="clear"></div>
                            <br>
                            <br>
                            <div class="comment-form">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <label>NAME*</label><span><br><input type="text"></span> </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <label>EMAIL*</label>
                                    <br>
                                    <input type="text"> </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <label>WEBSITE*</label>
                                    <br>
                                    <input type="text"> </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <br>
                                    <label>YOUR COMMENT*</label>
                                    <br>
                                    <textarea rows="4" cols="8" name="comments"></textarea>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <br>
                                    <input type="submit" value="POST COMMENT" class="submit-button"> </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br> </div>
                </div>
            </section>
        </div>
        <!--Contact Us page area ends -->
        <!--Team page area starts -->
        <div id="team" class="pt-page">
            <div class="scalediv">
                <div class="row no-gutter" data-id="one">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <figure class="callpost" data-num="1" style="background-image:url('images/postimage10.jpg');" data-property="border-width" data-from="0" data-to="35px">
                            <div class="content">
                                <div class="content-wraper">
                                    <h2>Jimmy Buffett World</h2>
                                    <div class="comment-count">17 Comments <i class="fa fa-comments-o"></i> </div>
                                    <div class="excerpt">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, </div>
                                    <div class="postinfo">MUSIC <span>March 15, 2015</span> </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <figure class="callpost" data-num="2" style="background-image:url('images/postimage11.jpg');">
                            <div class="content">
                                <div class="content-wraper">
                                    <h2>Street Dose Hip Hop</h2>
                                    <div class="comment-count">22 Comments <i class="fa fa-comments-o"></i> </div>
                                    <div class="excerpt">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, </div>
                                    <div class="postinfo">MUSIC <span>March 15, 2015</span> </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <figure class="callpost" data-num="3" style="background-image:url('images/postimage12.jpg');">
                            <div class="content">
                                <div class="content-wraper">
                                    <h2>Your Music Radar</h2>
                                    <div class="comment-count">69 Comments <i class="fa fa-comments-o"></i> </div>
                                    <div class="excerpt">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, </div>
                                    <div class="postinfo">MUSIC <span>March 15, 2015</span> </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <figure class="callpost" data-num="4" style="background-image:url('images/postimage13.jpg');">
                            <div class="content">
                                <div class="content-wraper">
                                    <h2>Mountain Poets Display</h2>
                                    <div class="comment-count">10 Comments <i class="fa fa-comments-o"></i> </div>
                                    <div class="excerpt">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, </div>
                                    <div class="postinfo">MUSIC <span>March 15, 2015</span> </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <figure class="callpost" data-num="5" style="background-image:url('images/postimage14.jpg');">
                            <div class="content">
                                <div class="content-wraper">
                                    <h2>Bold As Love</h2>
                                    <div class="comment-count">117 Comments <i class="fa fa-comments-o"></i> </div>
                                    <div class="excerpt">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, </div>
                                    <div class="postinfo">MUSIC <span>March 15, 2015</span> </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <figure class="callpost" data-num="6" style="background-image:url('images/postimage15.jpg');">
                            <div class="content">
                                <div class="content-wraper">
                                    <h2>The Something In That Square</h2>
                                    <div class="comment-count">52 Comments <i class="fa fa-comments-o"></i> </div>
                                    <div class="excerpt">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, </div>
                                    <div class="postinfo">MUSIC <span>March 15, 2015</span> </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <figure class="callpost" data-num="7" style="background-image:url('images/postimage16.jpg');">
                            <div class="content">
                                <div class="content-wraper">
                                    <h2>Music For Robots</h2>
                                    <div class="comment-count">92 Comments <i class="fa fa-comments-o"></i> </div>
                                    <div class="excerpt">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, </div>
                                    <div class="postinfo">MUSIC <span>March 15, 2015</span> </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <figure class="callpost" data-num="8" style="background-image:url('images/postimage17.jpg');">
                            <div class="content">
                                <div class="content-wraper">
                                    <h2>Largehearted Boy</h2>
                                    <div class="comment-count">38 Comments <i class="fa fa-comments-o"></i> </div>
                                    <div class="excerpt">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, </div>
                                    <div class="postinfo">MUSIC <span>March 15, 2015</span> </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="posts"> <a class="back">Back</a>
                <aside> <a class="previous">Previous</a>
                    <div class="postimagearea">
                        <div class="postimage" style="background-image: URL(images/postimage17.jpg);"></div>
                        <div class="postimage" style="background-image: URL(images/postimage16.jpg);"></div>
                        <div class="postimage" style="background-image: URL(images/postimage15.jpg);"></div>
                        <div class="postimage" style="background-image: URL(images/postimage14.jpg);"></div>
                        <div class="postimage" style="background-image: URL(images/postimage13.jpg);"></div>
                        <div class="postimage" style="background-image: URL(images/postimage12.jpg);"></div>
                        <div class="postimage" style="background-image: URL(images/postimage11.jpg);"></div>
                        <div class="postimage" style="background-image: URL(images/postimage10.jpg);"></div>
                    </div>
                </aside>
                <section> <a class="next">Next</a>
                    <div class="contentRight">
                        <div class="postcontentarea">
                            <div class="post">
                                <div class="content-r-inner">
                                    <div class="blogheader">
                                        <h2 class="blogtitle">Jimmy Buffett World</h2>
                                        <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April 30, 2014 <span class="infodivider">/</span> UI, UX, Graphics</div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="blogdata"> <span class="firstcharacter">M</span>eh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br>
                                            <div class="blog-short-info"> The wedding day was something
                                                <br> to behold. It was the most
                                                <br> beautiful experience that I
                                                <br> have ever encountered and the guest
                                                <br> were all there and enjoying the
                                                <br> moment with me. I am so
                                                <br> excited to start my new life with my
                                                <br> beautiful husband. </div>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                        <div class="comment featured-cmt">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span> </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <br>
                                        <h4>Comments (2)</h4>
                                        <br>
                                        <div class="comment main-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015 </span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment-last">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="comment-form">
                                            <br>
                                            <div class="col-xs-12">
                                                <h4>Leave a Reply</h4>
                                                <br>
                                                <br> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>NAME*</label><span><br><input type="text"></span> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>EMAIL*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>WEBSITE*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <label>YOUR COMMENT*</label>
                                                <br>
                                                <textarea rows="4" cols="8" name="comments"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <input type="submit" value="POST COMMENT" class="submit-button"> </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="content-r-inner">
                                    <div class="blogheader">
                                        <h2 class="blogtitle">Street Dose Hip Hop</h2>
                                        <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April 30, 2014 <span class="infodivider">/</span> UI, UX, Graphics</div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="blogdata"> <span class="firstcharacter">M</span>eh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br>
                                            <div class="blog-short-info"> The wedding day was something
                                                <br> to behold. It was the most
                                                <br> beautiful experience that I
                                                <br> have ever encountered and the guest
                                                <br> were all there and enjoying the
                                                <br> moment with me. I am so
                                                <br> excited to start my new life with my
                                                <br> beautiful husband. </div>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                        <div class="comment featured-cmt">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span> </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <br>
                                        <h4>Comments (2)</h4>
                                        <br>
                                        <div class="comment main-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment-last">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="comment-form">
                                            <br>
                                            <div class="col-xs-12">
                                                <h4>Leave a Reply</h4>
                                                <br>
                                                <br> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>NAME*</label><span><br><input type="text"></span> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>EMAIL*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>WEBSITE*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <label>YOUR COMMENT*</label>
                                                <br>
                                                <textarea rows="4" cols="8" name="comments"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <input type="submit" value="POST COMMENT" class="submit-button"> </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="content-r-inner">
                                    <div class="blogheader">
                                        <h2 class="blogtitle">Your Music Radar</h2>
                                        <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April 30, 2014 <span class="infodivider">/</span> UI, UX, Graphics</div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="blogdata"> <span class="firstcharacter">M</span>eh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br>
                                            <div class="blog-short-info"> The wedding day was something
                                                <br> to behold. It was the most
                                                <br> beautiful experience that I
                                                <br> have ever encountered and the guest
                                                <br> were all there and enjoying the
                                                <br> moment with me. I am so
                                                <br> excited to start my new life with my
                                                <br> beautiful husband. </div>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                        <div class="comment featured-cmt">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span> </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <br>
                                        <h4>Comments (2)</h4>
                                        <br>
                                        <div class="comment main-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment-last">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="comment-form">
                                            <br>
                                            <div class="col-xs-12">
                                                <h4>Leave a Reply</h4>
                                                <br>
                                                <br> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>NAME*</label><span><br><input type="text"></span> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>EMAIL*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>WEBSITE*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <label>YOUR COMMENT*</label>
                                                <br>
                                                <textarea rows="4" cols="8" name="comments"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <input type="submit" value="POST COMMENT" class="submit-button"> </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="content-r-inner">
                                    <div class="blogheader">
                                        <h2 class="blogtitle">Mountain Poets Display</h2>
                                        <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April 30, 2014 <span class="infodivider">/</span> UI, UX, Graphics</div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="blogdata"> <span class="firstcharacter">M</span>eh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br>
                                            <div class="blog-short-info"> The wedding day was something
                                                <br> to behold. It was the most
                                                <br> beautiful experience that I
                                                <br> have ever encountered and the guest
                                                <br> were all there and enjoying the
                                                <br> moment with me. I am so
                                                <br> excited to start my new life with my
                                                <br> beautiful husband. </div>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                        <div class="comment featured-cmt">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span> </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <br>
                                        <h4>Comments (2)</h4>
                                        <br>
                                        <div class="comment main-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment-last">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="comment-form">
                                            <br>
                                            <div class="col-xs-12">
                                                <h4>Leave a Reply</h4>
                                                <br>
                                                <br> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>NAME*</label><span><br><input type="text"></span> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>EMAIL*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>WEBSITE*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <label>YOUR COMMENT*</label>
                                                <br>
                                                <textarea rows="4" cols="8" name="comments"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <input type="submit" value="POST COMMENT" class="submit-button"> </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="content-r-inner">
                                    <div class="blogheader">
                                        <h2 class="blogtitle">Bold As Love</h2>
                                        <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April 30, 2014 <span class="infodivider">/</span> UI, UX, Graphics</div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="blogdata"> <span class="firstcharacter">M</span>eh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br>
                                            <div class="blog-short-info"> The wedding day was something
                                                <br> to behold. It was the most
                                                <br> beautiful experience that I
                                                <br> have ever encountered and the guest
                                                <br> were all there and enjoying the
                                                <br> moment with me. I am so
                                                <br> excited to start my new life with my
                                                <br> beautiful husband. </div>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                        <div class="comment featured-cmt">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span> </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <br>
                                        <h4>Comments (2)</h4>
                                        <br>
                                        <div class="comment main-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment-last">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="comment-form">
                                            <br>
                                            <div class="col-xs-12">
                                                <h4>Leave a Reply</h4>
                                                <br>
                                                <br> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>NAME*</label><span><br><input type="text"></span> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>EMAIL*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>WEBSITE*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <label>YOUR COMMENT*</label>
                                                <br>
                                                <textarea rows="4" cols="8" name="comments"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <input type="submit" value="POST COMMENT" class="submit-button"> </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="content-r-inner">
                                    <div class="blogheader">
                                        <h2 class="blogtitle">The Something In That Square</h2>
                                        <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April 30, 2014 <span class="infodivider">/</span> UI, UX, Graphics</div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="blogdata"> <span class="firstcharacter">M</span>eh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br>
                                            <div class="blog-short-info"> The wedding day was something
                                                <br> to behold. It was the most
                                                <br> beautiful experience that I
                                                <br> have ever encountered and the guest
                                                <br> were all there and enjoying the
                                                <br> moment with me. I am so
                                                <br> excited to start my new life with my
                                                <br> beautiful husband. </div>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                        <div class="comment featured-cmt">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span> </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <br>
                                        <h4>Comments (2)</h4>
                                        <br>
                                        <div class="comment main-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment-last">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="comment-form">
                                            <br>
                                            <div class="col-xs-12">
                                                <h4>Leave a Reply</h4>
                                                <br>
                                                <br> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>NAME*</label><span><br><input type="text"></span> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>EMAIL*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>WEBSITE*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <label>YOUR COMMENT*</label>
                                                <br>
                                                <textarea rows="4" cols="8" name="comments"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <input type="submit" value="POST COMMENT" class="submit-button"> </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="content-r-inner">
                                    <div class="blogheader">
                                        <h2 class="blogtitle">Music For Robots</h2>
                                        <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April 30, 2014 <span class="infodivider">/</span> UI, UX, Graphics</div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="blogdata"> <span class="firstcharacter">M</span>eh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br>
                                            <div class="blog-short-info"> The wedding day was something
                                                <br> to behold. It was the most
                                                <br> beautiful experience that I
                                                <br> have ever encountered and the guest
                                                <br> were all there and enjoying the
                                                <br> moment with me. I am so
                                                <br> excited to start my new life with my
                                                <br> beautiful husband. </div>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                        <div class="comment featured-cmt">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span> </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <br>
                                        <h4>Comments (2)</h4>
                                        <br>
                                        <div class="comment main-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment-last">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="comment-form">
                                            <br>
                                            <div class="col-xs-12">
                                                <h4>Leave a Reply</h4>
                                                <br>
                                                <br> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>NAME*</label><span><br><input type="text"></span> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>EMAIL*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>WEBSITE*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <label>YOUR COMMENT*</label>
                                                <br>
                                                <textarea rows="4" cols="8" name="comments"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <input type="submit" value="POST COMMENT" class="submit-button"> </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="content-r-inner">
                                    <div class="blogheader">
                                        <h2 class="blogtitle">Music For Robots</h2>
                                        <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April 30, 2014 <span class="infodivider">/</span> UI, UX, Graphics</div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="blogdata"> <span class="firstcharacter">M</span>eh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br>
                                            <div class="blog-short-info"> The wedding day was something
                                                <br> to behold. It was the most
                                                <br> beautiful experience that I
                                                <br> have ever encountered and the guest
                                                <br> were all there and enjoying the
                                                <br> moment with me. I am so
                                                <br> excited to start my new life with my
                                                <br> beautiful husband. </div>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                        <div class="comment featured-cmt">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span> </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <br>
                                        <h4>Comments (2)</h4>
                                        <br>
                                        <div class="comment main-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment-last">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="comment-form">
                                            <br>
                                            <div class="col-xs-12">
                                                <h4>Leave a Reply</h4>
                                                <br>
                                                <br> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>NAME*</label><span><br><input type="text"></span> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>EMAIL*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>WEBSITE*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <label>YOUR COMMENT*</label>
                                                <br>
                                                <textarea rows="4" cols="8" name="comments"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <input type="submit" value="POST COMMENT" class="submit-button"> </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!--Team page area ends -->
        <!--Blog page area starts -->
        <div id="blog" class="pt-page">
            <div class="scalediv">
                <div class="row no-gutter" data-id="one">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <figure class="callpost" data-num="1" style="background-image:url('images/postimage18.jpg');" data-property="border-width" data-from="0" data-to="35px">
                            <div class="content">
                                <div class="content-wraper">
                                    <h2>Bathing in the Ocean</h2>
                                    <div class="comment-count">10 Comments <i class="fa fa-comments-o"></i> </div>
                                    <div class="excerpt">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, </div>
                                    <div class="postinfo">TRAVEL <span>March 15, 2015</span> </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <figure class="callpost" data-num="2" style="background-image:url('images/postimage19.jpg');">
                            <div class="content">
                                <div class="content-wraper">
                                    <h2>Around the Tellus</h2>
                                    <div class="comment-count">17 Comments <i class="fa fa-comments-o"></i> </div>
                                    <div class="excerpt">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, </div>
                                    <div class="postinfo">TRAVEL <span>March 15, 2015</span> </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <figure class="callpost" data-num="3" style="background-image:url('images/postimage20.jpg');">
                            <div class="content">
                                <div class="content-wraper">
                                    <h2>The Hum of the Earth </h2>
                                    <div class="comment-count">8 Comments <i class="fa fa-comments-o"></i> </div>
                                    <div class="excerpt">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, </div>
                                    <div class="postinfo">TRAVEL <span>March 15, 2015</span> </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <figure class="callpost" data-num="4" style="background-image:url('images/postimage21.jpg');">
                            <div class="content">
                                <div class="content-wraper">
                                    <h2>Someday This Day</h2>
                                    <div class="comment-count">18 Comments <i class="fa fa-comments-o"></i> </div>
                                    <div class="excerpt">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, </div>
                                    <div class="postinfo">TRAVEL <span>March 15, 2015</span> </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <figure class="callpost" data-num="5" style="background-image:url('images/postimage22.jpg');">
                            <div class="content">
                                <div class="content-wraper">
                                    <h2>Away We Whoa </h2>
                                    <div class="comment-count">54 Comments <i class="fa fa-comments-o"></i> </div>
                                    <div class="excerpt">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, </div>
                                    <div class="postinfo">TRAVEL <span>March 15, 2015</span> </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <figure class="callpost" data-num="6" style="background-image:url('images/postimage23.jpg');">
                            <div class="content">
                                <div class="content-wraper">
                                    <h2>Losing Sight of the Shore </h2>
                                    <div class="comment-count">39 Comments <i class="fa fa-comments-o"></i> </div>
                                    <div class="excerpt">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, </div>
                                    <div class="postinfo">TRAVEL <span>March 15, 2015</span> </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <figure class="callpost" data-num="7" style="background-image:url('images/postimage24.jpg');">
                            <div class="content">
                                <div class="content-wraper">
                                    <h2>One Point Five Billion Inches </h2>
                                    <div class="comment-count">27 Comments <i class="fa fa-comments-o"></i> </div>
                                    <div class="excerpt">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, </div>
                                    <div class="postinfo">TRAVEL <span>March 15, 2015</span> </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <figure class="callpost" data-num="8" style="background-image:url('images/postimage25.jpg');">
                            <div class="content">
                                <div class="content-wraper">
                                    <h2>Out of the Office </h2>
                                    <div class="comment-count">35 Comments <i class="fa fa-comments-o"></i> </div>
                                    <div class="excerpt">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, </div>
                                    <div class="postinfo">TRAVEL <span>March 15, 2015</span> </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <!-- Posts page area starts -->
            <div class="posts"> <a class="back">Back</a>
                <aside> <a class="previous">Previous</a>
                    <div class="postimagearea">
                        <div class="postimage" style="background-image: URL(images/postimage25.jpg);"></div>
                        <div class="postimage" style="background-image: URL(images/postimage24.jpg);"></div>
                        <div class="postimage" style="background-image: URL(images/postimage23.jpg);"></div>
                        <div class="postimage" style="background-image: URL(images/postimage22.jpg);"></div>
                        <div class="postimage" style="background-image: URL(images/postimage21.jpg);"></div>
                        <div class="postimage" style="background-image: URL(images/postimage20.jpg);"></div>
                        <div class="postimage" style="background-image: URL(images/postimage19.jpg);"></div>
                        <div class="postimage" style="background-image: URL(images/postimage18.jpg);"></div>
                    </div>
                </aside>
                <section> <a class="next">Next</a>
                    <div class="contentRight">
                        <div class="postcontentarea">
                            <div class="post">
                                <div class="content-r-inner">
                                    <div class="blogheader">
                                        <h2 class="blogtitle">Bathing in the Ocean </h2>
                                        <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April 30, 2014 <span class="infodivider">/</span> UI, UX, Graphics</div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="blogdata"> <span class="firstcharacter">M</span>eh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br>
                                            <div class="blog-short-info"> The wedding day was something
                                                <br> to behold. It was the most
                                                <br> beautiful experience that I
                                                <br> have ever encountered and the guest
                                                <br> were all there and enjoying the
                                                <br> moment with me. I am so
                                                <br> excited to start my new life with my
                                                <br> beautiful husband. </div>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                        <div class="comment featured-cmt">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span> </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <br>
                                        <h4>Comments (2)</h4>
                                        <br>
                                        <div class="comment main-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment-last">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="comment-form">
                                            <br>
                                            <div class="col-xs-12">
                                                <h4>Leave a Reply</h4>
                                                <br>
                                                <br> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>NAME*</label><span><br><input type="text"></span> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>EMAIL*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>WEBSITE*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <label>YOUR COMMENT*</label>
                                                <br>
                                                <textarea rows="4" cols="8" name="comments"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <input type="submit" value="POST COMMENT" class="submit-button"> </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="content-r-inner">
                                    <div class="blogheader">
                                        <h2 class="blogtitle">Around the Tellus </h2>
                                        <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April 30, 2014 <span class="infodivider">/</span> UI, UX, Graphics</div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="blogdata"> <span class="firstcharacter">M</span>eh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br>
                                            <div class="blog-short-info"> The wedding day was something
                                                <br> to behold. It was the most
                                                <br> beautiful experience that I
                                                <br> have ever encountered and the guest
                                                <br> were all there and enjoying the
                                                <br> moment with me. I am so
                                                <br> excited to start my new life with my
                                                <br> beautiful husband. </div>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                        <div class="comment featured-cmt">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span> </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <br>
                                        <h4>Comments (2)</h4>
                                        <br>
                                        <div class="comment main-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment-last">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="comment-form">
                                            <br>
                                            <div class="col-xs-12">
                                                <h4>Leave a Reply</h4>
                                                <br>
                                                <br> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>NAME*</label><span><br><input type="text"></span> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>EMAIL*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>WEBSITE*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <label>YOUR COMMENT*</label>
                                                <br>
                                                <textarea rows="4" cols="8" name="comments"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <input type="submit" value="POST COMMENT" class="submit-button"> </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="content-r-inner">
                                    <div class="blogheader">
                                        <h2 class="blogtitle">The Hum of the Earth </h2>
                                        <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April 30, 2014 <span class="infodivider">/</span> UI, UX, Graphics</div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="blogdata"> <span class="firstcharacter">M</span>eh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br>
                                            <div class="blog-short-info"> The wedding day was something
                                                <br> to behold. It was the most
                                                <br> beautiful experience that I
                                                <br> have ever encountered and the guest
                                                <br> were all there and enjoying the
                                                <br> moment with me. I am so
                                                <br> excited to start my new life with my
                                                <br> beautiful husband. </div>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                        <div class="comment featured-cmt">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span> </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <br>
                                        <h4>Comments (2)</h4>
                                        <br>
                                        <div class="comment main-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment-last">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="comment-form">
                                            <br>
                                            <div class="col-xs-12">
                                                <h4>Leave a Reply</h4>
                                                <br>
                                                <br> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>NAME*</label><span><br><input type="text"></span> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>EMAIL*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>WEBSITE*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <label>YOUR COMMENT*</label>
                                                <br>
                                                <textarea rows="4" cols="8" name="comments"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <input type="submit" value="POST COMMENT" class="submit-button"> </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="content-r-inner">
                                    <div class="blogheader">
                                        <h2 class="blogtitle">Someday This Day</h2>
                                        <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April 30, 2014 <span class="infodivider">/</span> UI, UX, Graphics</div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="blogdata"> <span class="firstcharacter">M</span>eh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br>
                                            <div class="blog-short-info"> The wedding day was something
                                                <br> to behold. It was the most
                                                <br> beautiful experience that I
                                                <br> have ever encountered and the guest
                                                <br> were all there and enjoying the
                                                <br> moment with me. I am so
                                                <br> excited to start my new life with my
                                                <br> beautiful husband. </div>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                        <div class="comment featured-cmt">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span> </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <br>
                                        <h4>Comments (2)</h4>
                                        <br>
                                        <div class="comment main-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment-last">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="comment-form">
                                            <br>
                                            <div class="col-xs-12">
                                                <h4>Leave a Reply</h4>
                                                <br>
                                                <br> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>NAME*</label><span><br><input type="text"></span> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>EMAIL*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>WEBSITE*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <label>YOUR COMMENT*</label>
                                                <br>
                                                <textarea rows="4" cols="8" name="comments"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <input type="submit" value="POST COMMENT" class="submit-button"> </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="content-r-inner">
                                    <div class="blogheader">
                                        <h2 class="blogtitle">Away We Whoa </h2>
                                        <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April 30, 2014 <span class="infodivider">/</span> UI, UX, Graphics</div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="blogdata"> <span class="firstcharacter">M</span>eh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br>
                                            <div class="blog-short-info"> The wedding day was something
                                                <br> to behold. It was the most
                                                <br> beautiful experience that I
                                                <br> have ever encountered and the guest
                                                <br> were all there and enjoying the
                                                <br> moment with me. I am so
                                                <br> excited to start my new life with my
                                                <br> beautiful husband. </div>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                        <div class="comment featured-cmt">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span> </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <br>
                                        <h4>Comments (2)</h4>
                                        <br>
                                        <div class="comment main-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment-last">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="comment-form">
                                            <br>
                                            <div class="col-xs-12">
                                                <h4>Leave a Reply</h4>
                                                <br>
                                                <br> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>NAME*</label><span><br><input type="text"></span> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>EMAIL*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>WEBSITE*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <label>YOUR COMMENT*</label>
                                                <br>
                                                <textarea rows="4" cols="8" name="comments"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <input type="submit" value="POST COMMENT" class="submit-button"> </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="content-r-inner">
                                    <div class="blogheader">
                                        <h2 class="blogtitle">Losing Sight of the Shore </h2>
                                        <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April 30, 2014 <span class="infodivider">/</span> UI, UX, Graphics</div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="blogdata"> <span class="firstcharacter">M</span>eh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br>
                                            <div class="blog-short-info"> The wedding day was something
                                                <br> to behold. It was the most
                                                <br> beautiful experience that I
                                                <br> have ever encountered and the guest
                                                <br> were all there and enjoying the
                                                <br> moment with me. I am so
                                                <br> excited to start my new life with my
                                                <br> beautiful husband. </div>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                        <div class="comment featured-cmt">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span> </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <br>
                                        <h4>Comments (2)</h4>
                                        <br>
                                        <div class="comment main-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment-last">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="comment-form">
                                            <br>
                                            <div class="col-xs-12">
                                                <h4>Leave a Reply</h4>
                                                <br>
                                                <br> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>NAME*</label><span><br><input type="text"></span> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>EMAIL*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>WEBSITE*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <label>YOUR COMMENT*</label>
                                                <br>
                                                <textarea rows="4" cols="8" name="comments"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <input type="submit" value="POST COMMENT" class="submit-button"> </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="content-r-inner">
                                    <div class="blogheader">
                                        <h2 class="blogtitle">One Point Five Billion Inches </h2>
                                        <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April 30, 2014 <span class="infodivider">/</span> UI, UX, Graphics</div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="blogdata"> <span class="firstcharacter">M</span>eh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br>
                                            <div class="blog-short-info"> The wedding day was something
                                                <br> to behold. It was the most
                                                <br> beautiful experience that I
                                                <br> have ever encountered and the guest
                                                <br> were all there and enjoying the
                                                <br> moment with me. I am so
                                                <br> excited to start my new life with my
                                                <br> beautiful husband. </div>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                        <div class="comment featured-cmt">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span> </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <br>
                                        <h4>Comments (2)</h4>
                                        <br>
                                        <div class="comment main-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment-last">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="comment-form">
                                            <br>
                                            <div class="col-xs-12">
                                                <h4>Leave a Reply</h4>
                                                <br>
                                                <br> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>NAME*</label><span><br><input type="text"></span> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>EMAIL*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>WEBSITE*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <label>YOUR COMMENT*</label>
                                                <br>
                                                <textarea rows="4" cols="8" name="comments"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <input type="submit" value="POST COMMENT" class="submit-button"> </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="post">
                                <div class="content-r-inner">
                                    <div class="blogheader">
                                        <h2 class="blogtitle">Out of the Office </h2>
                                        <div class="blogmetainfo"><b>Melissa Walker</b> <span class="infodivider">/</span> April 30, 2014 <span class="infodivider">/</span> UI, UX, Graphics</div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="blogdata"> <span class="firstcharacter">M</span>eh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br>
                                            <div class="blog-short-info"> The wedding day was something
                                                <br> to behold. It was the most
                                                <br> beautiful experience that I
                                                <br> have ever encountered and the guest
                                                <br> were all there and enjoying the
                                                <br> moment with me. I am so
                                                <br> excited to start my new life with my
                                                <br> beautiful husband. </div>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blogdata"> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi.
                                            <br>
                                            <br> Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth animation 8-bit hella, PBSR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitaarian Truffaut synth art party deep v chillwave. Seitan High Life reprehenderit consectetur cupidatat kogi. </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comments-section">
                                        <div class="comment featured-cmt">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span> </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <br>
                                        <h4>Comments (2)</h4>
                                        <br>
                                        <div class="comment main-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment sub-comment-last">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez </h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="comt-pic"><img src="images/comt-pic.png" alt=""> </div>
                                            <div class="comt-author">
                                                <h4>Joan Gonzalez</h4> <span class="comt-date">March 27, 2015</span>
                                                <div class="reply-button">/ <a href="#"> Reply</a> </div>
                                            </div>
                                            <div class="comt-txt">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam </p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="comment-form">
                                            <br>
                                            <div class="col-xs-12">
                                                <h4>Leave a Reply</h4>
                                                <br>
                                                <br> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>NAME*</label><span><br><input type="text"></span> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>EMAIL*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                <label>WEBSITE*</label>
                                                <br>
                                                <input type="text"> </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <label>YOUR COMMENT*</label>
                                                <br>
                                                <textarea rows="4" cols="8" name="comments"></textarea>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <br>
                                                <input type="submit" value="POST COMMENT" class="submit-button"> </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Posts page area ends -->
        </div>
        <!--Blog page area ends -->
    </div>
   
    <!--end insta sidebar -->
    
    <script src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/instafeed.min.js"></script>
    
    <script type="text/javascript" src="js/jquery.simplyscroll.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="js/lightbox.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>