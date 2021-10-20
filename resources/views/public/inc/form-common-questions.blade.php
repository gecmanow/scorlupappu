<form action="{{ route('commonQuestion') }}" method="post" class="form-col">
    {{ csrf_field() }}
    @if ($errors->commonQuestion->any())
        @foreach ($errors->commonQuestion->all() as $error)
            <span class="errors">{{ $error }}</span>
        @endforeach
    @endif
    <div class="row">
        <div class="col-md-12 col-sm-6 col-xs-12">
            <input type="text" name="name" placeholder="Ваше имя*" required="required" />
        </div>
        <div class="col-md-12 col-sm-6 col-xs-12">
            <input type="text" name="phone" placeholder="Номер телефона*" required="required" />
        </div>
    </div>
    <p class="tip">* поля обязательны к заполнению</p>
    {!! NoCaptcha::display() !!}
    <a href="#success">
        <button class="send">Отправить</button>
    </a>
</form>
