<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form_popup.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3a008cc3c3.js" crossorigin="anonymous"></script>
    <title>Sudmedica</title>
</head>
<body>
    @include("snipets.navbar")
    <picture class="imagen__container">
        <img src="{{asset('img/sudmedica01.png')}}" alt="" class="imagen">
    </picture>
        <div class="directorio">
            <p class="historia container">{!! __('messages.Nosotros_Historia') !!}</p>
            <h1 class="directorio__titulo titulo container">{{ __('messages.Nosotros_Directorio') }}</h1>
            <div class="directorio__cards cards">
            <div class="directorio__card card">
                    <img class="directorio__card__img card__img" src="{{asset('img/Ángel_Trujillo_López_Vicepresidente 1.png')}}" alt="">
                    <div class="card__info">
                        <h5 class="card__name">Ángel Trujillo López</h5>
                        <h5 class="card__ocupation angel_ocupation">{{ __('messages.Directorio_Card_Angel_Ocupation') }}</h5>
                        <p class="card__description angel_description">{{ __('messages.Directorio_Card_Angel_Description') }}</p>
                        <a class="card__button" href="#"
                            data-name="Ángel Trujillo López" 
                            data-ocupation="{{ __('messages.Directorio_Card_Angel_Ocupation') }}" 
                            data-description="{{ __('messages.Directorio_Card_Angel_Description') }}">{{ __('messages.Directorio_Card_VerMas') }}</a>
                   </div>
                </div>
                <div class="directorio__card card">
                    <img class="directorio__card__img card__img" src="{{asset('img/Freddy_Hurtado_Presidente 1.png')}}" alt="">
                    <div class="card__info">
                        <h5 class="card__name">Freddy Hurtado</h5>
                        <h5 class="card__ocupation freddy_ocupation">{{ __('messages.Directorio_Card_Freddy_Ocupation') }}</h5>
                        <p class="card__description freddy_description">{{ __('messages.Directorio_Card_Freddy_Description') }}</p>
                        <a class="card__button" href="#"
                            data-name="Freddy Hurtado" 
                            data-ocupation="{{ __('messages.Directorio_Card_Freddy_Ocupation') }}" 
                            data-description="{{ __('messages.Directorio_Card_Freddy_Description') }}">{{ __('messages.Directorio_Card_VerMas') }}</a>
                    </div>
                </div>
                
                <div class="directorio__card card">
                    <img class="directorio__card__img card__img" src="{{asset('img/maria_soledad_Lopez_Secretaria 1.png')}}" alt="">
                    <div class="card__info">
                        <h5 class="card__name">María Soledad López Tapia</h5>
                        <h5 class="card__ocupation maria_ocupation">{{ __('messages.Directorio_Card_Maria_Ocupation') }}</h5>
                        <p class="card__description maria_description">{{ __('messages.Directorio_Card_Maria_Description') }}</p>
                        <a class="card__button" href="#"
                            data-name="María Soledad López Tapia" 
                            data-ocupation="{{ __('messages.Directorio_Card_Maria_Ocupation') }}" 
                            data-description="{{ __('messages.Directorio_Card_Maria_Description') }}">{{ __('messages.Directorio_Card_VerMas') }}</a>
                    </div>
                </div>
                <div class="directorio__card card">
                    <img class="directorio__card__img card__img" src="{{asset('img/Felipe_Oelckers_Aljaro_Director 1.png')}}" alt="">
                    <div class="card__info">
                        <h5 class="card__name">Felipe Oelckers Aljaro</h5>
                        <h5 class="card__ocupation felipe_ocupation">{{ __('messages.Directorio_Card_Felipe_Ocupation') }}</h5>
                        <p class="card__description felipe_description">{{ __('messages.Directorio_Card_Felipe_Description') }}</p>
                        <a class="card__button" href="#"
                            data-name="Felipe Oelckers Aljaro" 
                            data-ocupation="{{ __('messages.Directorio_Card_Felipe_Ocupation') }}" 
                            data-description="{{ __('messages.Directorio_Card_Felipe_Description') }}">{{ __('messages.Directorio_Card_VerMas') }}</a>
                    </div>
                </div>
                <div class="directorio__card card">
                    <img class="directorio__card__img card__img" src="{{asset('img/Fernando_Marcelo_Aguiar_Rosales_Director 1.png')}}" alt="">
                    <div class="card__info">
                        <h5 class="card__name">Fernando Marcelo Aguiar Rosales</h5>
                        <h5 class="card__ocupation fernando_ocupation">{{ __('messages.Directorio_Card_Fernando_Ocupation') }}</h5>
                        <p class="card__description fernando_description">{{ __('messages.Directorio_Card_Fernando_Description') }}</p>
                        <a class="card__button" href="#"
                            data-name="Fernando Marcelo Aguiar Rosales" 
                            data-ocupation="{{ __('messages.Directorio_Card_Fernando_Ocupation') }}" 
                            data-description="{{ __('messages.Directorio_Card_Fernando_Description') }}">{{ __('messages.Directorio_Card_VerMas') }}</a>
                    </div>
                </div>
                <div id="popup" class="popup">
                    <div class="popup__content">
                        <span class="popup__close" aria-label="Cerrar">&times;</span>
                        <div class="popup__info">
                            <img id="popup-img" class="popup__img" src="" alt="Imagen del directorio">
                            <div class="popup__info_text">
                                <h2 class="popup__title" id="popup-name">Nombre</h2>
                                <h4 class="popup__ocupation" id="popup-ocupation">Ocupación</h4>
                                <p class="popup__description" id="popup-description">Descripción</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cards__details container" style="margin-top:2rem;">
            <p>{!! __('messages.Nosotros_Equipo') !!}</p>
        </div>
        <div class="carrusel__container">
            <img src="{{asset('img/edificio0102.png')}}" alt="" class="imagen">
        </div>
        <div class="details__edificio container">
            <ul>
                @foreach(__('messages.Nosotros_Edificio_Detalles') as $detalle)
                    <li>{{ $detalle }}</li>
                @endforeach
            </ul>
        </div>
        <div class="details__ubicacion container">
            <p>{!! __('messages.Nosotros_Edificio') !!}</p>
        </div>
</div>
@include("snipets.contacto")
@include('snipets.volver_inicio')
<script src="{{asset('js/script.js')}}"></script>
<script src="{{ asset('js/popup.js') }}"></script>
<script src="{{ asset('js/form_popup.js') }}"></script>
</body>
</html>