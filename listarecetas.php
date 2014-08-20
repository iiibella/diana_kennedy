<!DOCTYPE HTML>
<?php
	if(!session_id())session_start();
	$sessionId = session_id();

	header( 'Content-type: text/html; charset=iso-8859-1' );
	require('config.php');

	$filtro = $_GET["filtro"];			
	$sql = "SELECT URL, recetanombre FROM diannakennedy WHERE ".$filtro." ORDER BY recetanombre";		
	//Conexi�n a la base de datos 
	$con = $conexion; 	

	//Sentencia sql (sin limit) 
	$_pagi_sql = $sql; 

	//cantidad de resultados por p�gina (opcional, por defecto 20) 
	$_pagi_cuantos = 10; 

	//cantidad de enlaces que se mostrar�n como m�ximo en la barra de navegaci�n
	$_pagi_nav_num_enlaces = 10;
	 
	//Decidimos si queremos que se muesten los errores de mysql
	$_pagi_mostrar_errores = true;//recomendado true s�lo en tiempo de desarrollo.
	 
	//Si tenemos una consulta compleja que hace que el Paginator no funcione correctamente, 
	//realizamos el conteo alternativo.
	$_pagi_conteo_alternativo = true;//recomendado false.
	 
	//Supongamos que s�lo nos interesa propagar estas dos variables
	$_pagi_propagar = array("URL","recetanombre");//No importa si son POST o GET
	 
	//Definimos qu� estilo CSS se utilizar� para los enlaces de paginaci�n.
	//El estilo debe estar definido previamente
	$_pagi_nav_estilo = "paginacion";

	//definimos qu� ir� en el enlace a la p�gina anterior
	$_pagi_nav_anterior = "&laquo; Anterior"; // &lt;";// podr�a ir un tag <img> o lo que sea
	 
	//definimos qu� ir� en el enlace a la p�gina siguiente
	$_pagi_nav_siguiente = "Siguiente &raquo;"; //" &gt;";// podr�a ir un tag <img> o lo que sea

	$_pagi_htaccess = "";

	//Incluimos el script de paginaci�n. �ste ya ejecuta la consulta autom�ticamente 
	include("paginator.inc.php"); 
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
		<script src="js/menu.js"></script>
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
                  <area shape="rect" coords="36,5,357,75" href="index.html">
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
							<li><form method="post" action="recetas.php"> 
                    
                    <div class="active-links">
                      
                      <input type="text" id="nomreceta" name="nomreceta" size="50" placeholder="Buscar receta o ingredientes" />                                             
                           
                      <div id="signin-dropdown" align="left">           
                                  
                    <label><span>Categor&iacute;a</span></label>
                        <select name="categoria" id="categoria">
                            <?php 
                              $consulta=mysql_query("SELECT DISTINCT c.id as id, c.nomcategoria as nomcategoria FROM categoria c INNER JOIN diannakennedy d ON c.id = d.idcategoria WHERE d.Publico = 1 ORDER BY c.orden", $conexion);  
                        // Voy imprimiendo el select de nomcategoria
                        echo "<option value='0'>Elige</option>";  
                        while($registro=mysql_fetch_array($consulta))
                        {
                          // Convierto los caracteres conflictivos a sus entidades HTML correspondientes para su correcta visualizacion
                          $registro[1]=htmlentities($registro[1]);
                          echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
                        }
                      ?>
                    </select>
                    
                    <br>
                        <label><span>Ingrediente</span></label>
                        <input type="text" size="50" id="ingrediente" name="ingrediente" />
                      <div id="suggestions"></div>          

                        <label><span>Estado</span></label>
                        <select name="estados" id="estados">
                            <?php 
                              $consulta=mysql_query("SELECT DISTINCT e.id as id, e.nomestado as nomestado FROM estados e INNER JOIN diannakennedy d ON e.id = d.idestado WHERE d.Publico = 1 ORDER BY e.nomestado", $conexion); 
                        // Voy imprimiendo el select de estado
                        echo "<option value='0'>Elige</option>";  
                        while($registro=mysql_fetch_array($consulta))
                        {
                          // Convierto los caracteres conflictivos a sus entidades HTML correspondientes para su correcta visualizacion
                          $registro[1]=htmlentities($registro[1]);
                          echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
                        }
                      ?>
                    </select>

                    <br><br>

                          <center><button type="submit">Buscar receta</button></center>

                      </div>
                    </div>
                  
                  </form></li>
						</ul>
			  		</nav>

	</div>
			
		<!-- Main -->
			<section class="wrapper style1">
				<div class="container">
                <header>
						<h3 align="right"><?php 
											if ($_pagi_totalReg <=5)
												echo " <span class=fuente8><b>Se encontraron $_pagi_totalReg recetas.</b></span>";
											else
						                    	echo $_pagi_info; 
						                  ?></h3>
				</header>

				<?php 					
					echo "<ul>";

					//Leemos y escribimos los registros de la p�gina actual 
					$i = 1;
					while($row = mysql_fetch_array($_pagi_result))
					{ 							
						echo "<li>";
						$row['recetanombre']=htmlentities($row['recetanombre']);
						echo "<h2><a href='muestrareceta.php?urlreceta=".$row['URL']."&nombrereceta=".$row['recetanombre']."'><img src='images/thumb".$i.".jpg' width='46' height='46' alt='' />&nbsp;&nbsp;&nbsp;".$row['recetanombre']."</a></h2>";
					    echo "<p>&nbsp;&nbsp;&nbsp;Tal vez una breve descripci�n... </p><br><br>";
					    echo "</li>";
					    $i += 1;
					    if ($i == 4)
					    	$i = 1;
					}

					echo "</ul>";

					//Incluimos la barra de navegaci�n 
					echo"<center><p>".$_pagi_navegacion."</p></center>";
					//echo"<p>Mostrando Registrados ".$_pagi_info."</p>";
				?>                
               
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