<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Listado de usuarios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>{{ $title }}</h1>

    <hr>

    @empty($users)
        <ul>
        @foreach ($users as $user) 
            <li>{{ $user }}</li>
        @endforeach
        </ul>
    @else
        <p>No hay usuarios registrados</p>
    @endempty
    
    {{ time() }}

</body>
</html>