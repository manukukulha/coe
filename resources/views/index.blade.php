@extends('layouts.app')

@section('links')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
@endsection

@section('content')
<header>
    <div class="hero">
    </div>
</header>
<main>
    <section class="section container center">
        <img src="/img/logo.png" class="responsive-img" alt="">
                <p >Queremos que todas las personas, adolecentes, jovenes y adultas con <span class="bold">DI</span> tengan la oportunidad de un desarrollo integral que los conduzca a una mejor calidad de vida</p>
                <a href="" class="btn amber darken-2">conoce mas de nosotros</a>
    </section>
    <section class="section container">
        <div class="center">
            <h2 class="indigo-text text-darken-2">¿Como ayudar?</h2>
            <p>Todos los productos de COE son realizados por niños y adolescentes con Discapacidad Intelectual. Al adquirir un producto se está apoyando a la inclusión laboral de todas estas personas.</p>
            <div class="row">
                <div class="col m3 s12 center">
                    <i class="fas fa-university orange-text text-darken-4 fa-4x"></i>
                    <p>Donaciones directas al centro, cuenta de Banco</p> 
                    <ul>
                        <li>BANORTE</li>
                        <li>Centro Ocupacional Especial A.C</li>
                        <li>N. cuenta: 1042383517</li>
                        <li>CLABE 072396010423835173</li>
                    </ul>
                </div>
                <div class="col m3 s12 center">
                    <i class="fas fa-cookie-bite orange-text text-darken-4 fa-4x"></i>
                    <p>Compra los productos de temporada(Jabones, Alcancías, Galletas, etc) ¡Compra con causa!</p> 
                </div>
                <div class="col m3 s12 center">
                    <i class="fas fa-hands-helping orange-text text-darken-4 fa-4x"></i>
                    <p>Voluntariado</p> 
                </div>
                <div class="col m3 s12 center">
                    <i class="fas fa-briefcase orange-text text-darken-4 fa-4x"></i>
                    <p>Inclusión Laboral</p> 
                </div>
            </div>
            <h5 class="center">¿Quieres apadrinar a alguien?(Terapia, colegiatura, talleres) <a class="orange-text text-darken-4" href="">¡Contactanos!</a></h5>
        </div>
    </section>
    <section class="section container">
        <h2 class="indigo-text text-darken-2 center">RESALTAMOS LA CAPACIDAD</h2>
        <div class="row">
            <div class="col m4 s12">
                <a data-fancybox="gallery" href="/img/galb1.jpg"><img src="/img/gals1.jpg"></a>
            </div>
            <div class="col m4 s12">
                <a data-fancybox="gallery" href="/img/galb2.jpg"><img src="/img/gals2.jpg"></a>
            </div>
            <div class="col m4 s12">
                <a data-fancybox="gallery" href="/img/galb3.jpg"><img src="/img/gals3.jpg"></a>
            </div>
            <div class="col m4 s12">
                <a data-fancybox="gallery" href="/img/galb4.jpg"><img src="/img/gals4.jpg"></a>
            </div>
            <div class="col m4 s12">
                <a data-fancybox="gallery" href="/img/galb5.jpg"><img src="/img/gals5.jpg"></a>
            </div>
            <div class="col m4 s12">
                <a data-fancybox="gallery" href="/img/galb6.jpg"><img src="/img/gals6.jpg"></a>
            </div>
        </div>
    </section>
</main>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
@endsection
