@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Editar Usuario: {{ $usuario->name}}</h3>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!!Form::model($usuario,['method'=>'PATCH','route'=>['acceso.usuario.update',$usuario->id]])!!}
            {{Form::token()}}
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="name" required value="{{$usuario->name}}" class="form-control"
                       placeholder="Nombre...">
            </div>
            <div class="form-group">
                <label for="nombre">Email</label>
                <input type="email" name="email" required value="{{$usuario->email}}" class="form-control"
                       placeholder="Correo...">
            </div>
            <input type="hidden" name="password" value="xxxxxx" required class="form-control">
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

            {!!Form::close()!!}

        </div>
    </div>


@endsection