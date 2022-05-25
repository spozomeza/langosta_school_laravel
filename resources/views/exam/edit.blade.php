@extends('layouts.app')

@section('template_title')
Editar Examen
@endsection

@section('content')
<section class="container text-center">
    @includeif('partials.errors')
    <h1 class="mb-5 mt-5">Editar examen</h1>
    <form method="POST" action="{{ route('teacher.exams.update', $exam->id) }}" role="form" enctype="multipart/form-data">
        @csrf
        @include('exam.form')
    </form>
</section>
@endsection