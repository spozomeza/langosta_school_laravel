@extends('layouts.app')

@section('template_title')
    Clase
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Clase') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('admin.clases.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

										<th>Id Teacher</th>
										<th>Id Course</th>
										<th>Id Schedule</th>
										<th>Name</th>
										<th>Color</th>
										<th>Created At</th>
										<th>Updated At</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clases as $clase)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $clase->id_teacher }}</td>
											<td>{{ $clase->id_course }}</td>
											<td>{{ $clase->id_schedule }}</td>
											<td>{{ $clase->name }}</td>
											<td>{{ $clase->color }}</td>
											<td>{{ $clase->created_at }}</td>
											<td>{{ $clase->updated_at }}</td>

                                            <td>
                                                <form action="{{ route('admin.clases.destroy',$clase->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('admin.clases.show',$clase->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('admin.clases.edit',$clase->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $clases->links() !!}
            </div>
        </div>
    </div>
@endsection
