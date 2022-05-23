@extends('layouts.app')

@section('template_title')
    Exam
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Exam') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('teacher.exams.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Id Class</th>
										<th>Id Student</th>
										<th>Name</th>
										<th>Mark</th>
										<th>Created At</th>
										<th>Updated At</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($exams as $exam)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $exam->id_class }}</td>
											<td>{{ $exam->id_student }}</td>
											<td>{{ $exam->name }}</td>
											<td>{{ $exam->mark }}</td>
											<td>{{ $exam->created_at }}</td>
											<td>{{ $exam->updated_at }}</td>

                                            <td>
                                                <form action="{{ route('teacher.exams.destroy',$exam->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('teacher.exams.show',$exam->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('teacher.exams.edit',$exam->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $exams->links() !!}
            </div>
        </div>
    </div>
@endsection
