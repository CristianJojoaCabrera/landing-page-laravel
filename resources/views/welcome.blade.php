<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing page</title>
    <link href="https://fonts.googleapis.com/css?family=Heebo:400,700|IBM+Plex+Sans:600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('landing/css/style.css')}}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>
<body class="is-boxed has-animations">
<div class="body-wrap boxed-container">
    <header class="site-header">
        <div class="container">
            <div class="site-header-inner">
                <div class="brand header-brand">
                    <h1 class="m-0">
                        <a href="#">
                            <img class="header-logo-image asset-light" width="196" height="196" src="https://lh4.googleusercontent.com/Iti0ovioCkEuc715hG3FOqug5vOZNrs30sKL622JSlpNUv0Ndwaxr_PEL9E5aowNGtJ-WIh4b6jJz2pNHRZSBdJQQMtvp5Nr8S7GKJekpH45CiLsyrm2-EhmrMg-qYCxW2DqnCSfDU8ZvD7N" alt="Logo">
                            <img class="header-logo-image asset-dark" width="196" height="196" src="https://lh4.googleusercontent.com/Iti0ovioCkEuc715hG3FOqug5vOZNrs30sKL622JSlpNUv0Ndwaxr_PEL9E5aowNGtJ-WIh4b6jJz2pNHRZSBdJQQMtvp5Nr8S7GKJekpH45CiLsyrm2-EhmrMg-qYCxW2DqnCSfDU8ZvD7N" alt="Logo">
                        </a>
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="hero" style="padding-bottom: 1px;">
            <div class="container">
                <div class="hero-inner">
                    <div class="hero-copy">
                        <h1 class="hero-title mt-0">Un vehículo para cada estilo de vida</h1>
                        <p class="hero-paragraph">
                            Vea nuestra línea completa de vehículos y encuentre el que mejor se adapte a usted.</p>
                        <div class="hero-cta">
                            <a class="button button-primary" href="#">Ver</a>
                            <div class="lights-toggle">
                                <input id="lights-toggle" type="checkbox" name="lights-toggle" class="switch" checked="checked">
                                <label for="lights-toggle" class="text-xs"><span>Turn me <span class="label-text">dark</span></span></label>
                            </div>
                        </div>
                        <h1 class="hero-title mt-0">Completa el siguiente formulario y podras participar en el sorteo de alguno de nuestros productos</h1>
                    </div>
                    <div class="hero-media">
                        <div class="header-illustration">
                            <img class="header-illustration-image asset-light" src="{{asset('landing/images/header-illustration-light.svg')}}" alt="Header illustration">
                            <img class="header-illustration-image asset-dark" src="{{asset('landing/images/header-illustration-dark.svg')}}" alt="Header illustration">
                        </div>
                        <div class="hero-media-illustration">
                            <img class="hero-media-illustration-image asset-light" src="{{asset('landing/images/hero-media-illustration-light.svg')}}" alt="Hero media illustration">
                            <img class="hero-media-illustration-image asset-dark" src="{{asset('landing/images/hero-media-illustration-dark.svg')}}" alt="Hero media illustration">
                        </div>
                        <div class="hero-media-container">
                            <img class="hero-media-image asset-light" src="{{asset('landing/images/hero-media-light.svg')}}" alt="Hero media">
                            <img class="hero-media-image asset-dark" src="{{asset('landing/images/hero-media-dark.svg')}}" alt="Hero media">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cta section">
            <div class="container-sm">
                <div class="cta-inner section-inner">
                    <div class="cta-header">
                        @if (session('status'))
                            <div class="alert alert-primary">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (session('winner'))
                            <div class="alert alert-success">
                                {{ session('winner') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <h2 class="section-title mt-0">Formulario</h2>
                        <form id="form" method="POST" action="{{ route('users.store') }}" role="form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="txtName">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="txtName">Apellido</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellido" required>
                            </div>
                            <div class="form-group">
                                <label for="txtName">Cédula</label>
                                <input type="number" class="form-control" id="identification" name="identification" placeholder="Cédula" required>
                            </div>
                            <div class="form-group">
                                <label for="txtName">Departamento</label>
                                <select name="department_id" id="department_id" class="form-control" required>
                                    <option value="">Seleccione una opción</option>
                                @foreach($departments as $department)
                                    <option value="{{$department->id}}">{{$department->name}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="txtName">Ciudad</label>
                                <select name="city_id" id="city_id" class="form-control" required>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="txtName">Celular</label>
                                <input type="number" class="form-control" id="cellphone" name="cellphone" placeholder="Celular" required>
                            </div>
                            <div class="form-group">
                                <label for="txtName">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico" required>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                <label class="form-check-label" for="exampleCheck1">
                                    (“Autorizo el tratamiento de mis datos de acuerdo con la
                                    finalidad establecida en la política de protección de datos personales”. Haga clic
                                    aquí)
                                </label>
                            </div>

                        <br>
                        <div class="cta-cta" style="max-width: 100%;">
                            <button type="submit" class="button button-primary">Registrar</button>
                            <a href="landing_pages/exportar/users/excel" class="button button-primary" style="background-color: #83f3fe; color: #ffffff">exportar usuarios registrados</a>
                            <a href="landing_pages/exportar/users/winners/excel" class="button button-primary" style="background-color: #f67e21; color: #ffffff">exportar usuarios ganadores</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="site-footer has-top-divider">
        <div class="container">
            <div class="site-footer-inner">
                <div class="brand footer-brand">
                    <a href="#">
                        <img class="asset-light" width="120" height="120" src="https://lh4.googleusercontent.com/Iti0ovioCkEuc715hG3FOqug5vOZNrs30sKL622JSlpNUv0Ndwaxr_PEL9E5aowNGtJ-WIh4b6jJz2pNHRZSBdJQQMtvp5Nr8S7GKJekpH45CiLsyrm2-EhmrMg-qYCxW2DqnCSfDU8ZvD7N" alt="Logo">
                        <img class="asset-dark" width="120" height="120" src="https://lh4.googleusercontent.com/Iti0ovioCkEuc715hG3FOqug5vOZNrs30sKL622JSlpNUv0Ndwaxr_PEL9E5aowNGtJ-WIh4b6jJz2pNHRZSBdJQQMtvp5Nr8S7GKJekpH45CiLsyrm2-EhmrMg-qYCxW2DqnCSfDU8ZvD7N" alt="Logo">
                    </a>
                </div>
                <ul class="footer-links list-reset">
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li>
                        <a href="#">About us</a>
                    </li>
                    <li>
                        <a href="#">FAQ's</a>
                    </li>
                    <li>
                        <a href="#">Support</a>
                    </li>
                </ul>
                <ul class="footer-social-links list-reset">
                    <li>
                        <a href="#">
                            <span class="screen-reader-text">Facebook</span>
                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z" fill="#FFF"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="screen-reader-text">Twitter</span>
                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z" fill="#FFF"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="screen-reader-text">Google</span>
                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z" fill="#FFF"/>
                            </svg>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </footer>
</div>

<script src="{{asset('landing/js/main.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function(){

        $('#department_id').on('change', function () {
            var url = "{{ route('get_cities', ['deparment_id' => 'temp']) }}"
            url = url.replace('temp', $(this).val());
            $.ajax({
                url: url,
                type: 'GET',
                beforeSend: function () {
                },
                success: function (res, xhr, request) {

                    if (request.status === 200 && xhr === 'success') {
                        res =  JSON.parse(res);
                        $('#city_id').empty();
                        $(res).each(function (key, value) {
                            var newOption = new Option(value.name, value.id, true, true);
                            $('#city_id').append(newOption).trigger('change');
                        });
                        var newOption = new Option('Seleccione una opción','', true, true);
                        $('#city_id').append(newOption).trigger('change');
                    }
                },
                error: function (response, xhr, request) {
                    if (request.status === 422 && xhr === 'error') {
                    }
                }
            });
        });
    });
</script>
</body>
</html>
