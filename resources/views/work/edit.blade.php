@extends('layouts.app')

@section('template_title')
Editar trabajo
@endsection

@section('content')
<section class="container text-center">
    @includeif('partials.errors')
    <h1 class="mb-5 mt-5">Editar trabajo</h1>
    <form method="POST" action="{{ route('teacher.works.update', $work->id) }}" role="form" enctype="multipart/form-data">
        @csrf
        @include('work.form')
    </form>
</section>
@endsection