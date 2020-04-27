<!DOCTYPE html>
<html lang="en">

<body>
<!--FB plugin-->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!--FB plugin-->



    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->
    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
          <?php include 'navbar.php';?>
        <!-- END MENU -->
    </header>
    <!--=========== END HEADER SECTION ================-->
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner" style="background-image:url(img/sac2.jpg) !important ">
        <h2>Contact Us</h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
        <section id="courseArchive">
		<div class="page">
      <div class="container">
        <div class="row">
          <!-- start course content -->
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="courseArchive_content">
              <!-- start blog archive  -->
			   
              <div class="row">
                <!-- start single blog -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                 <div class="single_blog">
                    
					<div class="row">
					 <div class="col-lg-12 col-md-12 col-sm-12">
                <strong>
				<h3 class="blog_title text-center" >Faculty Incharge</h3>
				<p class="text-center" ><br>Kolin Paul </strong><br>Professor<br>Department of Computer Science and Engineering, IIT Delhi<br>Hauz Khas,New Delhi-110016<br>
				<i class="fa fa-phone"></i> +91-11-2659-6033(O) <br><i class="fa fa-envelope"></i>  kolin@cse.iitd.ac.in<br><br></p>
				</div></div>

				<div class="row">
					 <div class="col-lg-6 col-md-6 col-sm-6">
				 <strong>
				<h3 class="blog_title text-center" >Overall Coordinator</h3>
				<p class="text-center" ><br>Devansh Agarwal </strong><br><i class="fa fa-home"></i> Aravali Hostel<br>IIT Delhi<br>
				<i class="fa fa-phone"></i> +91-9599909231(M) <br><i class="fa fa-envelope"></i>  devansh.agarwal1997@gmail.com<br><br></p>
				</div>
				 <div class="col-lg-6 col-md-6 col-sm-6">
				 <strong>
				<h3 class="blog_title text-center" style="padding:0" >Fresher's Coordinator</h3>
				<p class="text-center" ><br>Shubham </strong><br><i class="fa fa-home"></i> Satpura Hostel<br>IIT Delhi<br>
				<i class="fa fa-phone"></i> +91-8510905221(M) <br><i class="fa fa-envelope"></i>  shubhamvizag@gmail.com<br><br></p>
				</div></div>

			











				 <div class="row" style="padding-top:100px">

		<div id="map"  ></div>
		</div>

                  </div>
                </div> 
              </div> 
              <!-- start related post -->           
            </div>
          </div>
          <!-- End course content -->

          <!-- start course archive sidebar -->
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="courseArchive_sidebar">
              <!-- start single sidebar -->
              <div class="single_sidebar">
                <h2>Facebook Page <span class="fa fa-angle-double-right"></span></h2>
                <div class="fb-page" data-href="https://www.facebook.com/iitdrobocon" data-tabs="timeline" data-height="900" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/iitdrobocon" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/iitdrobocon">Robotics Club IITD</a></blockquote></div>
				 </div>
              <!-- End single sidebar -->
              
            </div>
          </div>
          <!-- start course archive sidebar -->
        </div>

      </div></div>
    </section>



	 
    <script>
      function initMap() {
        var uluru = {lat: 28.5456, lng: 77.1854};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
		  title:"Robotics Club, IIT Delhi"
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvUNCogUPACnXa0ehqXzVrYYCei9zBn-U &callback=initMap">
    </script>

    <!--=========== END COURSE BANNER SECTION ================-->
    <!--=========== BEGIN FOOTER SECTION ================-->
   
        <?php include 'footer.php';?>

    <!--=========== END FOOTER SECTION ================-->
    <!-- Javascript Files
    ================================================== -->
    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Preloader js file -->

    <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>
    <!-- superslides slider -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>
    <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>

    <!-- Custom js-->
    <script src="js/custom.js"></script>
    <!--===============================================
      Template Design By WpFreeware Team.
      Author URI : http://www.wpfreeware.com/
    ====================================================-->

</body>
</html>