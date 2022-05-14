<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_work') }}
            {{ Form::text('id_work', $work->id_work, ['class' => 'form-control' . ($errors->has('id_work') ? ' is-invalid' : ''), 'placeholder' => 'Id Work']) }}
            {!! $errors->first('id_work', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_class') }}
            {{ Form::text('id_class', $work->id_class, ['class' => 'form-control' . ($errors->has('id_class') ? ' is-invalid' : ''), 'placeholder' => 'Id Class']) }}
            {!! $errors->first('id_class', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_student') }}
            {{ Form::text('id_student', $work->id_student, ['class' => 'form-control' . ($errors->has('id_student') ? ' is-invalid' : ''), 'placeholder' => 'Id Student']) }}
            {!! $errors->first('id_student', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $work->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mark') }}
            {{ Form::text('mark', $work->mark, ['class' => 'form-control' . ($errors->has('mark') ? ' is-invalid' : ''), 'placeholder' => 'Mark']) }}
            {!! $errors->first('mark', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>