<div class="modal fade" id="callback">
    <div class="_make-order">
        <div class="modal-content form-container">
            <div class="modal-body">
                <div class="request-price">
                    <h2>Заказать звонок</h2>
                    <form action="{{ route('callback') }}" method="post" class="form-col">
                        {{ csrf_field() }}
                        @if ($errors->callback->any())
                            @foreach ($errors->callback->all() as $error)
                                <span class="errors">{{ $error }}</span>
                            @endforeach
                        @endif
                        <input type="text" name="name" placeholder="Ваше имя*" required="required" />
                        <input type="text" name="phone" placeholder="Номер телефона*" required="required" />
                        <p class="tip">* поля обязательны к заполнению</p>
                        {!! NoCaptcha::display() !!}
                        <a href="#success">
                            <button class="send">Отправить</button>
                        </a>
                    </form>
                    <a href="#close" data-dismiss="modal" title="Закрыть" class="close">x</a>
                </div>

            </div>
        </div>
    </div>
</div>
