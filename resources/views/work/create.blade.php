@extends('layouts.app')

@section('template_title')
Nuevo trabajo
@endsection

@section('content')
<section class="container text-center">
    @includeif('partials.errors')
    <h1 class="mb-5 mt-5">Nuevo trabajo</h1>
    <form method="POST" action="{{ route('teacher.works.store') }}" role="form" enctype="multipart/form-data">
        @csrf
        @include('work.form')
    </form>
</section>
@endsection