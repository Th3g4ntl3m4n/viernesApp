<!-- resources/views/contacto.blade.php -->

@extends('template')

@section('content')

<div class="container mt-5">
    <h2 class="mb-4 text-center">Formulario de Contacto</h2>
    <form method="POST" action="{{ route('formContact') }}">
        @csrf

        <!-- Nombre -->
        <div class="form-group mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Ingresa tu nombre completo">
        </div>

        <!-- Celular -->
        <div class="form-group mb-3">
            <label for="celular" class="form-label">Celular:</label>
            <input type="text" class="form-control" id="celular" name="celular" required placeholder="Ingresa tu número de celular">
        </div>

        <!-- Correo Electrónico -->
        <div class="form-group mb-3">
            <label for="email" class="form-label">Correo Electrónico:</label>
            <input type="email" class="form-control" id="email" name="email" required placeholder="Ingresa tu correo electrónico">
        </div>

        <!-- Servicios de Interés -->
        <div class="form-group mb-3">
            <label for="servicios" class="form-label">Servicios de Interés:</label>
            <select class="form-control" id="servicios" name="servicios">
                <option value="Desarrollo Web">Seleccione uno</option>
                <option value="Desarrollo Web">Desarrollo Web</option>
                <option value="Hacking Ético">Hacking Ético</option>
                <option value="Desarrollo Digital">Desarrollo Digital</option>
                <option value="Redes y Conectividad">Redes y Conectividad</option>
                <option value="Auditoría ISO 27001">Auditoría ISO 27001</option>
                <option value="Consultoría">Consultoría</option>
            </select>
        </div>

        <!-- Observaciones -->
        <div class="form-group mb-4">
            <label for="observaciones" class="form-label">Observaciones:</label>
            <textarea class="form-control" id="observaciones" name="observaciones" rows="4" placeholder="Escribe tus observaciones o dudas"></textarea>
        </div>

        <!-- Botón de Envío -->
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary btn-lg">Agendar</button>
        </div>
    </form>

    <!-- Mensaje de éxito (si lo hay) -->
    @if(session('success'))
        <div class="alert alert-success mt-4">
            {{ session('success') }}
        </div>
    @endif
</div>

@endsection
