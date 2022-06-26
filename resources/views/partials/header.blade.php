<header>
    <div class="header__container">
        <div class="header__logo">
            <img src="{{ asset('images/dc-logo.png') }}" alt="">
        </div>
        <nav>
            <ul class="header__menu">
                @foreach ($headerMenu as $item)
                    <li>
                        <a href="#">
                            {{ $item['text'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>