@extends('layouts.app')

@section('template_title')
Nuevo profesor
@endsection

@section('content')

<section class="container text-center">    
        <h1 class="mb-5 mt-5">Nuevo profesor</h1>
        <div class="row justify-content-center">
        <div class="col-md-4 col-sm-12">
            <form action="{{ route('admin.teacher.create') }}" method="post" autocomplete="off">
                @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                @endif

                @csrf
                <div class="form-group">
        <div class="d-flex mb-2">
                <label for="name">Nombre</label>
            </div>
                    <input type="text" class="form-control" name="name" placeholder="Nombre del profesor" value="{{ old('name') }}">
                    <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
        <div class="d-flex mb-2">
                <label for="surname">Apellido</label>
            </div>
                    <input type="text" class="form-control" name="surname" placeholder="Apellido del profesor" value="{{ old('surname') }}">
                    <span class="text-danger">@error('surname'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
        <div class="d-flex mb-2">
                <label for="telephone">Teléfono</label>
            </div>
                    <input type="text" class="form-control" name="telephone" placeholder="Teléfono del profesor" value="{{ old('telephone') }}">
                    <span class="text-danger">@error('telephone'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
        <div class="d-flex mb-2">
                <label for="nif">NIF</label>
            </div>
                    <input type="text" class="form-control" name="nif" placeholder="NIF del profesor" value="{{ old('nif') }}">
                    <span class="text-danger">@error('nif'){{ $message }} @enderror</span>
                </div>

                <div class="form-group">
        <div class="d-flex mb-2">
                <label for="email">Email</label>
            </div>
                    <input type="text" class="form-control" name="email" placeholder="E-mail del profesor" value="{{ old('email') }}">
                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
        <div class="d-flex mb-2">
                <label for="password">Contraseña</label>
            </div>
                    <input type="password" class="form-control" name="password" placeholder="Contraseña" value="{{ old('password') }}">
                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
        <div class="d-flex mb-2">
                <label for="cpassword">Confirmar contraseña</label>
            </div>
                    <input type="password" class="form-control" name="cpassword" placeholder="Confirmar contraseña" value="{{ old('cpassword') }}">
                    <span class="text-danger">@error('cpassword'){{ $message }} @enderror</span>
                </div>
                <div class="form-group mt-5">
            <button class="nuevo-registro form-control" type="submit" value="submit">Guardar</button>
        </div>
        <div class="form-group">
            <div class="btn form-control">
                <a class="link-sesion" href="{{ route('admin.teachers.index') }}"> Cancelar</a>
            </div>
        </div>

            </form>
        </div>
        </div>
    </div>
@endsection