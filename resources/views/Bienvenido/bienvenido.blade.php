@extends('base')
@section('title', 'Bienvenido')
@section('content')
    <div id="body">
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="imgs/1.jpg" width="300" height="310" alt="First slide">
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="imgs/27.jpg" width="300" height="310" alt="Second slide">
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="imgs/23.jpg" width="300" height="310" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <br>
  <br>
  
  <div id="content">
			<ul class="gallery">
				<li>
					<a href="" class="figure">
						<img src="images/pokemon.png" alt="">
						<span>Cupcake infantiles todo tipo de presentación de anime.</span>
					</a>
				</li>
				<li>
					<a href="" class="figure">
						<img src="images/personal.png" alt="">
						<span>Cupcake personalizados según al gusto de nuestros clientes.</span>
					</a>
				</li>
				<li>
					<a href="" class="figure">
						<img src="images/agri.png" alt="">
						<span>Cupcake agridulce para esas personas aventureras.</span>
					</a>
				</li>
				<li>
					<a href="" class="figure">
						<img src="images/pie-with-choco.jpg" alt="">
						<span>Cupcake con frutas a elección de nuestros clientes.</span>
					</a>
				</li>
				<li>
					<a href="" class="figure">
						<img src="images/salado.png" alt="">
						<span>Cupcake salados para esas reuniones o antojos.</span>
					</a>
				</li>
				<li>
					<a href="" class="figure">
						<img src="images/pizza.png" alt="">
						<span>Cupcake una buena opcion para los fanáticos de la pizza.</span>
					</a>
				</li>
				<li>
					<a href="" class="figure">
						<img src="images/canela.png" alt="">
						<span>Cupcake de canela para aquellos que el sabor a nuez y canela les facinan. </span>
					</a>
        </li>
        
				<li>
					<a href="" class="figure">
						<img src="images/helado.png" alt="">
						<span>Cupcake con y forma de helado por aquellos que gustan del helado. </span>
					</a>
				</li>
				<li class="last"><br>    
                    <center> <h3 id="somos"> SOMOS TU MEJOR OPCIÓN. </h3> </center> 
              </li>
			</ul>
			<p>&nbsp;</p>
		</div>
       </div>
@endsection
