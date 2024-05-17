@extends('.layouts.default')

@section('content')

    <p>Личный кабинет (<a href="/logout">Выход</a>)</p>
    <ul>
        <li><a href="{{ route('user.edit', auth()->user()->id) }}">Редактирование своего профиля</a></li>
        <li><a href="{{ route('user.index') }}">Управление пользователями</a></li>
        <li><a href="{{ route('roles.index') }}">Управление ролями пользователей</a></li>
    </ul>

@endsection
