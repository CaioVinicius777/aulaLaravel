




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Produtos</title>
</head>
<body>
  <table border="1">
    <tr>
      <th>Nome</th>
      <th>Descição</th>
      <th>Preço</th>
      <th>Ações</th>
    </tr>
    @foreach ($produto as $produto)
    <tr>
      <td>{{($produto->nome)}}</td>
      <td>{{($produto->descricao)}}</td>
      <td>{{($produto->preco)}}</td>
      <td>

      <form method="POST" action="/deletar_produto/{{$produto->id}}">
      <a href="/listar_produto/{{$produto->id}}">Editar</a> <br>
        @csrf
        {{ method_field("DELETE") }}
        
        <input type="submit" value="delete produto">
      <
      </form>
      </td>
    </tr>
    @endforeach
  </table>
</body>
</html>