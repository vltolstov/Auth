@extends('.layouts.default')

@section('content')

    <p>Личный кабинет (<a href="/logout">Выход</a>)</p>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    <h3>Редактирование профиля</h3>
            <form action="{{ route('user.update', $user->id) }}" method="post">
                @csrf
                @method('PUT')
                <label>Имя</label>
                <input type="text" name="name" placeholder="Имя" value="{{ $user->name }}">
                <label>Телефон</label>
                <input type="text" name="phone" placeholder="Телефон" value="{{ $user->phone }}">
                <label>Электронная почта</label>
                <input type="text" name="email" placeholder="Электронная почта" value="{{ $user->email }}">
                <button type="submit">Сохранить</button>
            </form>

@endsection
