<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>
        @php
            $users = [
                [
                    'name' => '<p>Pippo</p>',
                    'email' => 'pippo@email.it',
                    'age' => 30
                ],
                [
                    'name' => '<p>Topolino</p>',
                    'email' => 'topolino@email.it',
                    'age' => 50
                ],
                [
                    'name' => '<p>Minnie</p>',
                    'email' => 'minnie@email.it',
                    'age' => 25
                ]
            ];
        @endphp

        <main>
            <h1>QUESTA PAGINA E' SOLO UN TEST</h1>
            <h4>APRI IL LINK</h4>
            <a href="{{route('home')}}">Home</a>
            {{-- QUESTO E' UN COMMENTO CHE NON VERRA' VISUALIZZATO --}}
            @foreach ($users as $user)

            @if ($loop->first)
                {{$user['name']}}
            @endif

                {{--@if ($user['age'] > 30)
                    <ul>
                        <li>{!!$user['name']!!}</li>
                        <li>{{$user['email']}}</li>
                        <li>{{$user['age']}}</li>
                    </ul>
                @endif--}}

            @endforeach

            {{--@forelse ($users as $user)
                <li>{{ $user['name'] }}</li>
            @empty
                <p>No users</p>
            @endforelse--}}
        </main>
    </body>
</html>
