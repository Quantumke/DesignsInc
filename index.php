<!doctype html>
<html lang=en>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Moringa DevShop</title>
<link rel="icon" href="img/logo-dark.png">
<link href="css/normalize.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/materialize.css">
 <link rel="stylesheet" type="text/css" href="css/behaviour.css" />
        <link rel="stylesheet" type="text/css" href="css/icons.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
        <link rel="stylesheet" type="text/css" href=" css/animate.css">
        <script src="js/modernizr.custom.js"></script>
        <link rel="stylesheet" href="styles/buttons/css/component.css">
        <link rel="stylesheet" href="styles/buttons/css/default.css">
       <script src="styles/buttons/js/modernizr.custom.js"></script>
       <link rel="stylesheet" href="styles/svg/css/component.css"> 
       <link rel="stylesheet" href="css/svgdrawing.css">
       <script src="js/custom.js"></script>
       <script src="js/jquery.min.js"></script>
       <link rel="stylesheet" href="css/anime.css">
       <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="js/webcomponents.min.js"></script>
        <script src="js/require.js"></script>
        <link async rel="import" href="build1896.html?v=59"/>
        <link rel="stylesheet" href="team/css/main.css">
     
</head>

<script>

    jQuery(document).ready(function ($) {
    $(window).load(function () {
        setTimeout(function(){
            $('.se-pre-con').fadeOut('slow', function () {
            });
        },3000);

    });
});:
    </script>
    <div class="se-pre"></div>
<body class="page-exit animating">

<header>



<div class="cover">
<video autoplay loop id="vid">
    <source src="img/bg.mp4" type="video/mp4">
 
</video>


<?php include 'menu.php' ?>
    <div class="x_bg col s12 m12 l12 ">
    <div class="container">
    <div class="row">
        <div class="header-bar col s12 m12 l12" style=" padding-left: 75%;padding-top: 12px;">
<
    </div>
        <div class="cntr strapline col s12 m12 l12 ">
        
        <div class="col s12 m12 l12"><img class="slideExpandUp" src="img/logo-white.png">   </div>
        
        
        <div class="col s12 m12 l12">  
        <span class="shade1 animated flash  infinite   ">Moringa Devshop </span>

</div>
      
<br>
<div class="slogan col s12 m12 l12">
<span class="shade4 stretchLeft">
<span></span>

 We are a Kenyan based software development firm, <br>creating software that fulfill your goals and needs</span>





 </div>
 <br>
 
<section id="btn-click">
			
			
				
					<p>
					  

 <awesome-button onclick="goportofolio()" id="destroy-button"  width="242" progress="true"  size="large" success="All set!">Find out more</awesome-button>

					</p>
					 
				
			
			</section>
     
        </div>
        </div>
    </div>
</div>
<!--
<div  class="copyright col s12 m12 l12">
<div class="container">
<div class="row">
<div class="col s12 m12 l12">
&copy Moringa
</div>  
</div>

</div>

        </div>
-->
    </div>
</header>
            
            <script src="styles/svg/js/classie.js"></script>
            <script src="styles/svg/js/svganimations2.js"></script>
  <script>
    document.getElementById('vid').play();
</script>
<script src="js/classie.js"></script>
   <script src="styles/buttons/js/classie.js"></script>
    <script src="js/borderMenu.js"></script>

		<script>
	$(window).scroll(function() {
		$('#animatedElement').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("slideUp");
			}
		});
	});
</script>
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>
<script src="js/wow.js"></script>
</body>
</html>
