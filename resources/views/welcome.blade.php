{{-- <link rel="stylesheet" href="./assets/css/estilos.css"> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Diseño web tipo blog - para practica</title>

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./assets/css/principal.css">
    <link rel="stylesheet" href="./assets/css/blog.css">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body>
@livewire('navigation')

@stack('modals')

@livewireScripts

<div id="ctn-bars-search">
    <input type="text" id="inputSearch" placeholder="¿Qué deseas buscar?">
</div>

<ul id="box-search">
    <li><a href="articulo.html"><i class="fas fa-search"></i>HTML</a></li>
    <li><a href="articulo.html"><i class="fas fa-search"></i>CSS</a></li>
    <li><a href="articulo.html"><i class="fas fa-search"></i>JavaScript</a></li>
    <li><a href="articulo.html"><i class="fas fa-search"></i>PHP</a></li>
    <li><a href="articulo.html"><i class="fas fa-search"></i>NODEJS</a></li>
    <li><a href="articulo.html"><i class="fas fa-search"></i>VUEJS</a></li>
    <li><a href="articulo.html"><i class="fas fa-search"></i>Como hacer</a></li>
    <li><a href="articulo.html"><i class="fas fa-search"></i>Como crear</a></li>
</ul>

<div id="cover-ctn-search"></div>


<!--Portada-->

<div class="container-all" id="move-content">


<div class="blog-container-cover">
    <div class="container-info-cover">
        <h1>¡Encuentra tu tema interes!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam aliquam quis fuga beatae blanditiis assumenda.</p>
    </div>
</div>
<div class="container-post">

    <input type="radio" id="TODOS" name="categories" value="TODOS" checked>
    <input type="radio" id="HTML" name="categories" value="HTML">
    <input type="radio" id="CSS" name="categories" value="CSS">
    <input type="radio" id="JS" name="categories" value="JS">
    <input type="radio" id="PHP" name="categories" value="PHP">
    <input type="radio" id="NODEJS" name="categories" value="NODEJS">
    <input type="radio" id="VUE" name="categories" value="VUE">

    <div class="container-category">
        <label for="TODOS">TODOS</label>
        <label for="HTML">HTML</label>
        <label for="CSS">CSS</label>
        <label for="JS">JS</label>
        <label for="PHP">PHP</label>
        <label for="NODEJS">NODEJS</label>
        <label for="VUE">VUE</label>
    </div>

    <div class="posts">

        <div class="post" data-category="CSS">

            <div class="ctn-img">
                <img src="./assets/img/img/articulos/pagina-web-tipo-blog.jpg" alt="">
            </div>
            <h2>Como puedes crear una pagina web tipo blog | HTML - CSS - JS</h2>
            <span>26 febrero 2020 - 1:32 am</span>
            <ul class="ctn-tag">
                <li>CSS</li>
                <li>HTML</li>
            </ul>
            <a href="articulo.html"><button>Leer más</button></a>

        </div>

        <div class="post" data-category="HTML">

            <div class="ctn-img"><img src="./assets/img/img/articulos/Slider-comparacion-imagenes-js.jpg" alt=""></div>
            <h2>Como hacer SLIDER de comparación de imágenes</h2>
            <span>26 febrero 2020 - 1:32 am</span>
            <ul class="ctn-tag">
                <li>HTML</li>
            </ul>
            <a href="#"><button>leer más</button></a>

        </div>

        <div class="post" data-category="JS">

            <div class="ctn-img"><img src="./assets/img/img/articulos/efecto-hover-avanzado-css.jpg" alt=""></div>
            <h2>¡Efecto!😮 Hover ¿AVANZADO? con puro CSS</h2>
            <span>26 febrero 2020 - 1:32 am</span>
            <ul class="ctn-tag">
                <li>JS</li>
            </ul>
            <a href="#"><button>leer más</button></a>

        </div>

        <div class="post" data-category="JS NODEJS VUE">

            <div class="ctn-img"><img src="./assets/img/img/articulos/integrando-redes-sociales-WhatsApp-Messenger.jpg" alt=""></div>
            <h2>¡WOW!😍 Cómo integrar WhatsApp y Messenger en tu Web</h2>
            <span>26 febrero 2020 - 1:32 am</span>
            <ul class="ctn-tag">
                <li>JS</li>
                <li>NODEJS</li>
                <li>VUE</li>
            </ul>
            <a href="#"><button>leer más</button></a>

        </div>

        <div class="post" data-category="CSS">

            <div class="ctn-img"><img src="./assets/img/img/articulos/Indicador-de-scroll.jpg" alt=""></div>
            <h2>Como hacer INDICADOR DE SCROLL con HTML5 - CSS3 - JS</h2>
            <span>26 febrero 2020 - 1:32 am</span>
            <ul class="ctn-tag">
                <li>CSS</li>
            </ul>
            <a href="#"><button>leer más</button></a>

        </div>

        <div class="post" data-category="PHP">

            <div class="ctn-img"><img src="./assets/img/img/articulos/modo-oscuro-para-tu-web.jpg" alt=""></div>
            <h2>MODO OSCURO para tu página web con HTML - CSS </h2>
            <span>26 febrero 2020 - 1:32 am</span>
            <ul class="ctn-tag">
                <li>PHP</li>
            </ul>
            <a href="#"><button>leer más</button></a>

        </div>

        <div class="post" data-category="CSS NODEJS">

            <div class="ctn-img"><img src="./assets/img/img/articulos/popup-puro-css.jpg" alt=""></div>
            <h2>Como hacer Popup con PURO CSS</h2>
            <span>26 febrero 2020 - 1:32 am</span>
            <ul class="ctn-tag">
                <li>CSS</li>
                <li>NODEJS</li>
            </ul>
            <a href="#"><button>leer más</button></a>

        </div>




    </div>

</div>


<div class="container-footer">

    <footer>
        <div class="logo-footer">
            <img src="./assets/img/img/logo-magtimus-pro-.png" alt="">
        </div>

        <div class="redes-footer">
            <a href="#"><i class="fab fa-facebook-f icon-redes-footer"></i></a>
            <a href="#"><i class="fab fa-google-plus-g icon-redes-footer"></i></a>
            <a href="#"><i class="fab fa-instagram icon-redes-footer"></i></a>
        </div>

        <hr>
        <h4>© 2020 MagtimusPro - Todos los Derechos Reservados</h4>

    </footer>

</div>

<script src="./assets/js/script.js"></script>
</body>
</html>
