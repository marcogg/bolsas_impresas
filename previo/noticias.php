<?php session_start();?>
<?php 
include('include/config.php');
include('include/phpfunctions.php');

$title = 'Bolsas Impresas para Mandado';
$keywords = 'Bolsas impresas para mandado, Bolsas impresas para mandado ideal, Bolsas impresas para mandado con su logo Impreso, Bolsas impresas para mandado Tipo Lona-Poliester-Canasta';
$description = 'Bolsas impresas para mandado, Bolsas impresas para mandado ideal, Bolsas impresas para mandado Tipo Lona-Poliester-Canasta, Bolsas impresas para mandado con su logo Impreso';
$h1 = 'Bolsas impresas para mandado mexico';
$h2 = 'Bolsas impresas para mandado monterrey';

if (isset($_GET['id']))
{
	$e = mysql_query("SELECT nombre,title,keywords,description,h1,h2,contenido FROM contenidos WHERE id = ".Limpia($_GET['id']));
	if (mysql_num_rows($e) > 0)
	{
		$earr = mysql_fetch_array($e);
		if (trim($earr['title']) <> '') { $title = $earr['title']; }
		if (trim($earr['keywords']) <> '') { $keywords = $earr['keywords']; }
		if (trim($earr['description']) <> '') { $description = $earr['description']; }
		$h1 = $earr['h1'];
		$h2 = $earr['h2'];
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title?></title>
<meta name="Robots" content="Index,Follow">
<meta http-equiv="Content-Language" content="es-mx">
<meta name="description" content="<?php echo $description?>">
<meta name="keywords" content="<?php echo $keywords?>">
<meta name="author" content="AmericaNet">
<meta name="copyright" content="AmericaNet">
<meta name="rating" content="General">
<meta http-equiv="Reply-to" content="ventas@americanet.mx">
<meta name="creation_Date" content="18/05/2004">
<meta name="revisit-after" content="7 days">
<meta name="doc-rights" content="Copywritten work">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="<?php echo RUTA?>css/estilos.css" rel="stylesheet" type="text/css" />

	<!---carrusel--->
    <script type="text/javascript" src="<?php echo RUTA?>include/carrusel/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="<?php echo RUTA?>include/carrusel/jquery.carouFredSel-6.2.1-packed.js"></script>
    
    <!---lightbox--->
    <script src="<?php echo RUTA?>include/lightbox/lightbox-2.6.min.js"></script>
    <link href="<?php echo RUTA?>include/lightbox/css/lightbox.css" rel="stylesheet" />
    
    <!---validacion--->
	<script type="text/javascript">
    function Trim(cadena)
    {
        cadena = cadena.replace(/^\s*|\s*$/g,"");
        return cadena;
    }
    
    function Valida(form)
    {
        var enviar = true;
        if (Trim(form.nombre.value) == '') { form.nombre.style.background = '#f4e4a4'; form.nombre.style.border = '1px #9e0a14 solid'; enviar = false; }
        if (Trim(form.telefono.value) == '') { form.telefono.style.background = '#f4e4a4'; form.telefono.style.border = '1px #9e0a14 solid'; enviar = false; }
        if (Trim(form.email.value) == '') { form.email.style.background = '#f4e4a4'; form.email.style.border = '1px #9e0a14 solid'; enviar = false; }
        if (Trim(form.ciudad.value) == '') { form.ciudad.style.background = '#f4e4a4'; form.ciudad.style.border = '1px #9e0a14 solid'; enviar = false; }
        if (Trim(form.producto.value) == '') { form.producto.style.background = '#f4e4a4'; form.producto.style.border = '1px #9e0a14 solid'; enviar = false; }
        if (Trim(form.cantidad.value) == '') { form.cantidad.style.background = '#f4e4a4'; form.cantidad.style.border = '1px #9e0a14 solid'; enviar = false; }
        if (Trim(form.medidas.value) == '') { form.medidas.style.background = '#f4e4a4'; form.medidas.style.border = '1px #9e0a14 solid'; enviar = false; }
        if (Trim(form.mensaje.value) == '') { form.mensaje.style.background = '#f4e4a4'; form.mensaje.style.border = '1px #9e0a14 solid'; enviar = false; }
        if (!enviar) {  alert('Los campos marcados con * son requeridos'); }
        return enviar;
    }
    </script>
<script type="text/javascript">
function OpenRedes(op) {
	if (op == 1) {window.open('http://www.facebook.com/sharer.php?u=<?php echo dameUrlActual();?>&t=<?php echo $title;?>','_blank','height=350,width=540,status=no,toolbar=no,menubar=no,location=no,scrollbars=yes,left=150,top=50');}
	if (op == 2) {window.open('https://twitter.com/intent/tweet?original_referer=<?php echo dameUrlActual();?>&text=prod-industrial&tw_p=tweetbutton&url=<?php echo dameUrlActual();?>','_blank','height=350,width=540,status=no,toolbar=no,menubar=no,location=no,scrollbars=yes,left=150,top=50');}
	if (op == 3) {window.open('https://plusone.google.com/_/+1/confirm?hl=es&url={<?php echo dameUrlActual();?>}','_blank','height=350,width=540,status=no,toolbar=no,menubar=no,location=no,scrollbars=yes,left=150,top=50');}
	if (op == 4) {window.open('http://www.linkedin.com/cws/share?url=<?php echo dameUrlActual();?>&original_referer=<?php echo dameUrlActual();?>&token=&isFramed=false&lang=en_US','_blank','height=350,width=540,status=no,toolbar=no,menubar=no,location=no,scrollbars=yes,left=150,top=50');}
}
</script>
<!---Analytics--->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-33321200-9', 'auto');
  ga('send', 'pageview');

	</script>
</head>

<body>
<div class="float seo">
	<h1><b><i><?php echo $h1 ?></i></b></h1>
    <h2><b><i></i><?php echo $h2 ?></b></h2>
</div>
<div class="float top">
	<div class="bodyCenter">
    	<div class="centerFloat">
        	<p class="topTxt01">Bolsas impresas</p>
            <p class="topTxt01 topTxt02" style="margin-top:-15px;font-size:23px;color:#fff;"><b>¡Llámanos ahora!<br /> 55 8442 9080</b></p>
        	<img src="<?php echo RUTA?>images/logo.png" class="logo" alt="Bolsas impresas para mandado" />
        	<p class="topTxt01 topTxt02" style="margin-top:15px;">¡Excelente tiempo de entrega!<br />¡Ofrecemos el mejor precio!<br />¡Compruébelo!</p>
        </div>
    </div>
</div>
<div class="float carrusel">
	<div class="bodyCenter">
    	<div class="centerFloat">
            <!---CARRUSEL--->
        	<div class="contCarr">
            	<div class="carrPrev" id="foo1_prev">&laquo;</div>
                <div class="carrPrev carrNext" id="foo1_next">&raquo;</div>
            	<div id="foo1">
                	<a href="<?php echo RUTA?>images/portfolio/portfolio23.jpg" data-lightbox="image-1" class="item"><img src="<?php echo RUTA?>images/portfolio/portfolio23.jpg" alt="Bolsas impresas para mandado" /></a>
                	<a href="<?php echo RUTA?>images/portfolio/portfolio5.jpg" data-lightbox="image-2" class="item"><img src="<?php echo RUTA?>images/portfolio/portfolio5.jpg" alt="Bolsas impresas para mandado" /></a>
                	<a href="<?php echo RUTA?>images/portfolio/portfolio15.jpg" data-lightbox="image-3" class="item"><img src="<?php echo RUTA?>images/portfolio/portfolio15.jpg" alt="Bolsas impresas para mandado" /></a>
                	<a href="<?php echo RUTA?>images/portfolio/portfolio16.jpg" data-lightbox="image-4" class="item"><img src="<?php echo RUTA?>images/portfolio/portfolio16.jpg" alt="Bolsas impresas para mandado" /></a>
                	<a href="<?php echo RUTA?>images/portfolio/portfolio17.jpg" data-lightbox="image-5" class="item"><img src="<?php echo RUTA?>images/portfolio/portfolio17.jpg" alt="Bolsas impresas para mandado" /></a>
                	<a href="<?php echo RUTA?>images/portfolio/portfolio18.jpg" data-lightbox="image-6" class="item"><img src="<?php echo RUTA?>images/portfolio/portfolio18.jpg" alt="Bolsas impresas para mandado" /></a>
                	<a href="<?php echo RUTA?>images/portfolio/portfolio19.jpg" data-lightbox="image-7" class="item"><img src="<?php echo RUTA?>images/portfolio/portfolio19.jpg" alt="Bolsas impresas para mandado" /></a>
                	<a href="<?php echo RUTA?>images/portfolio/portfolio20.jpg" data-lightbox="image-8" class="item"><img src="<?php echo RUTA?>images/portfolio/portfolio20.jpg" alt="Bolsas impresas para mandado" /></a>
                	<a href="<?php echo RUTA?>images/portfolio/portfolio21.jpg" data-lightbox="image-9" class="item"><img src="<?php echo RUTA?>images/portfolio/portfolio21.jpg" alt="Bolsas impresas para mandado" /></a>
                </div>
            </div>        
	            <script type="text/javascript">
	                $("#foo1").carouFredSel({
	                    auto : true,
	                    prev : "#foo1_prev",
	                    next : "#foo1_next",
						scroll : {
							duration        : 2000,                         
							pauseOnHover    : true,
						},
	                });
	            </script>
                <!---FIN CARRUSEL--->
        </div>
    </div>
</div>
<div class="float cuerpo">
<a href="<? if (!isset($_GET['id'])) {echo RUTA;} else {echo RUTA.'noticias.php';} ?>" class="float btnNoticias"><? if (!isset($_GET['id'])) {echo 'Volver a inicio';} else { echo 'Volver a noticias';} ?></a>
	<div class="bodyCenter">
    	<div class="centerFloat">
<!---------noticias--------->
<?php
if (!isset($_GET['id']))
{
	$e = mysql_query("SELECT id,nombre,contenido FROM contenidos ORDER BY id DESC");
	if (mysql_num_rows($e) > 0)
	{
?>
<div class="clear" style="height:15px;"></div>
<p class="pcTitulo">Noticias</p>
<?php
		while ($earr = mysql_fetch_array($e))
		{
			$image = 'sinImagen.jpg';
			$e1 = mysql_query("SELECT * FROM galerias WHERE noticiaId =".$earr['id']." ORDER BY orden ASC LIMIT 1");
			if (mysql_num_rows($e1) > 0) {
				$earr1 = mysql_fetch_array($e1); $imagen = $earr1['archivo'];
			}
			
			$previo = substr((strip_tags($earr['contenido'])),0,200).'...';
?>
	<a href="<?php echo RUTA.'noticia/'.$earr['id'].'-'.strtolower(camString($earr['nombre'])).'.html'?>" class="centerFloat">
	<div class="notListItem">
    	<div class="imagen">
        <?php 
		if ($imagen != 'sinImagen.jpg') {?>
        	<table width="80" height="80" cellpadding="0" cellspacing="0">
            	<tr><td align="center" valign="middle">
                <img src="<?php echo RUTA?>images/galerias/<?php echo $imagen?>" />
                </td></tr>
            </table>
            <?php 
		} ?>
        </div>
        <div class="right">
            <p class="titulo"><?php echo $earr['nombre']?></p>
            <p class="txt"><?php echo $previo?></p>
        </div>
    </div>
	</a>
<?php
		}
	}
	else
	{
		echo '<p class="ntxt">No se han agregado Noticias</p>';
	}
	?>
   <?php
}
else
{
	$e = mysql_query("SELECT * FROM contenidos WHERE id = ".Limpia($_GET['id']));
	if (mysql_num_rows($e) > 0)
	{
		$earr = mysql_fetch_array($e);
		$n = mysql_query("SELECT * FROM galerias WHERE noticiaId = ".$earr['id']." ORDER BY orden ASC");
?>
<div class="nContLeft">
	<h3 class="h3"><?php echo $earr['nombre']?></h3>
<?php
    echo $earr['contenido'];
?>
</div>
<div class="nContRight">
<table cellpadding="0" cellspacing="0" align="center"><tr>
                    <td align="center" valign="middle">
                    	<a class="compartirA" rel="nofollow" href="javascript:OpenRedes(1)" target="_blank">
                        <div class="compartirItem">
                            <img src="<?php echo RUTA?>images/face.png" class="comFace" />
                            <div class="compartirSombra"></div>
                        </div>
                        </a>
                        <a class="compartirA" rel="nofollow" href="javascript:OpenRedes(2)" target="_blank">
                        
                        <div class="compartirItem">
                            <img src="<?php echo RUTA?>images/twit.png" class="comTwit" />
                            <div class="compartirSombra"></div>
                        </div>
                        </a>
                        <a class="compartirA" rel="nofollow" href="javascript:OpenRedes(3)" target="_blank">
                        <div class="compartirItem">
                            <img src="<?php echo RUTA?>images/gplus.png" class="comGplus" />
                            <div class="compartirSombra"></div>
                        </div>
                        </a>
                        <a class="compartirA" rel="nofollow" href="javascript:OpenRedes(4)" target="_blank">
                        
                        <div class="compartirItem">
                            <img src="<?php echo RUTA?>images/link.png" class="comLink" />
                            <div class="compartirSombra"></div>
                        </div>
                        </a>
                    </td>
                </tr></table>
<?php
		if (mysql_num_rows($n) > 0)
		{
			while ($nR = mysql_fetch_array($n))
			{
				$arrImagenes[] = array('imagen' => $nR['archivo']);
			}
?>
	<div class="cCarDtlle">
        <div id="foo2">      
<?php
			foreach ($arrImagenes as $k => $v)
			{
?>
			<table width="350" height="350" cellpadding="0" cellspacing="0">
               	<tr><td align="center" valign="middle">
                 	<img src="<?php echo RUTA?>images/galerias/<?php echo $v['imagen']?>" style="max-height:350px !important; max-width:350px !important;" />  
                </td></tr>
            </table>
<?php
			}
?>
        </div>
    </div>
        
        <div class="carThumbs">
<?php
			foreach ($arrImagenes as $k => $v)
			{
?>
                 	<a href="#" class="dev7-caroufredsel-thumb"><img src="<?php echo RUTA?>images/galerias/<?php echo $v['imagen']?>" /></a>
<?php
			}
?>
        </div>
<?php
		}
?>
                <script type="text/javascript">
                    $("#foo2").carouFredSel({
                        auto : true,
						direction: "left",
						height: 350,
						scroll : {
							duration        : 1500,                         
							pauseOnHover    : true,
							fx			    : "crossfade",
						},
						pagination	: {
							container		: ".carThumbs",
							anchorBuilder   : false
						}  
                    });
                </script>
                <!---FIN CARRUSEL--->
</div>
          
<?php
	}
}
?>

<!----fin de las noticias--->
	<div class="clear" style="height:30px;"></div>
            <p class="pcTitulo">Somos profesionales en la fabricación de bolsas impresas publicitarias ¡Contáctanos!</p>
            <form class="forma" method="post" action="<?php echo RUTA?>send.php?mod=Ventas" onsubmit="return Valida(this);">
            	<div class="fLeft">
                    <label for="nombre">Nombre:*</label>
                    <input type="text" id="nombre" name="nombre" />  
                    <label for="telefono">Teléfono:*</label>
                    <input type="text" id="telefono" name="telefono" />
                    <label for="email">Email:*</label>
                    <input type="text" id="email" name="email" />
                    <label for="ciudad">Ciudad:*</label>
                    <input type="text" id="ciudad" name="ciudad" />
                    <label for="producto">Producto de interés:*</label>
                    <input type="text" id="producto" name="producto" />
                </div>
                <div class="fLeft">
                    <label for="cantidad">Cantidad Requerida:*</label>
                    <input type="text" id="cantidad" name="cantidad" />
                    <label for="medidas">Medidas:*</label>
                    <input type="text" id="medidas" name="medidas" />
                    <label for="mensaje">Describa su necesidad:*</label>
                    <textarea name="mensaje" id="mensaje"></textarea>
                    <img src="<?php echo RUTA?>include/CAPTCHA/aasup.php?<?=session_id()?>" alt="" />
                    <label for="imagetext">Teclea aqui el texto de la imagen.</label>
                    <input type="text" name="imagetext" id="imagetext" />
                    <div class="clear"></div>
                    <input type="submit" value="Enviar" class="enviar" />
                </div>
                <div class="fLeft">
                	<p class="fTitulo">Contacto Directo</p>
                    <p class="ftxt">
                    	<b>ventas@bolsas-impresas.com</b><br /><br />
                        ATENCIÓN A VENTAS<br />
                        55 8442 9080<br /><br />
                    </p>
                </div>
            </form>     
        </div>
    </div>
    <!---footer--->
    <div class="float footer">
      	<p class="float txtfoot">Copyright © 2012-2019 BOLSAS IDEAL, Bolsas Impresas para Mandado, Bolsas Publicitarias, Publicidad en Bolsas<br /><br /><a href="http://sandovaltecnologias.com/" target="_blank">Una División de <img src="<?php echo RUTA?>images/satec-logo.png" width="77" height="19" /></a></p>
    </div>
</div>
    <script type="text/javascript">
        var _mfq = _mfq || [];
        (function () {
        var mf = document.createElement("script"); mf.type = "text/javascript"; mf.async = true;
        mf.src = "//cdn.mouseflow.com/projects/3b769a47-2399-4373-a8e8-c6a956ed0b6c.js";
        document.getElementsByTagName("head")[0].appendChild(mf);
      })();
    </script>
</body>
</html>
