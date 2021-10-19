<div class="request-price">
    <h2>Запросить копию сертификата</h2>
    <form action="{{ route('certRequest') }}" method="post">
        {{ csrf_field() }}
        @if ($errors->certRequest->any())
            @foreach ($errors->certRequest->all() as $error)
                <span class="errors">{{ $error }}</span>
            @endforeach
        @endif
        <input type="text" name="name" placeholder="Ваше имя*" required="required" />
        <input type="text" name="phone" placeholder="Номер телефона*" required="required" />
        <p>* поля обязательны к заполнению</p>
        {!! app('captcha')->render(); !!}
        <a href="#success">
            <button class="send">Отправить</button>
        </a>
    </form>
    <a href="#certificate" data-dismiss="modal" title="Закрыть" class="close">x</a>
</div>
