<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Servicios de pintura profesional y decoración deportiva. Incluye pintura de canchas deportivas, señalización vial, pintura de interiores y exteriores, entre otros.">
    <meta name="keywords" content="pintura, decoración, pintura deportiva, señalización vial, fachadas, interiores, exteriores, resane, construcción, servicios profesionales">
    <link rel="stylesheet" href="{{asset('sitioweb/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('SITIO_WEB/img/imagen3.ico')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>MI Mazabanda</title>
</head>
<body class="body">
    <header>
        <div class="menu">
            <section>
                @foreach($getInformaciones as $getInformacioness)
                <img class="img" src="{{getInformacioness->logo}}" alt="icono de la emplesa">  <!-- {{asset('sitioweb/img/imagen3.ico')}} -->
                @endforeach
            </section><br>
            <section>
                <input type="checkbox" id="menu-toggle" class="menu-checkbox">
                <label for="menu-toggle" class="menu-toggle">&#9776;</label>
                <nav class="nav-menu">
                    <ul>
                        <li><a href="#carouselExampleIndicators"><i class="fa-solid fa-house fa-beat-fade"></i>Principio</a></li>
                        <li><a href="#MV"><i class="fa-solid fa-arrow-trend-up fa-beat-fade"></i> Misión y Visión</a></li>
                        <li><a href="#Servicios"><i class="fa-solid fa-shop fa-beat-fade"></i> Servicios</a></li>
                        <li><a href="#flex-footer"><i class="fa-solid fa-location-dot fa-beat-fade"></i>  Geolocalización</a></li>
                        <li><a href="#contacto"><i class="fa-solid fa-phone fa-beat-fade"></i> Contacto</a></li>
                        <li><a href="#Redes"><i class="fa-brands fa-facebook fa-beat-fade"></i> Redes Sociales</a></li>
                    </ul>
                </nav>
            </section>
    </header>
    <main>
        <section class="principal">
            <div class="carrusel">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{asset('sitioweb/img/pexels-jef-k-1518692548-29565466.png')}}" class="d-block w-100" alt="trabajos realizados">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('sitioweb/img/pexels-life-of-pix-2489.png')}}" class="d-block w-100" alt="trabajos realizados">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('sitioweb/img/pexels-pixabay-534220.png')}}" class="d-block w-100" alt="trabajos realizados">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </section>
            <section id="MV" class="MV">
            @foreach($getMisVis as $getMisVis)
                <section class="mision">
                    <h2 class="tit-mv"><i class="fa-solid fa-chart-simple fa-beat-fade"></i> Misión</h2><br>
                    <img style="height: 200px; width: 300px;" src="{{asset('sitioweb/img/pexels-sevenstormphotography-439416.png')}}" alt=""><br><br>
                    <p class= "parra-ser"> {{$getMisVis->mision}}</p>
                </section>
                <section class="vision">
                    <h2 class="tit-mv"><i class="fa-solid fa-arrow-trend-up fa-beat-fade"></i> Visión</h2><br>
                    <img style="height: 200px; width: 300px;" src="{{asset('sitioweb/img/pexels-tima-miroshnichenko-6474199.png')}}" alt=""><br><br>
                    <p class= "parra-ser"> {{$getMisVis->vision}}</p>
                </section>
            @endforeach
            </section><hr>
        <section class="precios">
            <h2 class="tit-servi"><i class="fa-solid fa-shop fa-beat-fade"></i> Servicios</h2>
            <!--@foreach($getcategorias as $getcategoriass)-->
            <section class="pagos">
                <section class="servi-precio">
                    <section>
                    Servicios de Pintura Profesional y Decoración Deportiva <br>
                    Pintura de Canchas Deportivas en Piso de Hormigón: <br>
                    Decoración en varios colores para canchas deportivas. <br>
                    o Área: m². <br>
                    o Cantidad: 90,000 <br> 
                    o Precio unitario: $7.50/m². <br>
                    o Total: $675,000. <br><hr>
                </section>
                <section>
                    Pintura de Canchas Deportivas en Piso de Hormigón (con resane): <br>
                    Incluye reparación previa y decoración en varios colores. <br>
                    o Área: m². <br>
                    o Cantidad: 135,000 <br>
                    o Precio unitario: $8.00/m². <br>
                    o Total: $1,080,000. <br><br>
                </section>
                </section>
                <section class="servi-precio">
                    <section>
                        Pintura Látex en Paredes, Muros y Gradas: <br>
                        Decoración en diversos colores para espacios interiores o exteriores. <br>
                        o Área: m². <br>
                        o Cantidad: 120,000 <br>
                        o Precio unitario: $5.35/m². <br>
                        o Total: $642,000. <br>
                    </section><hr>
                    <section>
                        Pintura Látex en Paredes, Muros y Gradas (con resane): <br>
                        Incluye reparación previa para un acabado óptimo. <br>
                        o Área: m². <br>
                        o Cantidad: 155,000 <br> 
                        o Precio unitario: $5.75/m². <br>
                        o Total: $891,250. <br><br>
                        </section>
                </section>    
                <section class="servi-precio">
                    Pintura para Señalización Vial y Bordillos (blanco/amarillo): <br>
                    Ideal para señalización de tráfico y bordillos. <br>
                    o Área: m². <br>
                    o Cantidad: 6,000 <br>
                    o Precio unitario: $2.76/m². <br>
                    o Total: $16,560. <br><hr>
                    
                    Pintura para Señalización Vial y Bordillos (con resane): <br>
                    Incluye reparación previa para mayor durabilidad. <br>
                    o Área: m². <br>
                    o Cantidad: 9,000 <br>
                    o Precio unitario: $3.35/m². <br>
                    o Total: $30,150. <br><br>
                </section>    
                <section class="servi-precio">
                    Pintura de Fachadas con Materiales Incluidos: <br>
                    o Precio unitario: $4.80. <br>
                    o Area: m²<br> <hr>

                    Pintura de Interiores con Materiales Incluidos: <br>
                    o Precio unitario: $4.50.  <br>
                    o Area: m² <br>
                </section>
            </section>
            <!--@endforeach-->
        </section>
        <section id="Servicios" class="SERVICIOS">
            <section>
                <section class="div">
                    <img style="height: 350px; width: 200px;" clas="servi-img" src="{{asset('sitioweb/img/pexels-tima-miroshnichenko-6474123.png')}}" alt=""><br>

                    <img style="height: 350px; width: 200px;" src="{{asset('sitioweb/img/lamparas de lino.png')}}" alt=""> <br>
                
                    <img style="height: 350px; width: 200px;" src="{{asset('sitioweb/img/pexels-kseniachernaya-5691622.png')}}" alt="">
                </section>
                <section class="div">
                    <img style="height: 230px; width: 300px;"  src="{{asset('sitioweb/img/pexels-tima-miroshnichenko-6474294.png')}}" alt=""><br>
                
                    <img style="height: 230px; width: 300px;" src="{{asset('sitioweb/img/pexels-tima-miroshnichenko-6474471.png')}}" alt=""><br>

                    <img style="height: 230px; width: 300px;" src="{{asset('sitioweb/img/Cursos gratis de pintor_ inscríbete en línea.png')}}" alt="">
                </section>
            </section><br>
            <section>
                <section class="div">
                    <img style="height: 350px; width: 200px;" src="{{asset('sitioweb/img/d938732dc085434a127cdf2f2a8ef86d.png')}}" alt=""><br>
                
                    <img style="height: 350px; width: 200px;" src="{{asset('sitioweb/img/1a596624-73bc-475d-95bb-431048d13f1f.png')}}" alt=""><br>
                
                    <img style="height: 350px; width: 200px;" src="{{asset('sitioweb/img/pexels-joaquin-carfagna-3131171-17274505.png')}}" alt="">
                </section>
                <section class="div">
                    <img style="height: 350px; width: 200px;" src="{{asset('sitioweb/img/pexels-cottonbro-5275666.png')}}" alt=""><br>
               
                    <img style="height: 350px; width: 200px;" src="{{asset('sitioweb/img/pexels-koolshooters-6076418.png')}}" alt=""><br>

                    <img style="height: 350px; width: 200px;" src="{{asset('sitioweb/img/377ad947-49ea-4aa9-9199-6165fd3b7bbf.png')}}" alt="">
                </section>
                <section class="div" class="img-fin">
                    <img style="height: 280px; width: 350px;" src="{{asset('sitioweb/img/0286da98-a07a-4e95-9589-eeea0496bade.png')}}" alt=""><br>
               
                    <img style="height: 280px; width: 350px;" src="{{asset('sitioweb/img/eadd14c6-2173-4f02-80ba-e290b5c4e5ca.png')}}" alt=""><br>

                    <img style="height: 280px; width: 350px;" src="{{asset('sitioweb/img/15 Construcciones perfectamente hechas que son un verdadero deleite visual.png')}}" alt="">
                </section>
            </section><br>
        </section>
    </main><br><hr><br>
    <footer>
        <section id="flex-footer" class="footer">
           <section>
            <h2 class="titu-dir"><i class="fa-solid fa-location-dot fa-beat-fade"></i> Dirección</h2><br>
                <div class="direc">
                    @foreach($getInformaciones as $getInformacioness)
                    <!-- <iframe class="guia" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127673.97887461817!2d-78.423661!3d-0.103268!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d58efb841f1f6d%3A0x5cdb659e0304bca0!2sParque%20Central%20de%20Calder%C3%B3n!5e0!3m2!1ses!2sec!4v1733421088801!5m2!1ses!2sec" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                    <iframe class="guia" src="{{$getinformacioness->direccion}}" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    @endforeach
                </div>
           </section><hr>
            <section class="Contacto">
                <section id="contacto">
                    <h3 class="Con-what"><i class="fa-solid fa-phone fa-beat-fade"></i> Contacto</h3>
                    @foreach($getInformaciones as $getInformacioness)
                    <button type="button" class="btn btn-outline-success"><i class="fa-brands fa-whatsapp fa-beat-fade"></i><a target="_blank" href="{{getinformacion->telefono}}"> WhatsApp</a></button>  <!--https://w.app/l7Xkpq-->
                    @endforeach
                </section><br>
                <section id="Redes">
                    <h3 class="Con-what"><i class="fa-brands fa-facebook fa-beat-fade"></i> Redes Sociales</h3>
                    @foreach($getredes as $getredess)
                    <button type="button" class="btn btn-outline-primary"><i class="fa-brands fa-facebook fa-beat"></i><a target="_blank" href="{{$getRedess->url}}"> Facebook</a></button>
                    @endforeach
                </section>
            </section><hr>    
            <section class="DERECHOS">
                <p class="footer">&copy; MI Mazabanda </p>
            </section>
        </section>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <script>
        document.querySelectorAll('.nav-menu a').forEach((link) => {
            link.addEventListener('click', () => {
                document.querySelector('.menu-checkbox').checked = false; // Cierra el menú
            });
        });
    </script>

</body>
</html>