@extends('layouts.app')
@section('content')

<table class="table container">

    <thead class="thead-dark">
        <tr class="text-center row">
            <th scope="col" class="col">#</th>
            <th scope="col" class="col">Titulo</th>
            <th scope="col" class="col">Tipo</th>
            <th scope="col" class="col">Ocupación</th>
            <th scope="col" class="col">Accion</th>
        </tr>
    </thead>

    <tbody>
        @php
            $counterPublications=0
        @endphp


        @foreach ($publications as $publication)
            <tr class="text-center row">

                @php
                    //contador de publications del usuario
                    $counterPublications = $counterPublications + 1
                @endphp

                <th class="col d-flex align-items-center justify-content-center">{{$counterPublications}}</th>
                <td class="col d-flex align-items-center justify-content-center">{{$publication->title}}</td>
                <td class="col d-flex align-items-center justify-content-center">{{$publication->type->type}}</td>
                <td class="col d-flex align-items-center justify-content-center">{{$publication->occupation->occupation}}</td>
                <td class="col">

                    <a href={{route('publicationsShow', ['publication' => $publication])}} class="btn btn-success w-100">Ver&nbsp
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                            <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                        </svg>
                    </a>

                    <a href={{route('publicationsEdit', ['publication' => $publication])}} class="btn btn-secondary w-100">Editar&nbsp
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                        </svg>
                    </a>


                    <a href="#" id="{{$publication->id}}" class="eliminar btn btn-danger w-100" >
                        Eliminar&nbsp
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                        </svg>
                    </a>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>


<div class= "row" >
    <a class='btn btn-outline-dark w-25 mx-auto' href={{route('publicationsCreate')}}>Añadir Nueva Publicación</a>
</div>

<div class= "row mt-3 d-flex justify-content-center">
    <div>{{$publications->links()}}</div>
</div>

@endsection
@section('scripts')
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script type="text/javascript" defer>
    $(document).ready(function() {

        $(".eliminar").click(function(e){
            e.preventDefault();
            var id = e.currentTarget.id
            console.log();
        })


    })


</script>

@endsection
