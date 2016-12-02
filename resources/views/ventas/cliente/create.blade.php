@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Nuevo Cliente</h3>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {!!Form::open(array('url'=>'ventas/cliente','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control"
                       placeholder="Nombre...">
            </div>
            <div class="form-group">
                <label for="nombre">Direccion</label>
                <input type="text" name="direccion" value="{{old('direccion')}}" class="form-control"
                       placeholder="Direccion...">
            </div>
            <div class="form-group">
                <label for="nombre">Documento</label>
                <select name="tipo_documento" class="form-control">
                    <option value="CI">CI</option>
                    <option value="NIT">NIT</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nombre">Numero documento</label>
                <input type="text" name="num_documento" required value="{{old('num_documento')}}" class="form-control"
                       placeholder="Numero documento...">
            </div>
            <div class="form-group">
                <label for="nombre">Telefono</label>
                <input type="text" name="telefono" value="{{old('telefono')}}" class="form-control"
                       placeholder="Telefono...">
            </div>
            <div class="form-group">
                <label for="nombre">Email</label>
                <input type="text" name="email" value="{{old('email')}}" class="form-control"
                       placeholder="Email...">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

            {!!Form::close()!!}

        </div>
    </div>
@endsection