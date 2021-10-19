<h2>Получена заявка с сайта:</h2>
<span>Имя: </span><strong>{{ $name }}</strong><br>
<span>Телефон: </span><strong>{{ $phone }}</strong><br>
@if(isset($email))
    <span>Email: </span><strong>{{ $email }}</strong><br>
@endif
@if(isset($company))
    <span>Компания: </span><strong>{{ $company }}</strong><br>
@endif
@if(isset($city))
    <span>Город: </span><strong>{{ $city }}</strong><br>
@endif
@if(isset($diameter))
    <span>Диаметр трубы, мм: </span><strong>{{ $diameter }}</strong><br>
@endif
@if(isset($weight))
    <span>Толщина изоляции, мм: </span><strong>{{ $weight }}</strong><br>
@endif
