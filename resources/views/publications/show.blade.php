@extends('layouts.app')
@section('content')

    <div class="container jumbotron" >
        <div class="row">
            <div class="col-8 container">
                <div class="mx-auto">
                    {{-- Titulo --}}
                    <div class="text-center">
                        <h1>{{$publication->title}}</h1>

                    </div>
                    {{-- Descripcion --}}
                    <div class="text-center">
                        <h5>{{$publication->text}}</h5>

                    </div>

                </div>

                <div class="row mt-5">
                    <div class="col-6 mx-auto text-center">
                        <h5> <strong>Tipo:&nbsp;</strong> {{$publication->type->type}} </h5>

                    </div>
                    <div class="col-6 text-center">
                        <h5> <strong>Ocupación:&nbsp;</strong> {{$publication->occupation->occupation}} </h5>

                    </div>

                </div>

            </div>
            <div class="col-4">
                <div class="mx-auto rounded bg-secondary text-white">
                    <div class="text-center p-1">
                        <h5> <strong>Nombre:&nbsp;</strong> {{$publication->user->name}}</h5>
                        <h5> <strong>Teléfono:&nbsp;</strong> {{$publication->telephone}}</h5>
                        <h5> <strong>Email:&nbsp;</strong> {{$publication->user->email}}</h5>

                    </div>

                </div>

                @if ($publication->user->id = Auth::user()->id)
                    <div class="row mt-2">
                        <a href="#btn" class="btn mx-auto w-25 btn-secondary"> Editar
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                            </svg>

                        </a>

                    </div>

                @endif

            </div>

        </div>

    </div>


@endsection
