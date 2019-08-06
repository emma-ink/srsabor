<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
<meta http-equiv="X-UA-Compatible" content="IE=11" />

<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<meta name="Description" content="Somos una empresa orgullosamente mexicana, responsable de nuestro medio ambiente pues nuestros empaques se incorporan a la naturaleza al 100% en un plazo de 3 a 5 años."/>
<meta property="og:url" content="https://www.inkwonders.com/srsabor/"/>
<meta property="og:title" content="SEÑOR SABOR"/>
<meta property="og:image" content="https://www.inkwonders.com/srsabor/img/logo.jpg"/>
<meta property="og:description" content="Somos una empresa orgullosamente mexicana, responsable de nuestro medio ambiente pues nuestros empaques se incorporan a la naturaleza al 100% en un plazo de 3 a 5 años."/>

<title>AVISO DE PRIVACIDAD</title>
<link rel="stylesheet" href="estilo.css" />
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script>
  $(document).ready(function(){
    $("#logo-ss,#btnHomeMovil").click(function(){
      window.location="index.php";
    });
    $("#bSomos,#btnSomosMovil").click(function(){
      window.location="index.php#lechuga";
    });
    $("#bProducto,#btnProductosMovil").click(function(){
      window.location="index.php#productos";
    });
    $("#bReceta,#btnRecetasMovil").click(function(){
      window.location="index.php#recetas";
    });
    $("#bContacto").click(function(){
      $('html, body').animate({scrollTop: ($('#contacto').offset().top - 50) }, 'slow');
    });
    $('#btnContactoMovil').click(function() {
      $('html, body').animate({scrollTop: ($('#contacto').offset().top - 100) }, 'slow', function(){
        $("#contenidoMenuMovil").animate({
          height: '0'
        }, "slow", function(){ document.getElementById("contenidoMenuMovil").style.display = "none"; });
        $("#menuMovil").animate({
          height: '60px'
        }, "slow");
        $('#container').removeClass("change");
      });
    });
  });
  onscroll=function(){
    var sc=Math.max(document.documentElement.scrollTop,document.body.scrollTop);
    var altoHa = $('#head-aviso').height();
    var altoH = $('#aviso').height();
    var inicio = (altoH + altoHa - 800);

    if(sc > inicio){
      $("#logo-ss").fadeIn('fast');
      $('#hojas').fadeIn('slow');
      $('#hojas').addClass('animation-a');
    }else{
      document.getElementById("logo-ss").style.display = "none";
      $('#hojas').fadeOut('slow');
    }

    // if(sc > hojas){
    //   $('#hojas').fadeIn('slow');
    //   $('#hojas').addClass('animation');
    //
    //   $('#hojas').fadeOut('slow');
    // }else{
    // }
  }

  function myFunction(x) {
  	x.classList.toggle("change");

  	if(document.getElementById("contenidoMenuMovil").style.display == "none")
  	{
  		document.getElementById("contenidoMenuMovil").style.display = "";
  		$("#menuMovil").animate({
  			height: '100%'
  		}, "slow");
  		$("#contenidoMenuMovil").animate({
  			height: '100%'
  		}, "slow");

  	}
  	else{

  		$("#contenidoMenuMovil").animate({
  			height: '0'
  		}, "slow", function(){ document.getElementById("contenidoMenuMovil").style.display = "none"; });
  		$("#menuMovil").animate({
  			height: '60px'
  		}, "slow");
  	}
  }
