<html>
    <head>
        <title>Latihan View Laravel</title>
        <a href="{{ route('halaman apaya') }}">halaman apaya</a>
    </head>

    <body>
        <br>
        data user pelangan 
        <br>
        nama : {{ $data['user'] }}
        <br>
        pass : {{ $data['pass'] }}
    </body>
</html>