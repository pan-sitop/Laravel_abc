<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <h2>Adiciona de alumno</h2>
    
        <form method="POST" action="{{ route('ejemplo.adicionar') }}">

            @csrf
            
            <div class="mb-3">
                <label>Carnet</label>
                <input type="text" class="form-control" name="ci"/>
            </div>
            <div class="mb-3">
                <label>Nombre estudiante</label>
                <input type="text" class="form-control" name="nombre"/>
            </div>
            <div class="mb-3">
                <label>Ap. Paterno</label>
                <input type="text" class="form-control" name="paterno"/>
            </div>
            <div class="mb-3">
                <label>Ap. Materno</label>
                <input type="text" class="form-control" name="materno"/>
            </div>

            <button type="submit" class="btn btn-primary" name="Enviar">Enviar</button>

        </form>


    </body>
</html>
