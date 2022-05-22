@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1 class="mb-5 mt-5">Panel de administración</h1>
    <div class="row">
        <div class="col-md-8 mx-auto">
        <div class="grid-card">
        <a href="">
            <div class="menu-admin-opt p-4">
                <i class="bi bi-mortarboard-fill"></i> Alumnos
            </div>
        </a>
        <a href="/teachers">
            <div class="menu-admin-opt p-4">
                <i class="bi bi-briefcase-fill"></i> Profesores
            </div>
        </a>
        <a href="/courses">
            <div class="menu-admin-opt p-4">
                <i class="bi bi-clipboard-check"></i> Cursos
            </div>
        </a>        
        <a href="/enrollments">
            <div class="menu-admin-opt p-4">
                <i class="bi bi-journal-text"></i> Matrículas
            </div>
        </a>        
        <a href="/schedules">
            <div class="menu-admin-opt p-4">
                <i class="bi bi-alarm-fill"></i> Horarios
            </div>
        </a>
        <a href="/classes">
            <div class="menu-admin-opt p-4">
                <i class="bi bi-easel"></i> Clases
            </div>
        </a>
    </div>

    </div>
</div>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard | Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3" style="margin-top: 45px">
            <h4>Perfil Admin?</h4><hr>
            <table class="table table-striped table-inverse table-responsive">
                <thead class="thead-inverse">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td scope="row">{{ Auth::guard('admin')->user()->name }}</td>
                    <td>{{ Auth::guard('admin')->user()->email }}</td>
                    <td>{{ Auth::guard('admin')->user()->phone }}</td>
                    <td>
                        <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                        <form action="{{ route('admin.logout') }}" id="logout-form" method="post">@csrf</form>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<<<<<<< HEAD
</body>
</html>
=======


>>>>>>> ce251d731c241e56d7f4d612fddf449d91a33dee
@endsection