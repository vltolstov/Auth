@extends('.layouts.default')

@section('content')

    <h3>Управление ролями</h3>

    <h4>Создание роли</h4>

    @if($errors->any())
        <h4>Ошибки:</h4>
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif

    <form action="{{ route('roles.store') }}" method="post">
        @csrf
        @error('name')
            {{ $message }}
        @enderror
        <label>Название роли</label>
        <input type="text" placeholder="Имя роли" name="name" value="{{ old('name') }}">
        <button type="submit">Создать</button>
    </form>

    <h4>Доступные роли</h4>
    @if(isset($roles))
        <table>
            <tr>
                <th>Роль</th>
                <th></th>
            </tr>
            @foreach($roles as $role)
                <tr>
                    <td>{{$role->name}}</td>
                    <td>
                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <p>Роли не найдены</p>
    @endif


@endsection
