@section('resetForm')
    @if(!session()->has('successReset'))
        @if($errors->has())
            <div class="alert alert-dismissible alert-danger jq-alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Error!</strong>
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif
        {!! Form::open(['route'=>'reset', 'role' => 'form', 'name' => 'resetForm', 'id'=>'resetForm', 'data-toggle' => 'validator', 'class'=>'form-horizontal' ]) !!}

            <div class="form-group has-feedback">
              <label for="password" class="col-sm-3 control-label hidepola">Nueva Contraseña</label>
              <div class="col-sm-9">
                <input class="form-control" data-minlength-error="Longitud Minima Requerida 6" type="password" data-minlength="6" maxlength="16" id="password" name="password" placeholder="Introduzca Contraseña" required>
                <div class="help-block with-errors" >Contraseña debe estar entre 6 y 16</div>
              </div>
            </div>

            <div class="form-group has-feedback">
              <label for="password_confirmation" class="col-sm-3 control-label hidepola">Repita Contraseña</label>
              <div class="col-sm-9">
                <input data-minlength="6" maxlength="15" class="form-control" type="password" data-match-error="Contraseñas no coinciden" data-match="#password" name="password_confirmation" placeholder="Repita Contraseña" required >
                <div class="help-block with-errors" ></div>
              </div>
            </div>
            <input name="token" value="{{ $token }}" style="display:none">
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                {!! Form::submit('Cambiar',['class' => 'btn btn-primary']) !!}
                </div>
            </div>

        {!! Form::close() !!}
    @else
    <div class="alert alert-dismissible alert-success">
        <strong>Fabuloso!</strong><a href="/" class="alert-link">Cambiaste tu Contraseña</a>
    </div>
    @endif
@stop