</script>
</head>
<body>
  <?php include('header.php') ?>
  <section id="head-aviso"></section>
  <section id="aviso">
    <div class="contenedor-a">
      <a href="index.php"><img src="img/logo.svg" class="logo-aviso"/></a><br />
      <span class="titulo-aviso" >AVISO DE PRIVACIDAD</span><br /><br />
      <div style="text-align:justify">
        <p class="texto-a">
          Los datos personales que “El Colegio” requiera tanto de los padres de familia, de los alumnos, o tutores de los alumnos, le serán solicitados personalmente y directamente y siempre serán recabados por escrito, el proporcionar los datos solicitados implica el conocimiento del presente aviso y el consentimiento de los datos para su tratamiento.
        </p>
        <span class="subtitulo-aviso">1.1. DATOS PERSONALES DEL PADRE Y LA MADRE RECABADOS Y TRATADOS POR EL COLEGIO:</span>
        <ol class="lista-ordenada">
          <li>Datos Identificación: nombre completo, fecha de nacimiento, estado civil, domicilio, teléfono, correo electrónico, Registro Federal de Contribuyentes con homoclave (RFC), firma, fotografía e imagen.</li>
          <li>Datos Académicos: estudios profesionales, título profesional, certificados de estudios</li>
          <li>Datos Laborales: nombre y domicilio de la empresa, giro comercial, teléfono, correo electrónico, cargo o puesto que desempeña y ocupación.</li>
          <li>Datos Financieros y Patrimoniales: bienes muebles e inmuebles, ingresos y egresos, cuentas bancarias, cuentas de tarjetas de crédito, información fiscal, declaraciones de impuestos, recibos de nómina y datos sobre la situación económica familiar.</li>
          <li>Datos Sensibles: creencias religiosas, situación familiar.</li>
        </ol>
        <span class="subtitulo-aviso">1.2 FINALIDAD DEL TRATAMIENTO DE DATOS PERSONALES DEL PADRE Y MADRE: </span>
        <p class="texto-a">
          Su información personal será utilizada para proveer los servicios educativos, académicos, deportivos, culturales, formativos y recreativos que ha solicitado, especificando las siguientes finalidades necesarias para la prestación del servicio y las secundarias, las cuales son accesorias al servicio solicitado, pero que nos permiten brindarle una mejor atención.
        </p>
        <p class="texto-a">
          Una vez proporcionados los datos personales, usted tiene derecho de acceder, rectificar y cancelar los datos personales proporcionados, así como de oponerse al tratamiento de las finalidades secundarias de los mismos (en lo sucesivo Derechos ARCO). Podrá limitar su uso y divulgación de los datos que tengan una finalidad secundaria, así como revocar el consentimiento que para tal fin nos haya otorgado.
        </p>
      </div>
    </div>
  </section>
  <section id="soriana">
    <div class="div-text-soriana">
      ENCUENTRA NUESTROS<br />
      PRODUCTOS EN:
    </div>
    <img src="img/soriana.svg" class="img-soriana" />
    <img src="img/hojas.png" class="a-hojas" id="hojas"/>
  </section>
  <section id="contacto">
    <div class="contenedor-c">
      <div id="contacto-resp">
        <span class="titulo" style="color:#1D3A28">Contacto</span><br /><br /><br />
        <span class="msgError" id="msgNombre"></span>
        <input type="text" id="txtNombre" name="txtNombre" class="input-text" style="border-top: 2px solid #92D30B" placeholder="NOMBRE" maxlength="25"/>
        <span class="msgError" id="msgCorreo"></span>
        <input type="email" id="txtCorreo" name="txtCorreo" class="input-text" placeholder="CORREO" maxlength="50"/>
        <span class="msgError" id="msgMensaje"></span>
        <textarea id="txtMensaje" name="txtMensaje" class="input-text text-area" placeholder="MENSAJE" maxlength="250"></textarea>
        <br /><br /><br />
        <input type="button" class="buttonC" id="btnEnviar" value="ENVIAR" disabled/>
      </div>
      <br /><br /><br />
      <span class="text-c">Huimilpan, Querétaro</span><br />
      <span class="text-c">México CP 76981</span><br />
      <span class="text-c">Tel: <a href="tel:4484360071" class="tel">(448) 436 0071</a> / <a href="tel:4422488646" class="tel">(442) 248 8646</a></span><br />
      <div class="input-text" style="width:250px;height:25px;display:inline-block"></div><br />
      <br /><br />
      <span class="texto-f">Copyright © <?php echo date('Y') ?> SEÑOR SABOR <br class="web-br"/>Desarrollado por INK</span>
      <img class="tenedor" src="img/tenedor.jpg" />
    </div>
    <div class="fondo-c"></div>
  </section>
</body>
</html>
