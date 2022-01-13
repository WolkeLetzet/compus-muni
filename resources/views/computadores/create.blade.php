@extends('layouts.app')


@section('content')

    <div class="container">
        <form action="{{url('/computers')}}" method="POST">
            @csrf

            <div >
                <input name="oficina" type="text" placeholder="Oficina">
            </div>
            <div>
                <input name="responsable" type="text" placeholder="Responsable">
            </div>
            <div>
                <input name="tipo_uso" type="text" placeholder="Tipo de Uso">
            <div>
                <input name="fecha" type="text" placeholder="Fecha">
            </div>
            <div>
                <input name="marca" type="text" placeholder="Marca">

            </div>

            <div>
                <input name="modelo" type="text" placeholder="Modelo">
            
            </div>

            <div>
                <input name="ram" type="text" placeholder="RAM">
            </div>

            <div>
                <input name="almacenamiento" type="text" placeholder="Almacenamiento">
            </div>

            <div>
                <input name="so" type="text" placeholder="Sistema Operativo">
            </div>

            <div>
                <textarea value="" name="comentarios" cols="30" rows="3" placeholder="Comentario"></textarea>
            </div>
            <button type="submit">Guardar Computador</button>


        </form>


    </div>

@endsection
