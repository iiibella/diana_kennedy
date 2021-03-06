<!DOCTYPE HTML>
<?php
header( 'Content-type: text/html; charset=iso-8859-1' );
require('config.php');
?>

<html>
	<head>
		<title>Diana Kennedy | Biodiversidad Mexicana | Conabio</title>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		    
    <script src="js/jquery-1.9.1.js"></script>
		<script type="text/javascript">
/* <![CDATA[ */
	( function($) {
		$.fn.responsiveVideo = function() {
			// Add CSS to head
			$( 'head' ).append( '<style type="text/css">.responsive-video-wrapper{width:100%;position:relative;padding:0}.responsive-video-wrapper iframe,.responsive-video-wrapper object,.responsive-video-wrapper embed{position:absolute;top:0;left:0;width:100%;height:100%}</style>' );
			// Gather all videos
			var $all_videos = $(this).find( 'iframe[src*="player.vimeo.com"], iframe[src*="youtube.com"], iframe[src*="youtube-nocookie.com"], iframe[src*="dailymotion.com"], iframe[src*="kickstarter.com"][src*="video.html"], object, embed' );
			// Cycle through each video and add wrapper div with appropriate aspect ratio if required
			$all_videos.not( 'object object' ).each( function() {
				var $video = $(this);
				if ( $video.parents( 'object' ).length )
					return;
				if ( ! $video.prop( 'id' ) )
					$video.attr( 'id', 'rvw' + Math.floor( Math.random() * 999999 ) );
				$video
					.wrap( '<div class="responsive-video-wrapper" style="padding-top: ' + ( $video.attr( 'height' ) / $video.attr( 'width' ) * 100 ) + '%" />' )
					.removeAttr( 'height' )
					.removeAttr( 'width' )
					} );
		};
	} )(jQuery);

		$(document).ready(function() {
			$( 'body' ).responsiveVideo();
		});
		</script>

		<script src="js/menu.js"></script>
		
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<div id="header">
						
				<!-- Logo -->
                    
              <div id="logo">
                <img src="images/logo.png" usemap="#Map">
                <map name="Map">
                  <area shape="rect" coords="36,5,357,75" href="index.php">
                  <area shape="rect" coords="674,3,762,73" href="http://www.conabio.gob.mx" target="_blank">
                </map>
              </div>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li ><a href="index.php">Inicio</a></li>
							<li><a href="qs_dk.php">�Qui�n es DK?</a></li>
							<li><a href="quinta.php">Quinta</a></li>
							<li><a href="proyecto.php">Proyecto</a></li>
							<li class="current"><a href="recursos.php">Recursos</a></li>
							<li><?php include('menu.php') ?></li>
						</ul>
			  		</nav>

	</div>
			
		<!-- Main -->
			<section class="wrapper style1">
				<div class="container">
                <header>
						<h2>Recursos</h2>
				</header>
                
                
                
                <h3>Videos C<span style="font-variant:small-caps; font-size:120%">onabio</span></h3>
                         
                    <div class="row double">
						<div class="6u">
							<div id="miniaturas">
								<ul style="padding-left:20px">
								<li style="list-style-type:disc; list-style-position:outside; padding-bottom:.5em"><strong>En busca de los ingredientes y las recetas tradicionales</strong> (20 min | 30 min)</li>
                                <li style="list-style-type:disc; list-style-position:outside; padding-bottom:.5em"><strong>Rancho Quinta Diana, �rboles y cultivos</strong> (20 min | 27 min)</li>
                                <li style="list-style-type:disc; list-style-position:outside; padding-bottom:.5em"><strong>El chile, pilar de la comida tradicional mexicana</strong> (20 min | 25 min)</li>
								</ul>
                                <a href="//www.youtube.com/embed/n6Vr1DUtcpg?rel=0" onClick="return cambio(this.href)"><img src="//i.ytimg.com/vi/n6Vr1DUtcpg/default.jpg"></a>
                                <a href="//www.youtube.com/embed/RTNVUllmYFU?rel=0" onClick="return cambio(this.href)"><img src="//i.ytimg.com/vi/RTNVUllmYFU/default.jpg"></a>
                                <a href="//www.youtube.com/embed/0YmCo-Wsms8?rel=0" onClick="return cambio(this.href)"><img src="//i.ytimg.com/vi/0YmCo-Wsms8/default.jpg"></a>
                                <a href="//www.youtube.com/embed/ftdgaewlQt4?rel=0" onClick="return cambio(this.href)"><img src="//i.ytimg.com/vi/ftdgaewlQt4/default.jpg"></a>
                                <a href="//www.youtube.com/embed/blV-jV5Uk2E?rel=0" onClick="return cambio(this.href)"><img src="//i.ytimg.com/vi/blV-jV5Uk2E/default.jpg"></a>
                                <a href="//www.youtube.com/embed/n6Vr1DUtcpg?rel=0" onClick="return cambio(this.href)"><img src="//i.ytimg.com/vi/n6Vr1DUtcpg/default.jpg"></a> 
						  </div>
						</div>
						<div class="6u">
                          <div id="contenedor">
								<iframe width="400" height="225" src="http://www.youtube.com/embed/n6Vr1DUtcpg?rel=0" frameborder="0" allowfullscreen></iframe>
						  	</div>
                            
                           <script type="text/javascript">
						  function cambio (url){
							  document.getElementById('contenedor').innerHTML='<iframe width="400" height="225" src="' +  url + '" frameborder="0" allowfullscreen></iframe>';
							  return false;
						  }
						  </script>
						</div>
					</div>
                    
                    <p><hr></p>

				
                    	<h3>Otros videos</h3>
                         
                    <div class="row double">
						<div class="6u">
							<div id="miniaturas2">
								<p><strong>Cocina y cultura. Diana Kennedy</strong></p>
                                <a href="//www.youtube.com/embed/RTNVUllmYFU?rel=0" onClick="return cambio2(this.href)"><img src="//i.ytimg.com/vi/RTNVUllmYFU/default.jpg"></a>
                                <a href="//www.youtube.com/embed/0YmCo-Wsms8?rel=0" onClick="return cambio2(this.href)"><img src="//i.ytimg.com/vi/0YmCo-Wsms8/default.jpg"></a>
                                <a href="//www.youtube.com/embed/ftdgaewlQt4?rel=0" onClick="return cambio2(this.href)"><img src="//i.ytimg.com/vi/ftdgaewlQt4/default.jpg"></a>
                                <a href="//www.youtube.com/embed/blV-jV5Uk2E?rel=0" onClick="return cambio2(this.href)"><img src="//i.ytimg.com/vi/blV-jV5Uk2E/default.jpg"></a>     
						  </div>
						</div>
						<div class="6u">
                          <div id="contenedor2">
								<iframe width="400" height="225" src="http://www.youtube.com/embed/RTNVUllmYFU?rel=0" frameborder="0" allowfullscreen></iframe>	
						  </div>
                            
                           <script type="text/javascript">
						  function cambio2 (url){
							  document.getElementById('contenedor2').innerHTML='<iframe width="400" height="225" src="' +  url + '" frameborder="0" allowfullscreen></iframe>';
							  return false;
						  }
						  </script>
						</div>
					</div>

                    
                   <p><hr></p>

                    			 
								  <h3><a href="http://bdi.conabio.gob.mx/fotoweb/Grid.fwx?archiveId=5062&columns=4&rows=8&search=Diana%20Kennedy" target="_blank">Galer�a</a></h3>
                           		  <h3>Ligas relacionadas</h3>
                                    	<ul style="padding-left:20px">
                                          <li style="list-style-type:disc; list-style-position:outside; padding-bottom:.5em"><a href="http://www.biodiversidad.gob.mx/usos/alimentos.html">Alimentos</a></li>
                                          <li style="list-style-type:disc; list-style-position:outside; padding-bottom:.5em"><a href="http://www.biodiversidad.gob.mx/genes/centrosOrigen/centrosOrig.html">Centros de domesticaci&oacute;n</a></li>
										  <li style="list-style-type:disc; list-style-position:outside; padding-bottom:.5em"><a href="https://www.academia.edu/2547625/Comida_cultura_y_modernidad_en_Mexico._Perspectivas_antropologicas_e_historicas" target="_blank">Comida, cultura y modernidad en M�xico | Perspectivas antropol�gicas e hist�ricas</a></li>
                                        </ul>
                    
                    
				</div>
			</section>			

		<!-- Footer -->
		<div id="footer">
        
		<!-- Copyright -->
					<div class="copyright">
					&copy; 2014 Comisi�n Nacional para el Conocimiento y Uso de la Biodiversidad (CONABIO)
                    </div>        
        
        <!-- Icons -->
					<ul class="icons">
						<li><a href="http://www.facebook.com/pages/Comision-Nacional-para-el-Conocimiento-y-uso-de-la-Biodiversidad/208239404119?v=wall" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
                      <li><a href="http://twitter.com/conabio" class="icon fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
						<li><a href="http://www.youtube.com/biodiversidadmexico" class="icon fa-youtube" target="_blank"><span class="label">Youtube</span></a></li>
						<li><a href="https://soundcloud.com/conabio" class="icon fa-soundcloud" target="_blank"><span class="label">SoundCloud</span></a></li>
					</ul>

		
			</div>

	</body>
</html>
