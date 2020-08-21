<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <header>
            <ul>
                <li>
                    <a href="{{route("home")}}">{{__("messages.home_menu_label")}}</a>
                </li>
                <li>
                    <a href="{{route("contatti")}}">{{__("messages.contact_menu_label")}}</a>
                </li>
            </ul>
            <ul>
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>
                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </header>
        @yield('content')
    </body>
</html>
