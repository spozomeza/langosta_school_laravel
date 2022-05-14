@extends('layouts.app')

@section('template_title')
    {{ $course->name ?? 'Show Course' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Course</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('courses.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Course:</strong>
                            {{ $course->id_course }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $course->name }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $course->description }}
                        </div>
                        <div class="form-group">
                            <strong>Date Start:</strong>
                            {{ $course->date_start }}
                        </div>
                        <div class="form-group">
                            <strong>Date End:</strong>
                            {{ $course->date_end }}
                        </div>
                        <div class="form-group">
                            <strong>Active:</strong>
                            {{ $course->active }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
