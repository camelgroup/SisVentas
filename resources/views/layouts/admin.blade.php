<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Camel Ventas </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">

        <!-- Logo -->
        <a class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>CV</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Camel Ventas</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Navegación</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <small class="bg-green">Online</small>
                            <span class="hidden-xs">
							
							{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">

                                <p>
                                    Camel Group- Desarrollando Software
                                </p>
								<img src="http://localhost:8000/imagenes/IconoUsuario.png" alt="CAMEL GROUP" height="100px" width="100px">
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">

                                <div class="pull-right">
                                    <a href="{{url('/logout')}}" class="btn btn-default btn-flat">Cerrar Sesion</a>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>

        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header"></li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>Almacén</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('almacen/articulo')}}"><i class="fa fa-circle-o"></i> Artículos</a></li>
                        <li><a href="{{url('almacen/categoria')}}"><i class="fa fa-circle-o"></i> Categorías</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Ventas</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('ventas/venta')}}"><i class="fa fa-circle-o"></i> Ventas</a></li>
                        <li><a href="{{url('ventas/cliente')}}"><i class="fa fa-circle-o"></i> Clientes</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>Acceso</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('acceso/usuario')}}"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('nosotros/camel')}}">
                        <i class="fa fa-info-circle"></i> <span>Quienes Somos?</span>
                    </a>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>


    <!--Contenido-->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Sistema de Ventas</h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>

                                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <!--Contenido-->
                                @yield('contenido')
                                <!--Fin Contenido-->
                                </div>
                            </div>

                        </div>
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </section>
    </div><!-- /.col -->
</div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->
<!--Fin-Contenido-->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2016-2020 <a href="www.camelgroup.com">developers.camel</a>.</strong> All rights reserved.
</footer>


<!-- jQuery 2.1.4 -->
<script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/app.min.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#bt_add').click(function () {
                agregar();
            });
        });

        var cont = 0;
        total = 0;
        subtotal = [];
        $("#guardar").hide();
        $("#pidarticulo").change(mostrarValores);

        function mostrarValores()
        {
            datosArticulo=document.getElementById('pidarticulo').value.split('_');
            $("#pprecio_venta").val(datosArticulo[2]);
            $("#pstock").val(datosArticulo[1]);
        }

        function agregar() {

            datosArticulo=document.getElementById('pidarticulo').value.split('_');

            idarticulo = datosArticulo[0];
            articulo = $("#pidarticulo option:selected").text();
            cantidad = $("#pcantidad").val();

            descuento = $("#pdescuento").val();
            precio_venta = $("#pprecio_venta").val();
            stock=$("#pstock").val();

            if (idarticulo != "" && cantidad!="" && cantidad>0 && descuento!="" && precio_venta!=""){
                if (parseInt(stock) >= parseInt(cantidad)) {
                    if (parseInt(descuento) < parseInt(precio_venta)) {
                        if (parseInt(descuento) > -1) {
                        subtotal[cont]= (cantidad*precio_venta-descuento);
                        total=total+subtotal[cont];

                        var fila = '<tr class="selected" id="fila' + cont + '"> <td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+
                        ');">X</button> </td><td><input type="hidden" name="idarticulo[]" value="'+idarticulo+'">'+articulo+
                        '</td><td><input type="number" name="cantidad[]" value="'+cantidad+
                        '"></td><td><input type="number" name="precio_venta[]" value="'+precio_venta+
                        '"></td><td><input type="number" name="descuento[]" value="'+descuento+
                        '"></td><td>'+subtotal[cont]+'</td></tr>';

                        cont++;

                        limpiar();
                        $("#total").html("$/. " + total);
                        $("#total_venta").val(total);
                        evaluar();
                        $("#detalles").append(fila);
                        } else {
                        alert("El descuento no puede ser negativo");
                        }
                    } else {
                        alert("El descuento no puede ser mayor al precio de venta");
                    }
                } else {
                    alert("La cantidad a vender supera el stock");
                }
            } else {
                alert("Error al ingresar el detalle de la venta, revise los datos del articulo");
            }
        }

        function limpiar() {
            $("#pcantidad").val("");
            $("#pdescuento").val("0");
            $("#pprecio_venta").val("");
        }

        function evaluar() {
            if(total>0){
                $("#guardar").show();
            } else {
                $("#guardar").hide();
            }
        }

        function eliminar(index) {
            total = total-subtotal[index];
            $("#total").html("Bs. " + total);
            $("#total_venta").html(total);
            $("#fila" + index).remove();
            evaluar();
        }

    </script>
</body>
</html>
