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

            </div>

            <div class="col-4 container bg-secondary text-white">
                <div class="mx-auto mt-2">

                    <div class="d-flex  flex-column">
                        <h5> <strong>Nombre:&nbsp;</strong> {{$publication->user->name}}</h5>
                        <h5> <strong>Teléfono:&nbsp;</strong> {{$publication->telephone}}</h5>
                        <h5> <strong>Email:&nbsp;</strong> {{$publication->user->email}}</h5>
                    </div>
                </div>
            </div>

        </div>

    </div>


@endsection
