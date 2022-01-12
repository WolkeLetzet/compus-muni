@extends('layouts.app')

@section('content')
    <div>
        <a name="" id="" class="btn btn-primary" href="{{ route('form') }}" role="button">Agregar Comutador</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Oficina</th>
                <th>Responsable</th>
                <th>Tipo de Uso</th>
                <th>Fecha</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>RAM</th>
                <th>HDD</th>
                <th>SO</th>
                <th>Comentario</th>
            </tr>
        </thead>
        
        <tbody>
        @foreach ($computers as $item)
        <tr>
            <th class="id">
                {{$item->id}}
            </th>
            <!--<th>
                {{$item->oficina}}
            </th>
            <th>
                {{$item->responsable}}
            </th>
             <th>
                {{$item->tipo_uso}}
            </th>
            <th>
                {{$item->fecha}}

            </th>
           
            
            <th>
                {{$item->marca}}
            </th>
            <th>
                {{$item->modelo}}
            </th>
            <th>
                {{$item->ram}}
            </th>
            <th>
                {{$item->almacenamiento}}
            </th>
            <th>
                {{$item->SO}}
            </th>
            <th class="comentario">
                {{$item->comentarios}}
            </th>

        </tr>
    -->
            
        @endforeach
        </tbody>
    </table>

    <style>
        .id{
            width: 5%;
        }
    </style>
@endsection
