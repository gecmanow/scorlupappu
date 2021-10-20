<form action="{{ route('weightCalc') }}" method="post" enctype="multipart/form-data">
    <h2>Заказать бесплатный расчет толщины</h2>
    {{ csrf_field() }}
    @if ($errors->weightCalc->any())
        @foreach ($errors->weightCalc->all() as $error)
            <span class="errors">{{ $error }}</span>
        @endforeach
    @endif
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <input type="text" name="name" placeholder="Ваше имя*" required="required" />
        </div>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="phone" placeholder="Номер телефона*" required="required" />
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <input type="text" name="diameter" placeholder="Диаметр трубы, мм" />
        </div>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="weight" placeholder="Толщина изоляции, мм" />
        </div>
    </div>
    <p>* поля обязательны к заполнению</p>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 form-row">
            {!! NoCaptcha::display() !!}
            <a href="#success">
                <button class="send">Отправить</button>
            </a>
        </div>
    </div>
</form>

@push('captcha')
    {!! NoCaptcha::renderJs() !!}
@endpush
