<div class="row justify-content-center">
    <div class="col-md-4 col-sm-12">

    <div class="form-group">
            <div class="mb-2">
                <div class="d-flex mb-2">
                    <label for="id_class">ID Clase</label>
                </div>
            {{ Form::number('id_class', $exam->id_class, ['class' => 'form-control' . ($errors->has('id_class') ? ' is-invalid' : ''), 'placeholder' => 'Id Clase']) }}
            {!! $errors->first('id_class', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <div class="form-group">
            <div class="d-flex mb-2">
                <label for="id_student">ID Estudiante</label>
            </div>
            {{ Form::number('id_student', $exam->id_student, ['class' => 'form-control' . ($errors->has('id_student') ? ' is-invalid' : ''), 'placeholder' => 'Id Estudiante']) }}
            {!! $errors->first('id_student', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            <div class="d-flex mb-2">
                <label for="name">Nombre</label>
            </div>
            {{ Form::text('name', $exam->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            <div class="d-flex mb-2">
                <label for="mark">Nota</label>
            </div>
            {{ Form::number('mark', $exam->mark, ['class' => 'form-control' , 'step'=>'any'. ($errors->has('mark') ? ' is-invalid' : ''), 'placeholder' => 'Nota']) }}
            {!! $errors->first('mark', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group mt-5">
            <button class="nuevo-registro form-control" type="submit" value="submit">Guardar</button>
        </div>

        <div class="form-group mb-5">
            <div class="btn form-control">
                <a class="link-sesion" href="{{ route('teacher.exams.index') }}"> Cancelar</a>
            </div>
        </div>
    </div>
</div>
