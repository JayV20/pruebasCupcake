
@extends('base')
@section('title', 'Bienvenido')
@section('content')
<section class="home-about-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
<!-- Seccion de tarjetas -->
       <section class="post-content-area single-post-area" style="background-color: transparent;">
        <div class="row">
            <div class="col-3">
                <div class="card">
                   <!-- La si se quiere obtener la imagen desde la base de datos en bits es : src="data:image/jpg;base64, (php base64_encode($producto['Imagen']);) "  --> 
                <img 
                    title="CupCake de Leche"
                    alt="CupCake de Leche"
                    class="card-img-top"    
                    src="images/imagenes cupcake/leche5.jpg"
                    data-toggle="popover"
                    data-trigger="hover"
                    data-content="Cupkake con extra leche convinada con galleta"
                    height="317px"
                    >

                    <div class="card-body">
                    <span>CupCake de Leche</span>
                        <h5 class="card-title">$50.00</h5>
                        <p class="card-text">Descripción</p>
                        <h5>Cantidad</h5>
                    <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="">
                    <input type="hidden" name="nombre" id="nombre" value="" >
                    <input type="hidden" name="precio" id="precio" value="">
                    <input class="form-control" type="number" name="cantidad" value="1" id="cantidad" min="1" max="12">   
                    <br>
                    <button class="btn btn-danger"
                        name="btnAccion"
                        value="Agregar"
                        type="submit"
                        >
                        Agragar al carrito
                        </button>

                    </form>
                        

                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                   <!-- La si se quiere obtener la imagen desde la base de datos en bits es : src="data:image/jpg;base64, (php base64_encode($producto['Imagen']);) "  --> 
                <img 
                    title="Cupcake de platano"
                    alt="Cupcake de platano"
                    class="card-img-top"    
                    src="images/imagenes cupcake/plata.jpg"
                    data-toggle="popover"
                    data-trigger="hover"
                    data-content="Rico Cupcake de platana relleno del mismo... para saborear"
                    height="317px"
                    >

                    <div class="card-body">
                    <span>Cupcake de platano</span>
                        <h5 class="card-title">$25.00</h5>
                        <p class="card-text">Descripción</p>
                        <h5>Cantidad</h5>
                    <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="">
                    <input type="hidden" name="nombre" id="nombre" value="" >
                    <input type="hidden" name="precio" id="precio" value="">
                    <input class="form-control" type="number" name="cantidad" value="1" id="cantidad" min="1" max="12">   
                    <br>
                    <button class="btn btn-danger"
                        name="btnAccion"
                        value="Agregar"
                        type="submit"
                        >
                        Agragar al carrito
                        </button>

                    </form>
                        

                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                   <!-- La si se quiere obtener la imagen desde la base de datos en bits es : src="data:image/jpg;base64, (php base64_encode($producto['Imagen']);) "  --> 
                <img 
                    title="CupCake de Arandano"
                    alt="CupCake de Arandano"
                    class="card-img-top"    
                    src="images/imagenes cupcake/ara6.jpg"
                    data-toggle="popover"
                    data-trigger="hover"
                    data-content="Rico Cupcake de sabor arandano"
                    height="317px"
                    >

                    <div class="card-body">
                    <span>CupCake de Arandano</span>
                        <h5 class="card-title">$30.00</h5>
                        <p class="card-text">Descripción</p>
                        <h5>Cantidad</h5>
                    <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="">
                    <input type="hidden" name="nombre" id="nombre" value="" >
                    <input type="hidden" name="precio" id="precio" value="">
                    <input class="form-control" type="number" name="cantidad" value="1" id="cantidad" min="1" max="12">   
                    <br>
                    <button class="btn btn-danger"
                        name="btnAccion"
                        value="Agregar"
                        type="submit"
                        >
                        Agragar al carrito
                        </button>

                    </form>
                        

                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                   <!-- La si se quiere obtener la imagen desde la base de datos en bits es : src="data:image/jpg;base64, (php base64_encode($producto['Imagen']);) "  --> 
                <img 
                    title="CupCake sabor Oreo"
                    alt="CupCake sabor Oreo"
                    class="card-img-top"    
                    src="images/imagenes cupcake/oreo8.jpg"
                    data-toggle="popover"
                    data-trigger="hover"
                    data-content="¡Para los amantes del chocolate Cupcake de oreo!"
                    height="317px"
                    >

                    <div class="card-body">
                    <span>CupCake sabor Oreo</span>
                        <h5 class="card-title">$43.00</h5>
                        <p class="card-text">Descripción</p>
                        <h5>Cantidad</h5>
                    <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="">
                    <input type="hidden" name="nombre" id="nombre" value="" >
                    <input type="hidden" name="precio" id="precio" value="">
                    <input class="form-control" type="number" name="cantidad" value="1" id="cantidad" min="1" max="12">   
                    <br>
                    <button class="btn btn-danger"
                        name="btnAccion"
                        value="Agregar"
                        type="submit"
                        >
                        Agragar al carrito
                        </button>

                    </form>
                        

                    </div>
                </div>
            </div>


        </div>

        <div class="row">
            <div class="col-3">
                <div class="card">
                   <!-- La si se quiere obtener la imagen desde la base de datos en bits es : src="data:image/jpg;base64, (php base64_encode($producto['Imagen']);) "  --> 
                <img 
                    title="CupCake de fresa"
                    alt="CupCake de fresa"
                    class="card-img-top"    
                    src="images/imagenes cupcake/fresa1.jpg"
                    data-toggle="popover"
                    data-trigger="hover"
                    data-content="Para los que les gusta el sabor amargo y a la vez dulce Cupcake de fresa"
                    height="317px"
                    >

                    <div class="card-body">
                    <span>Cupcake de fresa</span>
                        <h5 class="card-title">$12.00</h5>
                        <p class="card-text">Descripción</p>
                        <h5>Cantidad</h5>
                    <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="">
                    <input type="hidden" name="nombre" id="nombre" value="" >
                    <input type="hidden" name="precio" id="precio" value="">
                    <input class="form-control" type="number" name="cantidad" value="1" id="cantidad" min="1" max="12">   
                    <br>
                    <button class="btn btn-danger"
                        name="btnAccion"
                        value="Agregar"
                        type="submit"
                        >
                        Agragar al carrito
                        </button>

                    </form>
                        

                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                   <!-- La si se quiere obtener la imagen desde la base de datos en bits es : src="data:image/jpg;base64, (php base64_encode($producto['Imagen']);) "  --> 
                <img 
                    title="Cupcake de platano"
                    alt="Cupcake de platano"
                    class="card-img-top"    
                    src="images/imagenes cupcake/turron3.jpg"
                    data-toggle="popover"
                    data-trigger="hover"
                    data-content="Rico Cupcake de platana relleno del mismo... para saborear"
                    height="317px"
                    >

                    <div class="card-body">
                    <span>Cupcake de platano</span>
                        <h5 class="card-title">$25.00</h5>
                        <p class="card-text">Descripción</p>
                        <h5>Cantidad</h5>
                    <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="">
                    <input type="hidden" name="nombre" id="nombre" value="" >
                    <input type="hidden" name="precio" id="precio" value="">
                    <input class="form-control" type="number" name="cantidad" value="1" id="cantidad" min="1" max="12">   
                    <br>
                    <button class="btn btn-danger"
                        name="btnAccion"
                        value="Agregar"
                        type="submit"
                        >
                        Agragar al carrito
                        </button>

                    </form>
                        

                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                   <!-- La si se quiere obtener la imagen desde la base de datos en bits es : src="data:image/jpg;base64, (php base64_encode($producto['Imagen']);) "  --> 
                <img 
                    title="CupCake de Nata"
                    alt="CupCake de Nata"
                    class="card-img-top"    
                    src="images/imagenes cupcake/nata5.jpg"
                    data-toggle="popover"
                    data-trigger="hover"
                    data-content="Rico Cup Cake con sabor a nata solo por temporada limitada"
                    height="317px"
                    >

                    <div class="card-body">
                    <span>CupCake Nata </span>
                        <h5 class="card-title">$25.00</h5>
                        <p class="card-text">Descripción</p>
                        <h5>Cantidad</h5>
                    <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="">
                    <input type="hidden" name="nombre" id="nombre" value="" >
                    <input type="hidden" name="precio" id="precio" value="">
                    <input class="form-control" type="number" name="cantidad" value="1" id="cantidad" min="1" max="12">   
                    <br>
                    <button class="btn btn-danger"
                        name="btnAccion"
                        value="Agregar"
                        type="submit"
                        >
                        Agragar al carrito
                        </button>

                    </form>
                        

                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                   <!-- La si se quiere obtener la imagen desde la base de datos en bits es : src="data:image/jpg;base64, (php base64_encode($producto['Imagen']);) "  --> 
                <img 
                    title="CupCake de Chocolate"
                    alt="CupCake de Chocolate"
                    class="card-img-top"    
                    src="images/imagenes cupcake/cupchocolate4.jpg"
                    data-toggle="popover"
                    data-trigger="hover"
                    data-content="CupCake sabor chococolate Amargo"
                    height="317px"
                    >

                    <div class="card-body">
                    <span>CupCake de Chocolate</span>
                        <h5 class="card-title">$20.00</h5>
                        <p class="card-text">Descripción</p>
                        <h5>Cantidad</h5>
                    <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="">
                    <input type="hidden" name="nombre" id="nombre" value="" >
                    <input type="hidden" name="precio" id="precio" value="">
                    <input class="form-control" type="number" name="cantidad" value="1" id="cantidad" min="1" max="12">   
                    <br>
                    <button class="btn btn-danger"
                        name="btnAccion"
                        value="Agregar"
                        type="submit"
                        >
                        Agragar al carrito
                        </button>

                    </form>
                        

                    </div>
                </div>
            </div>


        </div>

        <div class="row">
            <div class="col-3">
                <div class="card">
                   <!-- La si se quiere obtener la imagen desde la base de datos en bits es : src="data:image/jpg;base64, (php base64_encode($producto['Imagen']);) "  --> 
                <img 
                    title="CupCake vegano"
                    alt="CupCake vegano"
                    class="card-img-top"    
                    src="images/imagenes cupcake/vega3.jpg"
                    data-toggle="popover"
                    data-trigger="hover"
                    data-content="Cupkake para los que son veganos buena"
                    height="317px"
                    >

                    <div class="card-body">
                    <span>CupCake Vegano</span>
                        <h5 class="card-title">$30</h5>
                        <p class="card-text">Descripción</p>
                        <h5>Cantidad</h5>
                    <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="">
                    <input type="hidden" name="nombre" id="nombre" value="" >
                    <input type="hidden" name="precio" id="precio" value="">
                    <input class="form-control" type="number" name="cantidad" value="1" id="cantidad" min="1" max="12">   
                    <br>
                    <button class="btn btn-danger"
                        name="btnAccion"
                        value="Agregar"
                        type="submit"
                        >
                        Agragar al carrito
                        </button>

                    </form>
                        

                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                   <!-- La si se quiere obtener la imagen desde la base de datos en bits es : src="data:image/jpg;base64, (php base64_encode($producto['Imagen']);) "  --> 
                <img 
                    title="Cupcake de zanahoria"
                    alt="Cupcake de zanahoria"
                    class="card-img-top"    
                    src="images/imagenes cupcake/zanahoria3.jpg"
                    data-toggle="popover"
                    data-trigger="hover"
                    data-content="Rico CupCake de Zanahoria para saborear"
                    height="317px"
                    >

                    <div class="card-body">
                    <span>Cupcake de Zanahoria</span>
                        <h5 class="card-title">$25.00</h5>
                        <p class="card-text">Descripción</p>
                        <h5>Cantidad</h5>
                    <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="">
                    <input type="hidden" name="nombre" id="nombre" value="" >
                    <input type="hidden" name="precio" id="precio" value="">
                    <input class="form-control" type="number" name="cantidad" value="1" id="cantidad" min="1" max="12">   
                    <br>
                    <button class="btn btn-danger"
                        name="btnAccion"
                        value="Agregar"
                        type="submit"
                        >
                        Agragar al carrito
                        </button>

                    </form>
                        

                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                   <!-- La si se quiere obtener la imagen desde la base de datos en bits es : src="data:image/jpg;base64, (php base64_encode($producto['Imagen']);) "  --> 
                <img 
                    title="CupCake de redvelvet"
                    alt="CupCake de redvelvet"
                    class="card-img-top"    
                    src="images/imagenes cupcake/red2.png"
                    data-toggle="popover"
                    data-trigger="hover"
                    data-content="Rico cupCake de Sabor redvelvet solo por temporada"
                    height="317px"
                    >

                    <div class="card-body">
                    <span>CupCake redvelvet</span>
                        <h5 class="card-title">$30.00</h5>
                        <p class="card-text">Descripción</p>
                        <h5>Cantidad</h5>
                    <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="">
                    <input type="hidden" name="nombre" id="nombre" value="" >
                    <input type="hidden" name="precio" id="precio" value="">
                    <input class="form-control" type="number" name="cantidad" value="1" id="cantidad" min="1" max="12">   
                    <br>
                    <button class="btn btn-danger"
                        name="btnAccion"
                        value="Agregar"
                        type="submit"
                        >
                        Agragar al carrito
                        </button>

                    </form>
                        

                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                   <!-- La si se quiere obtener la imagen desde la base de datos en bits es : src="data:image/jpg;base64, (php base64_encode($producto['Imagen']);) "  --> 
                <img 
                    title="CupCake de Cafe"
                    alt="CupCake de Cafe"
                    class="card-img-top"    
                    src="images/imagenes cupcake/cafe3.jpg"
                    data-toggle="popover"
                    data-trigger="hover"
                    data-content="CupCake sabor a cafe "
                    height="317px"
                    >

                    <div class="card-body">
                    <span>CupCake de Cafe</span>
                        <h5 class="card-title">$25.00</h5>
                        <p class="card-text">Descripción</p>
                        <h5>Cantidad</h5>
                    <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="">
                    <input type="hidden" name="nombre" id="nombre" value="" >
                    <input type="hidden" name="precio" id="precio" value="">
                    <input class="form-control" type="number" name="cantidad" value="1" id="cantidad" min="1" max="12">   
                    <br>
                    <button class="btn btn-danger"
                        name="btnAccion"
                        value="Agregar"
                        type="submit"
                        >
                        Agragar al carrito
                        </button>

                    </form>
                        

                    </div>
                </div>
            </div>


        </div>

        <div class="row">
            <div class="col-3">
                <div class="card">
                   <!-- La si se quiere obtener la imagen desde la base de datos en bits es : src="data:image/jpg;base64, (php base64_encode($producto['Imagen']);) "  --> 
                <img 
                    title="CupCake de Vainilla"
                    alt="CupCake de Vainilla"
                    class="card-img-top"    
                    src="images/imagenes cupcake/vainilla.jpg"
                    data-toggle="popover"
                    data-trigger="hover"
                    data-content="Cupkake sabor a  vainilla"
                    height="317px"
                    >

                    <div class="card-body">
                    <span>CupCake de Leche</span>
                        <h5 class="card-title">$35</h5>
                        <p class="card-text">Descripción</p>
                        <h5>Cantidad</h5>
                    <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="">
                    <input type="hidden" name="nombre" id="nombre" value="" >
                    <input type="hidden" name="precio" id="precio" value="">
                    <input class="form-control" type="number" name="cantidad" value="1" id="cantidad" min="1" max="12">   
                    <br>
                    <button class="btn btn-danger"
                        name="btnAccion"
                        value="Agregar"
                        type="submit"
                        >
                        Agragar al carrito
                        </button>

                    </form>
                        

                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                   <!-- La si se quiere obtener la imagen desde la base de datos en bits es : src="data:image/jpg;base64, (php base64_encode($producto['Imagen']);) "  --> 
                <img 
                    title="Cupcake de Avena"
                    alt="Cupcake de Avena"
                    class="card-img-top"    
                    src="images/imagenes cupcake/ave3.jpg"
                    data-toggle="popover"
                    data-trigger="hover"
                    data-content="Rico Cupcake de platana relleno de avena"
                    height="317px"
                    >

                    <div class="card-body">
                    <span>Cupcake de avena</span>
                        <h5 class="card-title">$25.00</h5>
                        <p class="card-text">Descripción</p>
                        <h5>Cantidad</h5>
                    <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="">
                    <input type="hidden" name="nombre" id="nombre" value="" >
                    <input type="hidden" name="precio" id="precio" value="">
                    <input class="form-control" type="number" name="cantidad" value="1" id="cantidad" min="1" max="12">   
                    <br>
                    <button class="btn btn-danger"
                        name="btnAccion"
                        value="Agregar"
                        type="submit"
                        >
                        Agragar al carrito
                        </button>

                    </form>
                        

                    </div>
                </div>
            </div>
        </div>
                          </section>
                      </div>
                  </div>
  </div>
  </section>
        @section('extra-js') 
        <script>
            $(function () {
            $('[data-toggle="popover"]').popover()
            })
        </script>
        @endsection
