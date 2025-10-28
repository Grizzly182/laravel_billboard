<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a href="{{ route('index') }}" class="navbar-brand me-auto">Главная</a>
        @guest
        <a class="nav-item text-light nav-link" href="{{ route('register') }}">Регистрация</a>
        <a class="nav-item text-light nav-link" href="{{ route('login') }}">Вход</a>
        @endguest
        @auth
        <a class="nav-item text-light nav-link" href="{{ route('home') }}">Мои объявления</a>
        <form action="{{ route('logout') }}" method="post" class="form-inline">
            @csrf
            <input type="submit" class="btn btn-danger" value="Выход">
        </form>
        @endauth
    </div>
</nav>
