<!DOCTYPE html>
<html>
    <head>
        <title>Tarefas</title>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: "Fira Sans", sans-serif;
            }
        </style>
    </head>
    <body class="w-100">
        <nav class="navbar bg-light shadow-sm">
            <h1 class="navbar-brand text-center w-100">Tarefas</h1>
        </nav>

        <div class="container mt-5">
            <ul class="list-group shadow-sm">
                @foreach ($tarefas as $tarefa)

                    <li class="list-group-item d-flex justify-content-between">
                        <div class="d-flex align-items-center"> {{ $tarefa->titulo }} </div>
                        <div class="d-flex align-items-center">
                            @if ($tarefa->completo)
                                <button class="btn btn-lg btn-link"><i class="bi bi-check-square"></i></button>
                            @else
                                <button class="btn btn-lg btn-link"><i class="bi bi-square"></i></button>
                            @endif
                        </div>
                    </li>

                @endforeach
            </ul>
        </div>
    </body>
</html>
