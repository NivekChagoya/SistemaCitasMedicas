@extends('plantilla')
@section('contenido')
<section class="content">
    <center>
        <h1>Seleccione como desea ingresar al sistema</h1>
    </center>

    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="small-box" style="background-color:hotpink; color:aliceblue;">
                <div class="inner">
                    <h3>Secretaria</h3>
                    <p>Inicie Sesion</p>
                </div>
                <div class="icon">
                    <i class="fa fa-female"></i>
                </div>
                <a href="ingresar" class="small-box-footer">
                    Ingresar<i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box" style="background-color:forestgreen; color:aliceblue;">
                <div class="inner">
                    <h3>Doctor</h3>
                    <p>Inicie Sesion</p>
                </div>
                <div class="icon">
                    <i class="fa fa-user-md"></i>
                </div>
                <a href="ingresar" class="small-box-footer">
                    Ingresar<i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box" style="background-color:gold; color:aliceblue;">
                <div class="inner">
                    <h3>Paciente</h3>
                    <p>Inicie Sesion</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="ingresar" class="small-box-footer">
                    Ingresar<i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box" style="background-color:firebrick; color:aliceblue;">
                <div class="inner">
                    <h3>Administrador</h3>
                    <p>Inicie Sesion</p>
                </div>
                <div class="icon">
                    <i class="fa fa-male"></i>
                </div>
                <a href="ingresar" class="small-box-footer">
                    Ingresar<i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection