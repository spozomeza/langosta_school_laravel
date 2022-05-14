<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_schedule') }}
            {{ Form::text('id_schedule', $schedule->id_schedule, ['class' => 'form-control' . ($errors->has('id_schedule') ? ' is-invalid' : ''), 'placeholder' => 'Id Schedule']) }}
            {!! $errors->first('id_schedule', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_class') }}
            {{ Form::text('id_class', $schedule->id_class, ['class' => 'form-control' . ($errors->has('id_class') ? ' is-invalid' : ''), 'placeholder' => 'Id Class']) }}
            {!! $errors->first('id_class', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('time_start') }}
            {{ Form::text('time_start', $schedule->time_start, ['class' => 'form-control' . ($errors->has('time_start') ? ' is-invalid' : ''), 'placeholder' => 'Time Start']) }}
            {!! $errors->first('time_start', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('time_end') }}
            {{ Form::text('time_end', $schedule->time_end, ['class' => 'form-control' . ($errors->has('time_end') ? ' is-invalid' : ''), 'placeholder' => 'Time End']) }}
            {!! $errors->first('time_end', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('day') }}
            {{ Form::text('day', $schedule->day, ['class' => 'form-control' . ($errors->has('day') ? ' is-invalid' : ''), 'placeholder' => 'Day']) }}
            {!! $errors->first('day', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>