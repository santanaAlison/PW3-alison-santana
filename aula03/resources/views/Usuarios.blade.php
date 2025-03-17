<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Simples</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 10px;
            padding: 20px;
        }
        
        h2 {
            color: #333;
        }
        
        form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            text-align: left;
        }
        
        label, input {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
        
        input {
            padding: 7px;
            border: 1px solid #ccc;
            border-radius: 5px;
           
        }
        
        button {
            background: #28a745;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
        }
        
        button:hover {
            background: #218838;
        }
        
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        
        th {
            background: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <h2>Formulário de Cadastro</h2>
    <form action="/usuarios" method="post">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="txtNome" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="txtEmail" required>

        <button type="submit">Cadastrar</button>
    </form>

    <h2>Usuários Cadastrados</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $u)
            <tr>
                <td>{{$u->id}}</td>
                <td>{{$u->Nome}}</td>
                <td>{{$u->Email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
