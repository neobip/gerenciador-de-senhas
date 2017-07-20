<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <title>Teste</title>

    </head>
    <body>
       
        <table>
            <tr>
                <th>Acesso</th>
                <th>Login</th>
                <th>Senha</th>
                <th>OBS</th>
            </tr>   
            @foreach($senhas as $senha)
            <tr>
                <td>{{$senha->id}}</td>
                <td>{{$senha->id}}</td>
                <td>{{$senha->pwd}}</td>
                <td>{{$senha->obs}}</td>
                <td>{{$senha->obs}}</td>
                <td><a class="btn btn-small btn-info" href="{{ URL::to('senhas/' . $senha->id . '/edit') }}">Editar</a></td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
