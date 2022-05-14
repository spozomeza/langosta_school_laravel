@extends('layouts.app')

@section('template_title')
    {{ $class->name ?? 'Show Class' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Class</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('classes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Class:</strong>
                            {{ $class->id_class }}
                        </div>
                        <div class="form-group">
                            <strong>Id Teacher:</strong>
                            {{ $class->id_teacher }}
                        </div>
                        <div class="form-group">
                            <strong>Id Course:</strong>
                            {{ $class->id_course }}
                        </div>
                        <div class="form-group">
                            <strong>Id Schedule:</strong>
                            {{ $class->id_schedule }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $class->name }}
                        </div>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $class->color }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
