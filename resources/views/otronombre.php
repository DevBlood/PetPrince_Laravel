<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/mycss.css') }}" rel="stylesheet">
    <title>PetPrince</title>
    
  
</head>
<body>

    <div class="container">

   
        <!-- MENÚ PRINCIPAL -->
        <nav class="header">  
            <a href="index.html" class="logo">Pet<span>Prince</span></a> 
           <li class="menu">
            <ul>
                <li class="selected"><a href="">Inicio</a></li>
                <li><a href="views/somos.html">Quienes Somos</a></li>
                <li><a href="#">Mi Mascota</a>
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-dog"></i>Perros</a></li>
                        <li><a href="#"><i class="fa-solid fa-cat"></i>Gatos</a></li>
                    </ul>
                </li>
                <li class="cart"><a href="views/carrito.html">CARRITO <i class="fa-solid fa-cart-shopping"></i></a>
                    <ul>
                        <li class="cart-container">
                            <div class="table-cart" id="carrito">
                                <table class="table-cart" id="lista-carrito" >
                                    <tr>
                                        <th class="table-th">Imagen</th>
                                        <th class="table-th">Producto</th>
                                        <th class="table-th">Precio</th>
                                        <th class="table-th">Cantidad</th>
                                    </tr>

                                    <tbody>
                                             
                                    </tbody>
                                </table>
                                <a href="#" id="vaciar-carrito" class="button">Vaciar Carrito</a>
                            </div>
                        </li>
                    </ul>
                    
                </a></li>
            </ul> 
           </li>
            <a href="views/login.html" class="login">Iniciar Sesión<i class="fa-solid fa-caret-down"></i></a> 
        </nav>

        <!-- SILDER -->
        <div class="slider">
           <div class="slides">
               <input type="radio" name="radio-btn" id="radio1">
               <input type="radio" name="radio-btn" id="radio2">
               <input type="radio" name="radio-btn" id="radio3">
               <input type="radio" name="radio-btn" id="radio4">
               <input type="radio" name="radio-btn" id="radio5">
                <div class="slide first">
                    <img src="Assets/Images/slider/dogs.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="Assets/Images/slider/cat.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="Assets/Images/slider/products.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="Assets/Images/slider/dogs-cats.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="Assets/Images/slider/cutedog.jpg" alt="">
                </div>

                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"> 
                    </div>
                    <div class="auto-btn5"></div>
                </div>

                <div class="manual-navigation">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                    <label for="radio5" class="manual-btn"></label>
                </div>
           </div>
        </div>

        <!-- ENLACES RÁPIDOS -->
        <section class="sect-cards">  
            <div class="card-container">
                <h1>Somos lo que ellos necesitan</h1>
                <div class="card-wrapper">
                    <h3>Todo <span>a una garra de distancia</span></h3>
                    <div class="cards">
                        <a href="views/accesorios.html"><i class="fas fa-paw"></i>Accesorios</a>
                        <a href="#"><i class="fa-solid fa-prescription-bottle-medical"></i>Suplementos</a>
                        <a href="#"><i class="fas fa-cookie"></i>Alimentos</a>
                        <a href="#"><i class="fas fa-tshirt"></i>Ropa</a>
                    </div>
                </div>
            </div>  
        </section>

        <!-- LISTA DE PRODUCTOS -->
        <section  class="lista-productos"> 
            <h3>productos destacados</h3> 
        <div class="product-wrapper" id="lista-productos">
            <div class="box-product">
                <img src="Assets/Images/productos/abrigo-perro.jpg" alt="">
                <p class="description">Abrigo</p>
                <div class="price"><p>$750 MXN</p>
                    <a href="" class="add-cart" data-id="1"><i class="fa-solid fa-cart-plus add-cart"></i></a>
                </div>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p>10% descuento</p>
            </div>   

            <div class="box-product">
                <img src="Assets/Images/productos/cama-perro.jpg" alt="">
                <p class="description">Cama</p>
                <div class="price"><p>$340 MXN</p>
                    <a href="" class="add-cart" data-id="2"><i class="fa-solid fa-cart-plus add-cart"></i></a>
                </div>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>50% descuento</p>
            </div> 

            <div class="box-product">
                <img src="Assets/Images/productos/casa-gato.jpg" alt="">
                <p class="description">Casa</p>
                <div class="price"><p>$500 MXN</p>
                    <a href="" class="add-cart" data-id="3"><i class="fa-solid fa-cart-plus add-cart"></i></a>
                </div>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p>10% descuento</p>
            </div> 

            <div class="box-product">
                <img src="Assets/Images/productos/correa-gato.jpg" alt="">
                <p class="description">Correa</p>
                <div class="price"><p>$100 MXN</p>
                    <a href="" class="add-cart" data-id="4"><i class="fa-solid fa-cart-plus add-cart"></i></a>
                </div>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p>20% descuento</p>
            </div> 

            <div class="box-product">
                <img src="Assets/Images/productos/correa-perro.jpg" alt="">
                <p class="description">Correa</p>
                <div class="price"><p>$200 MXN</p>
                    <a href="" class="add-cart" data-id="5"><i class="fa-solid fa-cart-plus add-cart"></i></a>
                </div>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p>10% descuento</p>
            </div> 

            <div class="box-product">
                <img src="Assets/Images/productos/gorro-perro.jpg" alt="">
                <p class="description">Gorro</p>
                <div class="price"><p>$550 MXN</p>
                    <a href="" class="add-cart" data-id="6"><i class="fa-solid fa-cart-plus add-cart"></i></a>
                </div>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p>10% descuento</p>
            </div> 

            <div class="box-product">
                <img src="Assets/Images/productos/cama-perro2.jpg" alt="">
                <p class="description">Camita</p>
                <div class="price"><p>$900 MXN</p>
                    <a href="" class="add-cart" data-id="7"><i class="fa-solid fa-cart-plus add-cart"></i></a>
                </div>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>10% descuento</p>
            </div> 

            <div class="box-product">
                <img src="Assets/Images/productos/vaquero-gato.jpg" alt="">
                <p class="description">Vaquero</p>
                <div class="price"><p>$340 MXN</p>
                    <a href="" class="add-cart" data-id="8"><i class="fa-solid fa-cart-plus add-cart"></i></a>
                </div>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p>50% descuento</p>
            </div> 

           
        </div>   
             

            
        </section>

        <footer class="footer">
            <div class="contact">
                <h2 class="footer-h2">ZONA DE CONTACTO</h2>
                <div class="contact-a">
                <a href="views/somos.html">Quienes Somos</a>
                <a href="views/preguntasfrecuentes.html">Preguntas Frecuentes</a>
                <a href="views/terminosycondiciones.html">Términos y condiciones</a>
                </div>
                <div class="textarea-container">
                    <textarea type="textarea" class="textarea" placeholder="Mandanos aquí tu mensaje..." rows="10" cols="50">

                    </textarea>
                    <input type="submit" name="textarea">
                </div>
                
                
            </div>
            <div class="social">
                <h2 class="footer-h2">Nuestros proveedores</h2>
                <div class="img-providers">
                    <img src="Assets/Images/Prodviders/Imagen 15.png" alt="">
                    <img src="Assets/Images/Prodviders/Imagen 16.png" alt="">
                    <img src="Assets/Images/Prodviders/Imagen 17.png" alt="">
                    <img src="Assets/Images/Prodviders/Imagen 18.png" alt="">
                </div>
                <h2 class="footer-h2">Siguenos</h2>
                <div class="social">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-pinterest"></i></a>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </footer>
</div>

<script src="app.js"></script>
<!-- <script src="carrito.js"></script> -->

</body>
</html>