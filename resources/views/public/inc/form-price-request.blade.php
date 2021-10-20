<form action="{{ route('priceRequest') }}" method="post" class="form-col">
    {{ csrf_field() }}
    @if ($errors->priceRequest->any())
        @foreach ($errors->priceRequest->all() as $error)
            <span class="errors">{{ $error }}</span>
        @endforeach
    @endif
    <input type="text" name="name" placeholder="Ваше имя*" required="required" />
    <input type="text" name="phone" placeholder="Номер телефона*" required="required" />
    <input type="text" name="email" placeholder="Email*" required="required" />
    <input type="text" name="company" placeholder="Компания" />
    <p class="tip">* поля обязательны к заполнению</p>
    {!! NoCaptcha::display() !!}
    <a href="#success">
        <button class="send">Отправить</button>
    </a>
</form>
