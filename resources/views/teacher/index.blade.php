@extends('layouts.app')

@section('template_title')
    Teacher
@endsection

@section('content')
<!-- Inicio Body -->
<div class="container text-center">
    <h1 class="mb-5 mt-5">Profesores</h1>
    <!-- El contenido va aqui -->
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('admin.teachers.create') }}">
            <div class="nuevo-registro"><i class="bi bi-plus-circle"></i> Nuevo profesor</div>
        </a>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <!--tabla con los contenidos a mostrar-->
    <table id="tabla" class="table text-center">
        <thead class="thead-light">
            <tr>
                <th style="border-top-left-radius:10px;">ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Nif</th>
                    <th>Surname</th>
                    <th>Telephone</th>
                    <th>Date Registered</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th style="border-top-right-radius:10px;">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->email }}</td>
                        <td>{{ $teacher->nif }}</td>
                        <td>{{ $teacher->surname }}</td>
                        <td>{{ $teacher->telephone }}</td>
                        <td>{{ $teacher->date_registered }}</td>
                        <td>{{ $teacher->created_at }}</td>
                        <td>{{ $teacher->updated_at }}</td>
                        <td class="d-flex justify-content-center">
                            <form action="{{ route('admin.teachers.destroy',$teacher->id) }}" method="POST">
                                <a href="{{ route('admin.teachers.show',$teacher->id) }}"><i class="bi bi-eye-fill icono mr-1"></i></a>
                                <a href="{{ route('admin.teachers.edit',$teacher->id) }}"><i class="bi bi-pencil-square icono mr-1"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background-color:transparent;"><i class="bi bi-trash3-fill icono ml-1"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

            <tfooter class="thead-light">
            <tr>
                <th style="border-bottom-left-radius:10px;">ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Nif</th>
                <th>Surname</th>
                <th>Telephone</th>
                <th>Date Registered</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th style="border-bottom-right-radius:10px;">Acciones</th>
            </tr>
        </tfooter>
    </table>
</div>
@endsection
