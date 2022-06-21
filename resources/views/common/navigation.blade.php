@php
    $links = [
        'homepage' => 'Home',
        // 'books' => 'Books',
        'about-us' => 'About us'
    ];
@endphp

<nav>

    @foreach ($links as $route => $label)

        @if ($current_page == $route)
            <span>{{ $label }}</span>
        @else
            <a href="{{ route($route) }}">{{ $label }}</a>
        @endif

    @endforeach

    @auth

        {{ Auth::user()->name }}

        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button>Log out</button>
        </form>

    @else

        <a href="{{ route('login') }}">Login</a>

    @endauth

    @guest

        <a href="{{ route('register') }}">Register here!</a>

    @endguest

</nav>