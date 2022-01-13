@extends('layouts.app')

@section('content')
    <div>
        <a class="btn btn-primary" href="computers/create" role="button">Agregar Comutador</a>
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
        <tr><a href="{{route('computer-edit')}}">
            <th class="id">
                {{$item->id}}
            </th>
            <th>
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
            </a>
        </tr>
    
            
        @endforeach
        </tbody>
    </table>
    

    <style>
        .id{
            width: 5%;
        }
        svg{
          
            font-size: 20px;
            width: 40px;
        }
        tbody tr:hover{
            background-color: #f5f5f5;
        }

    </style>
@endsection
