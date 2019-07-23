<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<title>Preferencias</title>
		
		<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    	<link href="css/animate.css" rel="stylesheet">
    	<link href="css/style.css" rel="stylesheet">
	</head>
	
<body>
	<div class="row" style="height: 250px;" >
		<div id="animation_box" class="animated fadeInDown col-4 no-paddings" style="height: 200px;" >			
			<img src="img/1.jpg" class="rounded-circle text-center no-paddings" style="height: 270px;"> 
		</div>
	
		<div class="col-8 " style="margin-bottom: 5px;">
			<h1 class="font-bold text-light bg-primary p-xs b-r-sm w-75">Pedro Antonio Cuevas Marquez</h1>
			<?php
			echo "hola mundo";
			?>
			<div class="accordion" id="accordionExample" style="width: 75%;">				
				<div class="card bg-primary">
					<div class="card-header" id="headingOne">
						 <h5 class="mb-0">
					        <button class="btn collapsed font-bold text-dark" type="button" data-toggle="collapse" data-target="#collapseOne" >
					          INFO
					        </button>
      					</h5>			
					</div>
					<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="height: 80px;">
      					<div class="card-body font-bold" style="margin-bottom: 5px;">
       					Matricula 1138314 <br>
       					Lic. Sistemas Computacionales <br>
       					Universidad Autonoma de Baja California
      					</div>
    				</div>
  				</div>
			</div>
		</div>		
	</div>
	<div class="row">
	<div class="row border-bottom white-bg dashboard-header row ng-scope col-8" style="padding-left: 10px;padding-right:10px;margin-top: 40px;margin-left: 10px; width: 75%;">
		<div class="col-lg-4 p-md bg-primary border-left font-bold">
			<h1 class="font-bold">Lenguajes de programacion que me gustan</h1>
			<p> 
				los lenguajes de programacion que me gustaria aprender o que mas me llaman la atencion son 
				<img src="img/prog1.jpeg" style="width: 100%;">
				<div class="font-bold">swift la manera en la que lo venden enfatiza que es una manera mas facil de crear aplicacion por que esta implementado en IOS se supone que esto le da una mayor ventaja en diseño algo util en aplicaciones mas si son juegos 
				</div>
				<div class="font-bold">
					<img src="img/swift3.png" style="width: 100%;">
					Android programming tecnicamente son varios lenguajes en un entorno pero la idea de crear app me llama la atencion por eso me gustaria aprender a crear app en android y ver que es lo que puedo crear 
				</div>
				<div>
					<img src="img/android2.png" style="width: 100%;">
					GO de google un lenguaje nuevo  pero que me llama la atencion por ser orientado a objetos un tipo de mezcla entre c y java tratando de crear algo de programacion orientada a objetos 
				</div>
			</p>
		</div>
		<div class="col-lg-4 p-md bg-primary border-left font-bold">
			<h1 class="font-bold">Lenguajes que conozco</h1>
			<p> tristemente mi conocimiento no es muy extenso solo conozco 2 lenguajes de programacion c,c++ y java podria incluirse html pero es un lenguaje de etiquetas asi que solo son esos 2 
				<div>
					<img src="img/c2.png" style="width: 100%;">
					el lenguaje de c,c++ pues es de los lenguajes basicos con los que te enseñan asi que no hay mucho que decir se usa como base para muchas cosas asi que es bastante comun  
				</div>
				<div>
					<img src="img/java1.jpg" style="width: 100%;">
					lo que me gusta de java es la facilidad para manejar graficos algo menos complicado que en otros lenguajes y sus IDE´s te permiten arrastrar elementos asi que es muy facil y te deja manipular colores bordes y muchas cosas mas 
				</div>
			</p>
		</div>
		<div class="col-lg-4 p-md bg-primary border-left font-bold" >
			<h1 class="font-bold">Area de Lsc que me interesa </h1>
			<p> las areas que mas me interesan son la practicas y las que conllevan un poco de diseño 
				<div>
					<img src="img/redes2.jpg" style="width: 100%;">
					redes mas que nada me justa por ser practica me gusta la idea de visitar sites y ver las conexiones entre los IDF´s la parte de la configuracion tambien es un poco entretenida es como esta idea que nos graban en la cabeza de que los informaticos son hackers cuando solo verifican codigo y beben cafe 
				</div>
				<div>
					<img src="img/desarrollo2.png" style="width: 100%;">
					el area de desarrollo de software puede ser un poco tediosa o muy lenta a la hora de realizar el analisis y captura de requisitos y especificaciones dependiendo del modelo que uses pero se vuelve interesante una vez que se empieza a realizar la elaboracion ademas ayuda la metodologia agil a realizarlo de manera mas dinamica. En cuanto al desarrollo web suele ser mas entretenido por los estilos css que no siempre hacen lo que quieres, creo que es mas entretenido por la parte de la nueva tendencia responsiva y adtaptabilidad a dispositivos
				</div>
			</p>
		</div>
	</div>
	<div class="col-4 text-center container " style="width: 50%;" >
			<a class="btn"></a>
			<div class="col align-self-center">
				<h1 class="text-center border-size-lg  border-left-right m-l text-light" style="width: 100%;margin-right: 5px;">Inicio</h1>
			</div>
			<div id="llave" class="animated bounceInLeft col align-self-center bg-primary m-sm p-sm" style="width: 100%;margin-right: 5px;">
				<a href="#v1" class="btn p-xs b-r-sm text-light font-bold" data-toggle="modal">Lenguajes que me gustan</a>
			</div>
			<div id="llave" class="animated bounceInRight col align-self-center bg-primary m-sm p-sm" style="width: 100%;margin-right: 5px;">
				<a href="#v2" class="btn p-xs b-r-sm text-light font-bold" data-toggle="modal">Lenguajes que conozco</a>
			</div>
			<div id="llave" class="animated bounceInDown col align-self-center bg-primary m-sm p-sm " style="width: 100%;margin-right: 5px;">
				<a href="#v3"class=" btn p-xs b-r-sm text-light font-bold" data-toggle="modal" >Areas de mi Interes</a>
			</div>
		
	</div>
	</div>
