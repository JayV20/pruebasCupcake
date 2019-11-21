@extends('base')
@section('title', 'Index')
@section('content')
<section class="home-about-area section-gap">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
<!-- Apartado section descripcion-->								
              <section class="post-content-area single-post-area" style="background-color: transparent;">
              <div class="row">
                <div class="col col-md-3">
                  <div class="card" style="background-color: #EF7CFF;">
                    <div class="card-body" >
  
				<h1><span id="result_box" lang="es">Todos los días recién horneados. </span></h1>
				<p id="atre">Atrevete a probar nuestra variedad en sabores y diseños.<br>
			    Los mejores Cupcakes, Pasteles y Galletas solo los tiene &quot;Cherry Cake&quot;.</p> 
                </div>
                </div>
                </div>
                <div class="col col-md-6">
		
		            <img  src="images/freshly-baked.png" width="100%">
            
                </div>
                
			<div class="col col-md-3">
			<div class="card" style="background-color: #EF7CFF;">
                    <div class="card-body" >
				<h3><span id="result_box2" lang="es">100% hecho en casa</span></h3>
				<ul>
					<li >
						 <img class="img-fluid" src="images/ham.png" alt="">
					</li>
					<li>
					     <img class="img-fluid" src="images/tart.png" alt="">
                        </li>
				</ul>
                </div>
                </div>
			</div>
         
          </div>
        </section>
<!-- Termina apartado de section descripcion-->
        
<!--Apartado info -->        
		<div class="body">
		  <div class="row">
		    <div class="col col-md-5">
				<p id="atre2">
					La calidad y el amor de casa es lo que nos distinge no de nuestra competencia realizando los productos innovadores y de buen sabor.</p> 
                    <br>
                    <br>
			</div>
			<div class="col col-md-2">
			<img src="images/strawberry-tart.png" alt="">
            </div>
			<div class="col col-md-5">
				<p id="atre2">Nuestros productos son realizados siempre pensando en nuestros clientes.<br>
			    Tratando así de satisfacer todas sus necesidades.</p>
			</div>
			
          </div>
		</div>
<!--Termina apartado info-->
  
<!--Apartado horarios-->
		<section class="post-content-area single-post-area" style="background-color: transparent;">
		  <div class="row">
		    <div class="col col-md-6">
<!-- Tarjeta de productos especiales-->		
    <div class="card mb-3" style="max-width: 540px; background-color: transparent;" >
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="images/weekend-specials.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Productos Especiales</h5>
        <p class="card-text">!Hechos especialmente para la temporada¡</p>
      </div>
    </div>
  </div>
</div>
			<!--<div class="figure">
				<div>
					<h1> <center>Productos Especiales. </center></h1>
					<img src="images/weekend-specials.jpg" alt="">
				</div>
			</div>-->
			
            </div>
            
<!-- Tarjeta de horario-->			
		<div class="col col-md-6">	
          <div class="card mb-3" style="max-width: 540px; background-color: transparent;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="images/open.jpg" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Horario</h5>
                  <p class="card-text">Luneas a Viernes : 8am a 8pm<br> 
                 Sabados  : 10am a 6pm 
                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        
      </div>
    </div>
  </section>
          
<!-- Termina apartado Horarios-->
	</div>
  </div>
      </div>
</section>
	@endsection