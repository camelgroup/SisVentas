@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Nueva Venta</h3>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
    {!!Form::open(array('url'=>'ventas/venta','method'=>'POST','autocomplete'=>'on'))!!}
    {{Form::token()}}
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <div class="form-group">
                <label for="nombre">Cliente</label>
                <select name="idcliente" id="idcliente" class="form-control selectpicker"
                        data-live-search="true">
                    @foreach($personas as $persona)
                        <option value="{{$persona->idpersona}}">{{$persona->nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group" style="display: none;">
                <label for="tipo_comprobante">Tipo Comprobante</label>
                <input type="hidden" name="tipo_comprobante" id="tipo_comprobante" value="Venta" class="form-control">
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group" style="display: none;">
                <label for="serie_comprobante">Serie Comprobante</label>
                <input type="hidden" name="serie_comprobante" value="001" class="form-control"
                       placeholder="Serie comprobante...">
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group" style="display: none;">
                <label for="num_comprobante">Numero Comprobante</label>
                <input type="hidden" name="num_comprobante" value="001" class="form-control"
                       placeholder="Numero comprobante...">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-body">
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <label>Articulo</label>
                        <select name="pidarticulo" class="form-control selectpicker"
                                data-live-search="true" id="pidarticulo">
                            @foreach($articulos as $articulo)
                                <option value="{{$articulo->idarticulo}}_{{$articulo->stock}}_{{$articulo->precio_promedio}}">{{$articulo->articulo}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="pcantidad" id="pcantidad" class="form-control"
                               placeholder="Cantidad...">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" disabled name="pstock" id="pstock" class="form-control"
                               placeholder="Stock...">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <label for="precio_venta">Precio Venta</label>
                        <input type="text" disabled name="pprecio_venta" id="pprecio_venta" class="form-control"
                               placeholder="Precio venta...">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <label for="descuento">Descuento</label>
                        <input type="number" min="0" name="pdescuento" id="pdescuento" class="form-control" value="0" 
                               placeholder="Descuento...">
                    </div>
                </div>


                <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                    <div class="form-group">
                        <button type="button" id="bt_add" class="btn btn-primary">Agregar</button>
                    </div>
                </div>

                <div class="col-lg-12 col-sm-12 col-md-12 col-sx-12">
                    <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                        <thead style="background-color: #A9D0F5">
                        <th>Opciones</th>
                        <th>Articulo</th>
                        <th>Cantidad</th>
                        <th>Precio Venta</th>
                        <th>Descuento</th>
                        <th>Subtotal</th>
                        </thead>
                        <tfoot>
                        <th>TOTAL</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th><h4 id="total">Bs. 0.00</h4><input type="hidden"
                                                               name="total_venta" id="total_venta"></th>
                        </tfoot>
                        <tbody>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-sx-12" id="guardar">
            <div class="form-group">
                <input name="_token" value="{{ csrf_token() }}" type="hidden">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
        </div>
    </div>
    {!!Form::close()!!}

@endsection