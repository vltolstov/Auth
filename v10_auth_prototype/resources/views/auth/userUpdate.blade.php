@extends('.layouts.default')

@section('content')

    <p>Личный кабинет (<a href="/logout">Выход</a>)</p>

    <table>
        <tr>
            <th>Имя пользователя</th>
            <th>Роль пользователя</th>
            <th></th>
        </tr>
        @foreach($users as $user)
            <tr>
                <form action="{{ route('user.update', $user->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->role }}</td>
                    <td><button type="submit">Сохранить</button></td>
                </form>
            </tr>
        @endforeach
    </table>

@endsection
