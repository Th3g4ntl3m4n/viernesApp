<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Hover Ingenieria - Sede Electronica</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- WhatsApp Floating Button -->
        <a href="https://wa.me/1234567890" class="whatsapp-button" target="_blank">
            <i class="bi bi-whatsapp" style="font-size: 30px; color: white;"></i>
        </a>

        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">Hover ingenieria</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('nosotros')}}">Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('servicios')}}">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('contacto')}}">Contacto</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        
        <!-- Header-->
        <header class="bg-dark py-5" style="background-image: url('images/hover.jpeg'); background-size: cover; background-position: center;">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                           <!-- <h1 class="display-5 fw-bolder text-white mb-2">Hover Ingenieria</h1>
                            <p class="lead text-white-50 mb-4">Hacemos lo imposible, digitalmente posible</p> -->
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                           <!-- <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Empecemos</a>
                               <!-- class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
   @yield('content')
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; Hover ingenieria 2024</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
