<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema</title>
</head>
<body>
    
    <form action="/atualizar-candidato/{{ $candidato->id }}" method="POST">
        @csrf 
        @method("PUT")  
        <label for="">Nome:</label>
        <input type="text" placeholder="digite seu nome."   name="nome_candidato" value ="{{ $candidato->nome }}">
        </br>
        <label for="">Nome:</label>
        <input type="text" placeholder="digite seu nome."   name="sobrenome_candidato" value ="{{ $candidato->sobrenome }}">
        <br/> <br />
        <label for="">numero:</label>
        <input type="text" placeholder="digite seu numero." name="numero_candidato" value ="{{ $candidato->numero }}">
        <br/> <br />
        <button>editar cadastro</button>
    </form>





</body>
</html>

