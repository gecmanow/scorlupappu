<form action="{{ route('order') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    @if ($errors->order->any())
        @foreach ($errors->order->all() as $error)
            <span class="errors">{{ $error }}</span>
        @endforeach
    @endif
    <input type="text" name="name" placeholder="Ваше имя*" required="required" />
    <input type="text" name="phone" placeholder="Номер телефона*" required="required" />
    <input type="text" name="city" placeholder="Город доставки" />
    <p class="tip">* поля обязательны к заполнению</p>
    {!! app('captcha')->render(); !!}
    <button class="send">Отправить</button>
</form>
