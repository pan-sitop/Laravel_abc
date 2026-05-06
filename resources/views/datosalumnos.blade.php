<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Alumnos - Web III</title>
    <!-- Enlace a Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                
                <!-- Encabezado y Botón de Navegación -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="text-dark">Gestión de Estudiantes</h2>
                    <a href="/nuevo-alumno" class="btn btn-primary shadow-sm">
                        + Ir a Formulario Nuevo
                    </a>
                </div>

                <!-- Mensaje de éxito/error -->
                @if(session('mensaje'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>¡Hecho!</strong> {{ session('mensaje') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Sección de la Tabla -->
                <div class="card shadow">
                    <div class="card-header bg-dark text-white">
                        <h5 class="mb-0">Lista de Alumnos registrados</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="px-4">CI</th>
                                        <th>Nombre</th>
                                        <th>Ap. Paterno</th>
                                        <th>Ap. Materno</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($datos as $alumno)
                                    <tr>
                                        <td class="px-4 fw-bold text-secondary">{{ $alumno->ci }}</td>
                                        <td>{{ $alumno->nombre }}</td>
                                        <td>{{ $alumno->paterno }}</td>
                                        <td>{{ $alumno->materno }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>

    <!-- Script para que funcionen las alertas de cierre (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>