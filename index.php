<!DOCTYPE html>
<html lang="en">
 
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />  
     <!-- preloader -->
 <div class="js">

  <body style="background-color:#fff">			
  <div id="preloader"><div class="preloader_area"><div class="gears"><img class=" gear1" src='img/gear.png'>
  <img class=" gear2" src='img/gear.png' ></div>
   <p>The Club is Loading...</p></div></div>

    <!-- end preloader -->


    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
	  <?php include 'navbar.php';?>
      <!-- END MENU -->    
    </header>
	 	<style>
	
	#header{
    
}
.navbar-default {

  background-color: transparent;
}

@media (max-width: 767px)
{
.navbar-default {
    background-color: rgba(49, 59, 61, 0.64);
}}

</style>
	 
    <!--=========== END HEADER SECTION ================--> 
    <!--=========== BEGIN SLIDER SECTION ================-->
                <style>
			  #slides{}.slides-pagination{
			  display:none;}
			  </style>
    <section id="slider">
      <div class="row">
        <div class="col-lg-12 col-md-12">
		     
          <div class="slider_area">
		    
 
            <!-- Start super slider -->
            <div id="slides">
			
              <ul class="slides-container">                          
 
                <!-- Start single slider-->
                <li id='1'>
                  <img src="img/slider/3.jpg" alt="img">
            
                </li>
                <!-- Start single slider-->
                <li id='2'>
                  <img src="img/slider/4.jpg" alt="img">
            
       
                    
                </li>
                  <li id='1'>
                      <img src="img/slider/2.jpg" alt="img">
         
                          
             
                  </li>
              </ul>
      
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
	<div class="captions">

	                   <h2 id='op0' lol="Be a Design Maniac"></h2>
					   
	                   <h2 id='op1' lol="Or Play with Circuits?"></h2>
					   
	                   <h2 id='op2' lol="Welocme to Robotics Club IIT Delhi!"></h2>
                    </div>
                  
    <!--=========== END SLIDER SECTION ================-->

    <!--=========== BEGIN ABOUT US SECTION ===============
    <section id="courseArchive">
      <div class="container">
        <div class="row">
     
            <div class="col-lg-9 col-sm-8 col-sm-12">
			</div>
			<div class="col-lg-3 col-sm-4 col-sm-12 announcements ">
			<div class="announcement_box swing">
			
			<h2> Announcements </h2>
			<?php include 'announcements.php'?>
			
            </div>
          </div>




			</div>
			</div>



      </div>
      </div>
    </section>=-->
    <!--=========== END ABOUT US SECTION ================--> 

    
    <!--=========== BEGIN FOOTER SECTION ================-->

    <!--=========== END FOOTER SECTION ================--> 

  

 <!-- Javascript Files
    ================================================== -->


    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
    <script src='js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>   
   
	<script type="text/javascript" language="javascript">
	
var SPY = function() {
  function e(a, d, b) {
    var c, f, g, h;
    b == a.length ? k.animationComplete = !0 : (g = d.innerHTML, h = Math.floor(21 * Math.random() + 5), c = 32 === a[b] ? 32 : a[b] - h, f = setInterval(function() {
      d.innerHTML = g + String.fromCharCode(c);
      c == a[b] ? (clearInterval(f), c = 32, b++, setTimeout(function() {
        e(a, d, b);
      }, 10)) : c++;
    }, 5));
  }
  var k = {};
  return k = {animationComplete:!1, text:function(a,old) {
    this.animationComplete = !1;
	
	document.getElementById(old).innerHTML="";
	

    a = document.getElementById(a);

	
	
    for (var d =a.getAttribute("lol"), b = [], c = 0;c < d.length;c++) {
      b.push(d.charCodeAt(c));
    }
	a.innerHTML="";
 
    e(b, a, 0);
		
  }};
}();


function captionload(){
setTimeout(function foo1(){SPY.text('op0','op2');},0);
setTimeout(function foo1(){SPY.text('op1','op0');},4000);
setTimeout(function foo1(){SPY.text('op2','op1');},8000);
}




</script>

    <!-- Custom js-->
    <script src="js/custom.js"></script>


	  
	 

 <p class="text-center" style="
	
     color: #fff;
    position: fixed;
    bottom: 0;
    z-index: 20;
    width: 100%;
    margin-left: auto;
    margin-right: auto;
 
">Copyright &copy; Robotics Club, IIT Delhi</p>


  </body>
      </div>


 <script src="/js/preloader.js"></script>


</html>