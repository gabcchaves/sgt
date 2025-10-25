<!DOCTYPE html>
<html>
    <head>
        <title>Tarefas</title>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body class="w-100">
        <nav class="navbar bg-light shadow-sm">
            <h1 class="navbar-brand text-center w-100">Tarefas</h1>
        </nav>

        <div class="container mt-5">
            <ul class="list-group shadow-sm">
                @foreach ($tarefas as $tarefa)

                    <li class="list-group-item d-flex justify-content-between">
                        <div> {{ $tarefa->titulo }} </div>
                        <div> {{ $tarefa->completo }} </div>
                    </li>

                @endforeach
            </ul>
        </div>
    </body>
</html>
