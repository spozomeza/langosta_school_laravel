@extends('layouts.app')

@section('template_title')
Editar Usuario
@endsection

@section('content')
<section class="container text-center">
    @includeif('partials.errors')
    <h1 class="mb-5 mt-5">Editar perfil</h1>
    <form method="POST" action="{{ route('user.update', auth()->user()->id ) }}" role="form" enctype="multipart/form-data">
        @csrf
        @include('dashboard.user.form')
    </form>
</section>
@endsection