<!-- ventana emergente 1 -->
	<div class="modal fade" id="v1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h2 class="modal-title font-bold">Lenguajes de programacion que me gustan</h2>
				</div>
				<!--contenido de modal-->
				<div class="modal-body">
					<p>los lenguajes de programacion que me gustaria aprender o que me llaman la atencion son 
						<div class="bg-primary text-center font-bold border-size-lg b-sm b-r-sm"style="font-size: 30px;margin-bottom: 5px;">Swift <br> <a href="https://developer.apple.com/swift/"><img src="img/swift.jpg" style="width: 25%; height: 25%";></a> 
						</div>
						<div class="bg-primary text-center font-bold border-size-lg b-sm b-r-sm"style="font-size: 30px;margin-bottom: 5px;">Android programming <br> <a href="https://developer.android.com/guide/?hl=es-419"><img src="img/android.png" style="width: 25%; height: 25%;"></a> 
						</div>
						<div class="bg-primary text-center font-bold border-size-lg b-sm b-r-sm" style="font-size: 30px;margin-bottom: 5px;">GO(google) <br> <a href="https://golang.org/"><img src="img/go.png" style="width: 25%;height: 25%;"></a>
						</div>
					</p>
				</div>
			</div>
		</div>
	</div>
<!-- ventana emergente 2 -->
	<div class="modal fade" id="v2">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h2 class="modal-title font-bold">Lenguajes de programacion que conozco</h2>
				</div>
				<!--contenido de modal-->
				<div class="modal-body">
					<p>
						los Lenguajes de programacion que conozco principalmente son 
						<div class="bg-primary text-center font-bold border-size-lg " style="font-size: 30px;margin-bottom: 5px;">C,C++ <br><a href="https://tutorials.visualstudio.com/cpp-console/intro"><img src="img/c.jpg" style="width: 25%;height: 25%"></a>
						</div>
						<div class="bg-primary text-center font-bold border-size-lg " style="font-size: 30px;margin-bottom: 5px;">java <br> <a href="http://www.oracle.com/technetwork/es/java/javase/downloads/index.html"><img src="img/java2.png" style="width: 25%;height: 25%"></a>
						</div>  
					</p>

				</div>
			</div>
		</div>
	</div>
<!-- ventana emergente 3 -->
	<div class="modal fade" id="v3">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" style="justify-content: flex-start!important;">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-left:0px;">&times;</button>
					<h2 class="modal-title font-bold" style="margin-left:0px;">Areas de mi Interes en lsc</h2>
				</div>
				<!--contenido de modal-->
				<div class="modal-body">
					<p>las areas de LSC que me interesan son
						<div class="bg-primary text-center font-bold border-size-lg " style="font-size: 30px;margin-bottom: 5px;">Redes <br> <a href="http://es.redes-de-computadores-conceptos.wikia.com/wiki/RED_DE_COMPUTADORAS"><img src="img/redes.jpg" style="width: 25%;height: 25%" ></a>
						</div>
						<div class="bg-primary text-center font-bold border-size-lg " style="font-size: 30px;margin-bottom: 5px;">Desarrollo web y de software <br> <a href="https://cmmiinstitute.com/resource-files/public/marketing/v1-3models/cmmi%C2%AE-for-development-version-1-3-spanish-transl"><img src="img/Desarrollo.jpg" style="width: 25%;height: 25%"></a>
						</div>  
					</p>
				</div>
			</div>
		</div>
	</div>

		<!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

</body>
</html>