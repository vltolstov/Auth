@extends('.layouts.default')

@section('content')

    <p>Форма входа</p>
    <div class="form-wrap">
        <div class="auth-form">
            <form action="{{ route('user.login') }}" method="post">
                @csrf
                @error('formError')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                <div class="bord @error('email') form-error @enderror">
                    @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input name="email" type="text" value="" placeholder="Email">
                </div>
                <div class="bord @error('password') form-error @enderror">
                    @error('password')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <input name="password" type="password" value="" placeholder="Пароль">
                </div>
                <button type="submit" class="admin-button">Войти</button>
            </form>
        </div>
    </div>

@endsection
