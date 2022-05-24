@extends('layouts.app')

@section('template_title')
Nuevo profesor
@endsection

@section('content')
<section class="container text-center">
    @includeif('partials.errors')
    <h1 class="mb-5 mt-5">Nuevo profesor</h1>
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Teacher</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.teachers.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('teacher.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
