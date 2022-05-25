@extends('layouts.app')

@section('template_title')
Nuevo examen
@endsection

@section('content')
<section class="container text-center">
    @includeif('partials.errors')
    <h1 class="mb-5 mt-5">Nuevo examen</h1>
    <form method="POST" action="{{ route('teacher.exams.store') }}" role="form" enctype="multipart/form-data">
        @csrf
        @include('exam.form')
    </form>
</section>
@endsection