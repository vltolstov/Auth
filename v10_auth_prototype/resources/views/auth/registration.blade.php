@extends('.layouts.default')

@section('content')

    <p>Форма регистрации</p>
    <div class="form-wrap">
        <div class="auth-form">
            <form action="{{ route('user.registration') }}" method="post">
                @csrf
                @error('formError')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                <div class="bord @error('name') form-error @enderror">
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input name="name" type="text" value="" placeholder="Имя"><br>
                </div>
                <div class="bord @error('name') form-error @enderror">
                    @error('phone')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input name="phone" type="text" value="" placeholder="Телефон">
                </div>
                <div class="bord @error('name') form-error @enderror">
                    @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input name="email" type="text" value="" placeholder="Email">
                </div>
                <div class="bord @error('name') form-error @enderror">
                    @error('password')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input name="password" type="password" value="" placeholder="Пароль">
                </div>
                <div>
                    <button class="admin-button" type="submit">Зарегистрироваться</button>
                </div>
            </form>
        </div>
    </div>

@endsection
