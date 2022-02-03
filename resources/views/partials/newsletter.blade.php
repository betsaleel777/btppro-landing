<div class="section" id="signup">
    <div class="container">
        <div class="section-title text-center">
            <h3>Inscrivez Vous !</h3>
            <p>Pour rester informer au sujet de l'actualité de BTPPRO.</p>
            @include('partials.flash')
        </div>
        <div class="row justify-content-md-center">
            <div class="col col-md-5">
                <form role="form" method="post" action="{{ route('add_newsletter') }}">
                    @csrf
                    <div class="  form-group">
                        <input value="{{ old('fullname') }}" type="text" class="form-control"
                            placeholder="Nom complet" name="fullname">
                        {!! $errors->first('fullname', '<p style="color:#a94442">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <input value="{{ old('email') }}" type="email" class="form-control"
                            placeholder="Email Address" name="email">
                        {!! $errors->first('email', '<p style="color:#a94442">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <input value="{{ old('telephone') }}" type="text" class="form-control"
                            placeholder="Numéro de téléphone whatsapp" name="telephone">
                        {!! $errors->first('telephone', '<p style="color:#a94442">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-xl btn-block btn-primary">S'inscrire</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
