<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
  <title>Predection</title>
</head>
<body>
  <header>
    <ul>

      <li>
        <a href="/">Home</a>
      </li>

      @guest
        <li>
          <a href="{{ route('login') }}">Login</a>
        </li>

        <li>
          <a href="{{ route('register') }}">SignUp</a>
        </li>
      @endguest

      <li>
        <a href="{{ route('predictions.create') }}">Add User Info</a>
      </li>

      @auth
        <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
        >
          {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="width: 0">
            @csrf
        </form>
      @endauth
    </ul>
  </header>
  {{ $slot }}
</body>
</html>
