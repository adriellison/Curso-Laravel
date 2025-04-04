<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/script.js"></script>
</head>
<body>
    <img src="/img/banner.jpg" alt="Banner">
    @if (10 > 5)
        <p>A condição é verdadeira</p>
    @endif

    @if ($nome == $usuario)
        <p>O nome é igual ao usuário</p>
    @endif

    {{-- Comentário --}}
    @for($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }} - {{ $i}}</p>
    @endfor

    @foreach($nomes as $nome)
        <p>{{ $nome }}</p>
    @endforeach
</body>
</html>