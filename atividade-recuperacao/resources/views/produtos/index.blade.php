<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Lista de Produtos</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Nome</th>
            <th>Preço</th>
        </tr>
        @foreach($produtos as $produto)
            <tr>
                <td>{{ $produto['nome'] }}</td>
                <td>R$ {{ $produto['preco'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
