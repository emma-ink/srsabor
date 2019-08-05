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

<title>SEÑOR SABOR</title>
<link rel="stylesheet" href="estilo.css" />
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script>
  $(document).ready(function(){
    $("#logo-ss,#btnHomeMovil").click(function(){
      $('html, body').animate({scrollTop: ($('#home').offset().top) }, 'slow');
    });
    $("#bSomos").click(function(){
      $('html, body').animate({scrollTop: ($('#lechuga').offset().top - 50) }, 'slow');
    });
    $("#bProducto").click(function(){
      $('html, body').animate({scrollTop: ($('#productos').offset().top - 150) }, 'slow');
    });
    $("#bReceta").click(function(){
      $('html, body').animate({scrollTop: ($('#recetas').offset().top - 50) }, 'slow');
    });
    $("#bContacto").click(function(){
      $('html, body').animate({scrollTop: ($('#contacto').offset().top - 50) }, 'slow');
    });
    $('#btnSomosMovil').click(function() {
      $('html, body').animate({scrollTop: ($('#lechuga').offset().top - 100) }, 'slow', function(){
        $("#contenidoMenuMovil").animate({
          height: '0'
        }, "slow", function(){ document.getElementById("contenidoMenuMovil").style.display = "none"; });
        $("#menuMovil").animate({
          height: '60px'
        }, "slow");
        $('#container').removeClass("change");
      });
    });
    $('#btnProductosMovil').click(function() {
      $('html, body').animate({scrollTop: ($('#productos').offset().top - 100) }, 'slow', function(){
        $("#contenidoMenuMovil").animate({
          height: '0'
        }, "slow", function(){ document.getElementById("contenidoMenuMovil").style.display = "none"; });
        $("#menuMovil").animate({
          height: '60px'
        }, "slow");
        $('#container').removeClass("change");
      });
    });
    $('#btnRecetasMovil').click(function() {
      $('html, body').animate({scrollTop: ($('#recetas').offset().top - 100) }, 'slow', function(){
        $("#contenidoMenuMovil").animate({
          height: '0'
        }, "slow", function(){ document.getElementById("contenidoMenuMovil").style.display = "none"; });
        $("#menuMovil").animate({
          height: '60px'
        }, "slow");
        $('#container').removeClass("change");
      });
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
    //VALIDACIONES
    $('#txtCorreo').on('input', function() {

      var txtNombre = $('#txtNombre').val();
      var txtCorreo = $('#txtCorreo').val();
      var txtMensaje = $('#txtMensaje').val();

      //TEST
      var correo = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      var letras = /^[a-zA-Z áÁéÉíÍóÓúÚñÑüÜàè]+$/;

      //HABILITAR BOTON
      habilitar(txtNombre,txtCorreo,txtMensaje);

      //VALIDAR CAMPO
      if(txtCorreo.length == 0 ||  !txtCorreo.trim()){
        document.getElementById('msgCorreo').innerHTML = "El campo 'Correo' esta vacío<br>";
        $('#txtCorreo').addClass('error');
      }else if(txtCorreo.length < 7){
        document.getElementById('msgCorreo').innerHTML = "El campo 'Correo' debe tener al menos 7 caracteres.<br>";
        $('#txtCorreo').addClass('error');
      }else if(!correo.test(txtCorreo)){
        document.getElementById('msgCorreo').innerHTML = "El campo 'Correo' no es un correo electronico.<br>";
        $('#txtCorreo').addClass('error');
      }else{
        document.getElementById('msgCorreo').innerHTML = "";
        $('#txtCorreo').removeClass('error');
      }
    });
    $('#txtNombre').on('input', function() {

      var txtNombre = $('#txtNombre').val();
      var txtCorreo = $('#txtCorreo').val();
      var txtMensaje = $('#txtMensaje').val();

      //TEST
      var correo = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      var letras = /^[a-zA-Z áÁéÉíÍóÓúÚñÑüÜàè]+$/;

      //HABILITAR BOTON
      habilitar(txtNombre,txtCorreo,txtMensaje);

      //VALIDAR CAMPO
      if(txtNombre.length == 0 ||  !txtNombre.trim()){
        document.getElementById('msgNombre').innerHTML = "El campo 'Nombre' esta vacío<br>";
        $('#txtNombre').addClass('error');
      }else if(txtNombre.length < 3){
        document.getElementById('msgNombre').innerHTML = "El campo 'Nombre' debe tener al menos 3 caracteres.<br>";
        $('#txtNombre').addClass('error');
      }else if(!letras.test(txtNombre)){
        document.getElementById('msgNombre').innerHTML = "El campo 'Nombre' tiene caracteres invalidos.<br>";
        $('#txtNombre').addClass('error');
      }else{
        document.getElementById('msgNombre').innerHTML = "";
        $('#txtNombre').removeClass('error');
      }
    });

    $('#txtMensaje').on('input', function() {

      var txtNombre = $('#txtNombre').val();
      var txtCorreo = $('#txtCorreo').val();
      var txtMensaje = $('#txtMensaje').val();

      //TEST
      var correo = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      var letras = /^[a-zA-Z áÁéÉíÍóÓúÚñÑüÜàè]+$/;

      //HABILITAR BOTON
      habilitar(txtNombre,txtCorreo,txtMensaje);

      //VALIDAR CAMPO
      if(txtMensaje.length == 0 ||  !txtMensaje.trim()){
        document.getElementById('msgMensaje').innerHTML = "El campo 'Mensaje' esta vacío<br>";
        $('#txtMensaje').addClass('error');
      }else if(txtMensaje.length < 5){
        document.getElementById('msgMensaje').innerHTML = "El campo 'Mensaje' debe tener al menos 5 caracteres.<br>";
        $('#txtMensaje').addClass('error');
      }else{
        document.getElementById('msgMensaje').innerHTML = "";
        $('#txtMensaje').removeClass('error');
      }
    });
    $('#btnEnviar').click(function(){

      var txtNombre = $('#txtNombre').val();
      var txtMensaje = $('#txtMensaje').val();
      var txtCorreo = $('#txtCorreo').val();

      $.ajax({
        url: "enviarMail.php",
        type:"POST",
        data:{txtNombre:txtNombre, txtMensaje:txtMensaje, txtCorreo:txtCorreo},
        success: function (datos) {
          $("#contacto-resp").html(datos).show();
        }
      });
    });
  });
  onscroll=function(){
    var sc=Math.max(document.documentElement.scrollTop,document.body.scrollTop);
    var altoH = $('#home').height();
    var altoN = $('#nosotros').height();
    var altoP = $('#productos').height();
    var altoR = $('#recetas').height();
    var inicio = (altoH - 800);
    var hojas = (altoH + altoN + altoP + altoR - 800);

    if(sc > inicio){
      $("#logo-ss").fadeIn('fast');
    }else{
      document.getElementById("logo-ss").style.display = "none";
    }

    if(sc > hojas){
      $('#hojas').fadeIn('slow');
      $('#hojas').addClass('animation');

    }else{
      $('#hojas').fadeOut('slow');
    }
  }

  function nuevoProducto(e){
    if(e==1){
      $('#S1').addClass('active-dot');
      $('#S2').removeClass('active-dot');
      $('#S3').removeClass('active-dot');
      $('#S4').removeClass('active-dot');
    }else if(e==2){
      $('#S1').removeClass('active-dot');
      $('#S2').addClass('active-dot');
      $('#S3').removeClass('active-dot');
      $('#S4').removeClass('active-dot');
    }else if(e==3){
      $('#S1').removeClass('active-dot');
      $('#S2').removeClass('active-dot');
      $('#S3').addClass('active-dot');
      $('#S4').removeClass('active-dot');
    }else if(e==4){
      $('#S1').removeClass('active-dot');
      $('#S2').removeClass('active-dot');
      $('#S3').removeClass('active-dot');
      $('#S4').addClass('active-dot');
    }
    $.ajax({
      url:"cambiar-producto.php",
      type: "POST",
      data: {slnum:e},
      dataType: 'json',
      success:function(ui) {
        $('#slnumb').html(ui[0].numero);
        $('#slimg').fadeOut('slow',function(){
          $('#slimg').attr("src",ui[0].imagen).fadeIn('slow');
        });
        $('#slsub').fadeOut('slow',function(){
          $('#slsub').html(ui[0].subtitulo).fadeIn('slow');
        });
        $('#sldesc').fadeOut('slow',function(){
          $('#sldesc').html(ui[0].descripcion).fadeIn('slow');
        });
      },
      error:function(ts){
        alert(ts.responseText);
      }
    });
  }

  function cambiarReceta(e){
    if(e==1){
      $('#R1').addClass('active-dot');
      $('#R2').removeClass('active-dot');
      $('#R3').removeClass('active-dot');
      $('#R4').removeClass('active-dot');
    }else if(e==2){
      $('#R1').removeClass('active-dot');
      $('#R2').addClass('active-dot');
      $('#R3').removeClass('active-dot');
      $('#R4').removeClass('active-dot');
    }else if(e==3){
      $('#R1').removeClass('active-dot');
      $('#R2').removeClass('active-dot');
      $('#R3').addClass('active-dot');
      $('#R4').removeClass('active-dot');
    }else if(e==4){
      $('#R1').removeClass('active-dot');
      $('#R2').removeClass('active-dot');
      $('#R3').removeClass('active-dot');
      $('#R4').addClass('active-dot');
    }
    $.ajax({
      url:"cambiar-receta.php",
      type: "POST",
      data: {slrec:e},
      dataType: 'json',
      success:function(ri) {
        $('#srnumb').html(ri[0].numero);
        $('#srimg').fadeOut('slow',function(){
          $('#srimg').attr("src",ri[0].imagen).fadeIn('slow');
        });
        $('#titulorec').fadeOut('slow',function(){
          $('#titulorec').html(ri[0].titulo).fadeIn('slow');
        });
        $('#ingred').fadeOut('slow',function(){
          $('#ingred').html(ri[0].ingred).fadeIn('slow');
        });
        $('#pasos').fadeOut('slow',function(){
          $('#pasos').html(ri[0].pasos).fadeIn('slow');
        });
      },
      error:function(ts){
        alert(ts.responseText);
      }
    });
  }
  function habilitar(txtNombre, txtCorreo, txtMensaje){
    var correo = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var letras = /^[a-zA-Z áÁéÉíÍóÓúÚñÑüÜàè]+$/;

    if(txtCorreo.length == 0 || !txtCorreo.trim() || txtNombre.length == 0 ||  !txtNombre.trim() || txtMensaje.length == 0 ||  !txtMensaje.trim()){
      document.getElementById('btnEnviar').disabled = 'true';
    }else if(txtCorreo.length < 7 || txtNombre.length < 3 || txtMensaje.length < 5){
      document.getElementById('btnEnviar').disabled = 'true';
    }else if(!letras.test(txtNombre) || !correo.test(txtCorreo)){
      document.getElementById('btnEnviar').disabled = 'true';
    }else{
      $('#btnEnviar').removeAttr('disabled');
    }
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
<section id="home">
  <img src="img/logo.svg" class="logo-home" />
  <img src="img/lechuga.png" class="lechuga" id="lechuga"/>
</section>
<section id="nosotros">
  <div class="titulo" style="color:#FFF">
    Nosotros
  </div><br class="dots-web"/><br class="dots-web"/>
  <p class="texto-n">
    Sembramos con cariño y cosechamos con amor<br />
    para obtener de la tierra siempre lo mejor<br />
    por eso nuestros vegetales <br />
    no tienen cualquier sabor, sino un señor sabor.<br />
  </p>
</section>
<section id="productos">
  <div class="titulo-movil">
    <span class="titulo" style="color:#1D3A28">Productos</span>
  </div>
  <div class="contenedor">
    <div class="dots">
      <table class="tabla-dots">
        <tr><td><span class="numero" id="slnumb">01</span></td></tr>
        <tr><td><div class="dot active-dot" id="S1" onclick="javascript: nuevoProducto(1)"></div></td></tr>
        <tr><td><div class="dot" id="S2" onclick="javascript: nuevoProducto(2)"></div></td></tr>
        <tr><td><div class="dot" id="S3" onclick="javascript: nuevoProducto(3)"></div></td></tr>
        <tr><td><div class="dot" id="S4" onclick="javascript: nuevoProducto(4)"></div></td></tr>
      </table>
    </div>
    <div class="left-p">
      <img src="img/slider-p01.png" class="img-slider" id="slimg"/>
    </div>
    <div class="right-p">
      <div class="div-titulo titulo-web">
        <span class="titulo" style="color:#1D3A28">Productos</span>
      </div>
      <div class="div-borde-bottom">
        <span class="subtitulo" style="color:#1D3A28" id="slsub">
          LECHUGA SANGRÍA<br />
          RED LEAF LETTUCE<br />
        </span>
      </div>
      <div class="div-borde-bottom">
        <div id="sldesc">
          <p class="texto-p">
            De los diferentes tipos de lechuga, la Romana es la más conocida. De hecho es una de las que más se utiliza para ensaladas. Tiene un tallo vigoroso y una cabeza larga. Puedes diferenciarla del resto porque sus hojas son largas y crujientes y tiene un color verde intenso.
          </p><br />
          <p class="texto-p">
            Y es que esta lechuga no solo es la más barata, sino que es la que más propiedades y vitaminas contiene. Resulta ideal para todo tipo de ensaladas. Y por si no lo sabías, también existe la lechuga Romana en un tamaño más pequeño. Seguramente cuando leas el nombre caerás: los cogollos de Tudela.
          </p>
        </div>
      </div>
      <div class="div-titulo">
        <br />
        <p class="texto-p">
          Somos una empresa orgullosamente mexicana, responsable de nuestro medio ambiente
          pues nuestros empaques se incorporan a la naturaleza al 100% en un plazo de 3 a 5 años.
        </p>
        <br /><br />
        <table class="tabla-marcas">
          <tr>
            <td><img src="img/hechomex.svg" /></td>
            <td><img src="img/recicla.svg" /></td>
            <td><img src="img/d2w.svg" /></td>
            <td><img src="img/socialmente.svg" /></td>
            <td><img src="img/degradable.svg" /></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</section>
<section id="recetas">
  <div class="contenedor-r">
    <div class="cell-mr">
      <span class="titulo t-abs" style="color:#92D30B">Recetas</span>
      <div class="titulo-r"></div>
      <div class="dots-movil">
        <table class="dots-receta">
          <tr>
            <td><span class="numero" id="srnumb">01</span></td>
            <td><div class="dot active-dot margin-bottom" id="R1" onclick="javascript: cambiarReceta(1)"></div></td>
            <td><div class="dot margin-bottom" id="R2" onclick="javascript: cambiarReceta(2)"></div></td>
            <td><div class="dot margin-bottom" id="R3" onclick="javascript: cambiarReceta(3)"></div></td>
            <td><div class="dot margin-bottom" id="R4" onclick="javascript: cambiarReceta(4)"></div></td>
          </tr>
        </table>
      </div>
      <div class="titulo-receta" id="titulorec">ENSALADA CAMPERA<br />CON LECHUGA</div>
      <div class="div-ing" id="ingred">
        <span class="lista-r">Ingredientes</span>
        <ul class="lista-r">
          <li>3 tomates para ensalada</li>
          <li>1 pimiento verde</li>
          <li>150g de patatas</li>
          <li>2 Huevos duros</li>
          <li>25g de cebolla</li>
          <li>75g de aceitunas sin hueso</li>
          <li>1 pastilla de</li>
          <li>Avecrem Caldo de Pollo</li>
          <li>2 Cucharadas de vinagre</li>
          <li>10 cucharadas de aceite de oliva virgen extra</li>
          <li>Pimienta</li>
        </ul>
      </div>
    </div>
    <div class="cell-mr">
      <!-- <img src="img/siguiente.svg" class="img-siguiente-r" /> -->
      <div class="dots-web">
        <span class="sig-r">OTRAS RECETAS</span><br /><br />
        <table class="dots-receta">
          <tr>
            <td><span class="numero" id="srnumb">01</span></td>
            <td><div class="dot active-dot margin-bottom" id="R1" onclick="javascript: cambiarReceta(1)"></div></td>
            <td><div class="dot margin-bottom" id="R2" onclick="javascript: cambiarReceta(2)"></div></td>
            <td><div class="dot margin-bottom" id="R3" onclick="javascript: cambiarReceta(3)"></div></td>
            <td><div class="dot margin-bottom" id="R4" onclick="javascript: cambiarReceta(4)"></div></td>
          </tr>
        </table>
      </div>
      <br /><br />
      <div class="" id="pasos">
        <span class="lista-r">PASO 1</span><br />
        <span class="lista-r">_______</span><br /><br />
        <span class="lista-r">Pela las patatas y córtalas en dados. Seguidamente, ponlas a hervir con 1 pastilla de Avecrem Caldo de Pollo. Mientras, lava todas las verduras y déjalas escurrir unos minutos.</span><br /><br />
        <span class="lista-r">PASO 2</span><br />
        <span class="lista-r">_______</span><br /><br />
        <span class="lista-r">Corta las verduras en trocitos y mézclalas en un bol. Condiméntalas con un poco de pimienta. Añade al bol los huevos duros cortados en láminas y las aceitunas, que se pueden cortar a trozos si se prefiere.</span><br /><br />
        <span class="lista-r">PASO 3</span><br />
        <span class="lista-r">_______</span><br /><br />
        <span class="lista-r">Prepara el aliño mezclando el aceite y el vinagre, removiendo bien para conseguir una vinagreta. Aliña la ensalada y mezcla para que quede bien impregnada.</span>
      </div>
    </div>
    <div class="cell-gr">
      <img class="img-receta" src="img/slider-r1.png" id="srimg"/>
    </div>
  </div>
  <img src="img/hojas.png" class="hojas" id="hojas"/>
</section>
<section id="soriana">
  <div class="div-text-soriana">
    ENCUENTRA NUESTROS<br />
    PRODUCTOS EN:
  </div>
  <img src="img/soriana.svg" class="img-soriana" />
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
    <span class="texto-f">Copyright © <?php echo date('Y') ?> SEÑOR SABOR <br class="web-br"/>      Desarrollado por INK    /      AVISO DE PRIVACIDAD</span>
    <img class="tenedor" src="img/tenedor.jpg" />
  </div>
  <div class="fondo-c"></div>
</section>
</body>
</html>
