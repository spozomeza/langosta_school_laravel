<div class="row justify-content-center">
    <div class="col-md-4 col-sm-12">

    <div class="form-group">
            <div class="mb-2">
                <div class="d-flex mb-2">
                    <label for="username">Nombre de usuario</label>
                </div>
            {{ Form::text('username', auth()->user()->username, ['class' => 'form-control' . ($errors->has('username') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de usuario']) }}
            {!! $errors->first('username', '<div class="invalid-feedback">:message</div>') !!}
            </div>
</div>

<div class="form-group">
            <div class="d-flex mb-2">
                <label for="name">Nombre</label>
            </div>
            {{ Form::text('name', auth()->user()->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            <div class="d-flex mb-2">
                <label for="email">Email</label>
            </div>
            {{ Form::text('email', auth()->user()->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            <div class="d-flex mb-2">
                <label for="nif">NIF</label>
            </div>
            {{ Form::text('nif', auth()->user()->nif, ['class' => 'form-control' . ($errors->has('nif') ? ' is-invalid' : ''), 'placeholder' => 'NIF']) }}
            {!! $errors->first('nif', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            <div class="d-flex mb-2">
                <label for="surname">Apellido</label>
            </div>
            {{ Form::text('surname',auth()->user()->surname, ['class' => 'form-control' . ($errors->has('surname') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('surname', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            <div class="d-flex mb-2">
                <label for="telephone">Teléfono</label>
            </div>
            {{ Form::text('telephone', auth()->user()->telephone, ['class' => 'form-control' . ($errors->has('telephone') ? ' is-invalid' : ''), 'placeholder' => 'Teléfono']) }}
            {!! $errors->first('telephone', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            <div class="d-flex mb-2">
                <label for="date_registered">Fecha de registro</label>
            </div>
            {{ Form::text('date_registered', auth()->user()->date_registered, ['class' => 'form-control' . ($errors->has('date_registered') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de registro']) }}
            {!! $errors->first('date_registered', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group mt-5">
            <button class="nuevo-registro form-control" type="submit" value="submit">Guardar</button>
        </div>

        <div class="form-group mb-5">
            <div class="btn form-control">
                <a class="link-sesion" href="{{ route('user.home') }}"> Cancelar</a>
            </div>
        </div>
        
    </div>
</div>
