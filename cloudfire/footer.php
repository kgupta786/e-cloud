
<div class="services">
    <div class="container">
        <h3 class="w3ls-title">Our Services</h3>
        <div class="services-agile-row">
            <div class="col-md-8 services-grid-info">
                <div class="services-grid-row">
                    <div class="col-md-6 services-grid services-img">
                    </div>
                    <div class="col-md-6 services-grid services-text">
                        <h4>New Collections </h4>
                        <p>Here New Collections and memories can be well preserved with this Cloudbase.New Collections of photos,music and Videos can be added anytime!</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="services-grid-row">
                    <div class="col-md-6 services-grid services-img3">
                    </div>
                    <div class="col-md-6 services-grid services-text3">
                        <h4>Good Quality</h4>
                        <p>Quality of images,musics and videos do not corrode with time,it remains as it is...</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4 services-grid-info services-grid-row">
                <div class="services-grid services-img2">
                </div>
                <div class="services-grid services-text2">
                    <h4>Best Performance </h4>
                    <p>It is known for its best performance as it has the facilties of playing music,videos and so on...</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>

<div class="address">
    <div class="col-md-4 address-left">
        <h4>Contact Info</h4>
        <ul>
            <li><i class="fa fa-map-marker"> Amritsar,Punjab</i></li>
            <li><i class="fa fa-phone"></i> +91-8556058216</li>
            <li><i class="fa fa-envelope-o"></i> <a href="mailto:iitengineer786@gmail.com">iitengineer786@gmail.com</a></li>
        </ul>
    </div>
    <div class="col-md-8 address-right">
        <form action="#" method="post">
            <input type="text" name="email" placeholder="Enter your Email..." required="">
            <input type="submit" value="Subscribe">
        </form>
        <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- //address -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <h3><a href="home.php">e-Cloud!</a></h3>
        <p>© 2017 e-Cloud!. All rights reserved | Design by <a href="">Keshav Gupta</a></p>
        <div class="social-icons">
            <ul>
                <li><a href="#" class="fa fa-facebook icon icon-border facebook"> </a></li>
                <li><a href="#" class="fa fa-google-plus icon icon-border googleplus"> </a></li>
                <li><a href="#" class="fa fa-dribbble icon icon-border dribbble"> </a></li>
                <li><a href="#" class="fa fa-rss icon icon-border rss"> </a></li>
            </ul>
        </div>
    </div>
</div>
<!-- //footer -->
</div>
<a href="#navi" class="navi-trigger"> <span class="navi-icon"> <svg x="0px" y="0px" width="54px" height="54px" viewBox="0 0 54 54"></svg> </span> </a>
<!-- Hidden Navi Menu -->
<div id="navi" class="navi">
    <div class="navigation-wrapper">
        <div class="half-block">
            <h2>My Cloud!</h2>
            <nav>
                <ul class="primary-navi">
                    <li><a href="home.php"  class="selected">Sign-up</a></li>
                    <li><a href="login.php" class="selected">Login</a></li>
                    <li><a href="add_photo.php" class="selected">Upload Photos</a></li>
                    <li><a href="view_photo.php" class="selected">My Photos</a></li>
                    <li><a href="add_music.php" class="selected">Upload Music</a></li>
                    <li><a href="view_music.php" class="selected">My Album</a></li>
                    <li><a href="video.php" class="selected">Upload Video</a></li>
                    <li><a href="view_video.php" class="selected">My Videos</a></li>

                    <li><a href="logout.php" class="selected">Logout</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<script>
    jQuery(document).ready(function($){
        var isLateralNavAnimating = false;

        //open/close lateral navigation
        $('.navi-trigger').on('click', function(event){
            event.preventDefault();
            //stop if nav animation is running
            if( !isLateralNavAnimating ) {
                if($(this).parents('.csstransitions').length > 0 ) isLateralNavAnimating = true;

                $('body').toggleClass('navigation-is-open');
                $('.navigation-wrapper').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
                    //animation is over
                    isLateralNavAnimating = false;
                });
            }
        });
    });
</script>
<!-- //Hidden Navi Menu -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.js"></script>
</body>
</html>