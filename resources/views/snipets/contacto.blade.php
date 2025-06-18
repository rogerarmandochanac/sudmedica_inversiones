<div class="contacto__container container">
    <a href="tel:+56322186995">
        <img class="contacto__img" src="{{asset('img/contacto_sudmedica.png')}}" alt="">
    </a>
    <div class="contacto__form">
        <div class="contacto__title">
            <img src="{{asset('img/asesora.png')}}" alt="">
            <p>{{ __('messages.Contacto_Titulo') }}</p>
        </div>
        <form id="contact-form" action="{{route('contactanos.store')}}" method="post">
            @csrf
            <input type="text" placeholder="{{ __('messages.Contacto_Nombre') }}" name="nombre" required>
            <div class="selected_country">
                <select name="" id="country">
                    <option value="+56">Chile</option>
                    <option value="+52">Mexico</option>
                    <option value="+1">USA</option>
                    <option value="+1">Canada</option>
                    <option value="+55">Brazil</option>
                    <option value="+54">Argentina</option>
                    
                </select>
                <input type="tel" name="" id="phone" placeholder="{{ __('messages.Contacto_Telefono')  }}" required value="+52 ">
            </div>
            <input type="email" placeholder="{{ __('messages.Contacto_Email') }}" name="email" required>
            <textarea placeholder="{{ __('messages.Contacto_Mensaje') }}" name="mensaje" required></textarea>
            <input type="submit" value="{{ __('messages.Contacto_Enviar') }}">
        </form>
        <div class="loading-popup" id="loading-popup">
            <div class="loading-content">
                <div class="spinner"></div>
                <p>{{ __('messages.Contacto_Enviando') }}</p>
            </div>
        </div>
        @if ($errors->has('error'))
        <div class="custom-popup" id="custom-popup">
            <div class="popup-content">
                <h2>{{ __('messages.Contacto_Error') }}</h2>
                <p>{{ $errors->first('error') }}</p>
                <button class="popup-close" id="popup-close">Cerrar</button>
            </div>
        </div>
        @endif
        @if (session('info'))
            <div class="custom-popup" id="custom-popup">
                <div class="popup-content">
                    <h2>{{ __('messages.Contacto_Confirmacion') }}</h2>
                    <p>{{session('info')}}</p>
                    <button class="popup-close" id="popup-close">Cerrar</button>
                </div>
            </div>
        @endif
        <div class="contacto__whatsapp">
            <p>
                {{ __('messages.Contacto_Whatsapp') }}
            </p>
            <a href="https://wa.me/56979622807" class="btn__form btn__form__whatssap"><i class="fa-brands fa-whatsapp"></i> {{ __('messages.Contacto_Enviar_Mensaje') }}</a>
            <a href="tel:+56322186995" class="btn__form btn__form__call"><i class="fa fa-phone" aria-hidden="true"></i> {{ __('messages.Contacto_Llamar') }}</a>
        </div>
    </div>
</div>
   